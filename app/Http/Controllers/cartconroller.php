<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class cartconroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=Products::all();


        return view('pages.cart-shopping',compact('product',));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $product=Products::findOrFail($request->input('product_id'));

        Cart::add($product->id, $product->title, $request->input('quantity'), $product->price);
        return redirect()->back()->with('message','Added is Sucsess');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
