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



}
