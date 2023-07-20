<?php

namespace App\Http\Controllers\layoutes;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Showallproduct extends Controller
{
    public function showallproduct(){
        $user=Auth::user();
        $products=Products::all();
        $cart=Cart::content();
        $cartCount = Cart::content()->count();
        return view('pages.allproduct',compact('products','cartCount','cart','user'));

    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $user=Auth::user();
        $cart=Cart::content();
        $cartCount = Cart::content()->count();
        // Perform the search query
        $products = Products::where('title', 'LIKE', "%{$searchTerm}%")->get();

        return view('pages.search', compact('products', 'searchTerm','cartCount','cart','user'));
    }





}
