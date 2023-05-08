<?php

namespace App\Http\Controllers\layoutes;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\city;
use App\Models\orders;
use App\Models\Products;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
class layoutes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::all();
        $cartCount = Cart::content()->count();
        $user = auth()->user();
        return view('layoutes.layoutes',compact('category','cartCount','user'));
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

public function checkout(){

    $user = auth()->user();
$city=city::all();
    $cartCount = Cart::content()->count();
    Cart::instance('default')->restore(auth()->user()->getAuthIdentifier());
    $cartItems = Cart::instance('default')->content();
        return view('pages.checkout' , compact('cartItems','cartCount','user'));
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

}
