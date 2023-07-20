<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use App\Models\Wishlist;
use Gloudemans\Shoppingcart\Facades\Cart;
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



    public function show()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Get the authenticated user ID
            $userId = auth()->user()->id;

            // Get the wishlist items for the authenticated user
            $wishlistItems = Wishlist::where('user_id', $userId)->get();
        } else {
            // User is not authenticated, set wishlistItems to an empty array
            $wishlistItems = [];
        }

        // Get all users
        $users = User::all();
        $user = Auth::user();
        $cartCount = Cart::content()->count();
        Cart::instance('default')->restore(auth()->user()->getAuthIdentifier());
        $cartItems = Cart::instance('default')->content();

        return view('pages.wishlistpages', compact('users', 'wishlistItems', 'cartItems', 'cartCount', 'user'));
    }




    public function removeProductFromWishlist(Request $request, $productId)
    {
        $user = auth()->user();

        // Find the wishlist item by the product ID and user ID
        $wishlistItem = Wishlist::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        if (!$wishlistItem) {
            return redirect()->back()->with('error', 'Product not found in the wishlist.');
        }

        // Delete the wishlist item
        $wishlistItem->delete();

        return redirect()->back()->with('success', 'Product removed from the wishlist successfully.');
    }



}
