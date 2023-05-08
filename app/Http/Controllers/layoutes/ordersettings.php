<?php

namespace App\Http\Controllers\layoutes;

use App\Http\Controllers\Controller;
use App\Models\city;
use App\Models\orders;
use App\Models\Category;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Session;
class ordersettings extends Controller
{

    public function checkout(){

        $user = auth()->user();
        $city=city::all();
        $cartCount = Cart::content()->count();
        Cart::instance('default')->restore(auth()->user()->getAuthIdentifier());
        $cartItems = Cart::instance('default')->content();
        return view('pages.checkout' , compact('cartItems','cartCount','user'));
    }
    public function checkoutstore(Request $request){
        $cartItems = Cart::instance('default')->content();
        foreach ($cartItems as $cart) {
            $product = Products::find($cart->id);

            if (!$product) {
                // Product not found in stock
                return redirect('/checkout')->with('error', 'لم يعد هذا المنتج متوفر');
            }

            if ($product->numofpeace < $cart->qty) {
                // Insufficient quantity in stock
                return back()->with('error','لا تتوفر الكمية في المستودع');
            }

            $order = new orders();
            $order->user_id = $request->user_id;
            $order->product_id = $cart->id;
            $order->product_name = $cart->name;
            $order->total_price = $cart->subtotal;
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->status = $request->status;
            $order->city_id = $request->city_id;
            $order->address = $request->address;
            $order->quantity = $cart->qty;
            $order->save();

            // Decrement the quantity of the product
            $product->numofpeace -= $cart->qty;
            $product->save();
        }

        $id=orders::pluck('id')->toArray();
        Session::put('id',$id);

        Cart::instance('default')->destroy();


        return redirect('/checkout');
    }
}
