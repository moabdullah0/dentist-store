<?php

namespace App\Http\Controllers\layoutes;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class layoutes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::all();
        $cartCount = Cart::content()->count();
        return view('layoutes.layoutes',compact('category','cartCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function showproduct($id)

    {

        if(Category::where('id',$id)->exists()){
            $category= Category::where('id',$id)->first();
            $products= Products::where('category_id',$category->id)->get();

            $cart=Cart::content();
            $cartCount = Cart::content()->count();

            return view('show-product-from-category.index',compact('products','category','cart','cartCount'));
        }
        else{
            return redirect('/');
        }
    }

    public function showallproduct(){
$products=Products::all();
return view('pages.allproduct',compact('products'));

    }

    /**
     * Store a newly created resource in storage.
     */
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


        return view('pages.product-detailes', compact('product'));
    }
public function cart(){

        $product=Products::all();

    $cartCount = Cart::content()->count();

    $wishlist = Cart::instance('default')->restore(auth()->user()->getAuthIdentifier());
    $cartItems = Cart::instance('default')->content();
    return view('pages.cart-shopping', compact('product','cartItems','cartCount'));
}
public function checkout(){
/*$cart=Cart::where('user_id',auth()->user()->getAuthIdentifier());
foreach ($cart as $cartProduct){
    $product=Products::find($cartProduct->product_id);
    if (!$product && $product->quantity < $cartProduct->qty){
$this->checkout_message='error:product not found in stock';

    }
}*/
    $cartCount = Cart::content()->count();
    Cart::instance('default')->restore(auth()->user()->getAuthIdentifier());
    $cartItems = Cart::instance('default')->content();
        return view('pages.checkout' , compact('cartItems','cartCount'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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
        return back();
    }

    public function destroyall($id)
    {
        Cart::destroy();
        return back();
    }

}
