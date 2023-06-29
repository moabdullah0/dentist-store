<?php

namespace App\Http\Controllers\layoutes;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowproductfromCategory extends Controller
{
    public function showproduct($id)

    {

        if(Category::where('id',$id)->exists()){
            $user=Auth::user();
            $category= Category::where('id',$id)->first();
            $products= Products::where('category_id',$category->id)->get();

            $cart=Cart::content();
            $cartCount = Cart::content()->count();

            return view('show-product-from-category.index',compact('products','category','cart','cartCount','user'));
        }
        else{
            return redirect('/');
        }
    }
}
