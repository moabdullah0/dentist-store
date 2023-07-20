<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function add(Products $product)
    {
        $userId = auth()->user()->id;

        // Check if the product already exists in the user's wishlist
        if (Wishlist::where('user_id', $userId)->where('product_id', $product->id)->exists()) {
            return redirect()->back()->with('error', 'Product already exists in the wishlist.');
        }

        // Add the product to the wishlist
        Wishlist::create([
            'user_id' => $userId,
            'product_id' => $product->id,
        ]);

        return redirect()->back()->with('success', 'Product added to the wishlist successfully.');
    }



    public function removeFromWishlist(Product $product)
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Remove the product from the user's wishlist
        $user->wishlist()->detach($product);

        return redirect()->route('wishlist.show')->with('success', 'Product removed from wishlist.');
    }



}
