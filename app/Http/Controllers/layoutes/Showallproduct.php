<?php

namespace App\Http\Controllers\layoutes;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class Showallproduct extends Controller
{
    public function showallproduct(){
        $products=Products::all();
        $cart=Cart::content();
        $cartCount = Cart::content()->count();
        return view('pages.allproduct',compact('products','cartCount','cart'));

    }
}
