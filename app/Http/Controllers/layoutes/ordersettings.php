<?php

namespace App\Http\Controllers\layoutes;

use App\Http\Controllers\Controller;
use App\Models\city;
use App\Models\discount;
use App\Models\orders;
use App\Models\Category;
use App\Models\ordersdetailes;
use App\Models\Products;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use App\Notifications\OrderConfirmationNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Session;
class ordersettings extends Controller
{

    public function checkout()
    {
        $user = auth()->user();
        $city = City::all();
        $discount = discount::first();
        $cartCount = Cart::content()->count();
        Cart::instance('default')->restore(auth()->user()->getAuthIdentifier());
        $cartItems = Cart::instance('default')->content();
        $product=Products::first();
        $orders = orders::all();

        // Ensure the $discount variable is valid
//        if (!$discount instanceof Collection) {
//            $discount = collect();
//        }

        return view('pages.checkout', compact('cartItems', 'cartCount', 'user', 'discount', 'city','product'));
    }



    public function checkoutstore(Request $request)
    {
        $cartItems = Cart::instance('default')->content();

        foreach ($cartItems as $cart) {
            $product = Products::find($cart->id);

            if (!$product) {
                // Product not found in stock
                return redirect('/checkout')->with('error', 'لم يعد هذا المنتج متوفر');
            }

            if ($product->numofpeace <= 3) {
                // Insufficient quantity in stock
                return back()->with('error', 'لا تتوفر الكمية في المستودع');
            }

            $order = new orders();
            $order->user_id = $request->user_id;
            $order->product_id = $cart->id;
            $order->product_name = $cart->name;
            $order->total_price = $cart->subtotal;
            $order->name = $request->name;
            $order->email = $request->email;

            $user = User::find($request->user_id);
            if (!$user) {
                // User not found
                return redirect()->back()->with('message', 'User not found');
            }

            // Get the roles assigned to the user
            $order->roles = $user->getRoleNames();
            $order->phone = $request->phone;
            $order->status = $request->status;
            $order->city_id = $request->city_id;
            $order->address = $request->address;
            $order->quantity = $cart->qty;

            if ($product->discount_student && $user->hasRole('طالب')) {
                $discountedPrice = $cart->subtotal - ($cart->subtotal * ($product->discount_student / 100));
                $order->discount_student = $product->discount_student;
                $order->price_after_discount = $discountedPrice;
                $order->discount_company = null;
            } elseif ($product->discount_company && $user->hasRole('شركة')) {
                $discountedPrice = $cart->subtotal - ($cart->subtotal * ($product->discount_company / 100));
                $order->discount_company = $product->discount_company;
                $order->price_after_discount = $discountedPrice;
                $order->discount_student = null;
            } else {
                $discountedPrice = $cart->subtotal - $product->discount_company;
                $order->discount_company = $product->discount_company;
                $order->price_after_discount = $discountedPrice;
                $order->discount_student = null;
            }

            $order->save();
            $order->checkout();

            $orderDetail = new ordersdetailes();
            $orderDetail->user_id = $request->user_id;
            $orderDetail->orders_id = $order->id;
            $orderDetail->product_id = $cart->id;
            $orderDetail->numofpeace = $cart->qty;
            $orderDetail->price = $cart->price;
            $orderDetail->total_price = $cart->subtotal;
            $orderDetail->save();

            // Decrement the quantity of the product
            $product->numofpeace -= $cart->qty;
            $product->save();
        }

        $id = orders::pluck('id')->toArray();
        Session::put('id', $id);

        Cart::instance('default')->destroy();

        Notification::route('mail', config('mail.from.address'))
            ->notify(new OrderConfirmationNotification());

        return redirect('/thankyou');
    }



    public function thank(){
        $user=Auth::user();
        $cartCount = Cart::content()->count();
        return view('pages.thankyou',compact('cartCount','user'));
    }

    public function show($orderId)
    {
        $order = orders::findOrFail($orderId);
        $orderDetails = $order->orderDetails;

        return view('orders.show', compact('order', 'orderDetails'));
    }
    public function show_order_user($userId)
    {
        $user=Auth::user();
        $cartCount = Cart::content()->count();
        $order = orders::where('user_id',Auth::user()->getAuthIdentifier())->get()->toarray();

        if ($order) {

            return view('pages.showorders-user', compact('order','cartCount','user'));
        } else {
            return redirect()->back()->with('message', 'Order not found');
        }
    }

}
