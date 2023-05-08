<?php

namespace App\Http\Controllers\layoutes;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartSetting extends Controller
{
    public function store(Request $request,$id)
    {
        $product=Products::find($id);
        Cart::instance('default');


        $newcart= Cart::instance('default')->add($product->id, $product->title, $request->input('quantity'), $product->price);


        Cart::store(auth()->user()->getAuthIdentifier());



// To store a cart instance named 'wishlist'

        $cartCount = Cart::content()->count();
        $wishlist = Cart::instance('default')->restore(auth()->user()->getAuthIdentifier());
        $cartItems = Cart::instance('default')->content();

        return redirect()->back()->with(compact('product','cartItems','cartCount'));
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $product = Products::find($id);
        $cart=Cart::content();
        $cartCount = Cart::content()->count();

        return view('pages.product-detailes', compact('product', 'cart','cartCount'));
    }
    public function cart(){

        $product=Products::all();

        $cartCount = Cart::content()->count();

        $wishlist = Cart::instance('default')->restore(auth()->user()->getAuthIdentifier());
        $cartItems = Cart::instance('default')->content();
        return view('pages.cart-shopping', compact('product','cartItems','cartCount'));
    }

    public function update(Request $request, $id)
    {
        $rowId = $id;
        $qty = $request->input('quantity');

        Cart::update($rowId, $qty);
        Cart::instance('default')->store(auth()->user()->id);



        return redirect()->back()->with('success_message', 'Quantity has been updated!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $rowId)
    {
        Cart::remove($rowId);
        Cart::instance('default')->store(auth()->user()->id);
        return back()->with('success_message', 'item has been removed!');
    }

    public function destroyall($id)
    {
        Cart::destroy();
        return back();
    }

}
