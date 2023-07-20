<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(App\Http\Controllers\dashboard\dashboard::class)->middleware('auth')->group(function(){
    Route::get('admin','index');
    Route::get('admin/show-order','showorders');
    Route::get('admin/filtersail','sailesfilter')->name('orders.sailesfilter');
    Route::get('admin/orders/{userId}','show')->name('orders.show');

});

require __DIR__.'/auth.php';
Route::controller(App\Http\Controllers\category\addcategory::class)->middleware('auth')->group(function(){
    Route::get('/admin/add-category','create');
    Route::post('/admin/add-category','store');
    Route::get('/admin/show-category','index');
    Route::get('/admin/edit-category/{id}','edit');
    Route::put('/admin/update-category/{id}','update');
    Route::delete('/admin/delete-category/{id}','destroy');

});

Route::controller(App\Http\Controllers\product\product::class)->middleware('auth')->group(function(){
    Route::get('/admin/add-product','create');
    Route::post('/admin/add-product','store');
    Route::get('/admin/show-product','index');
    Route::get('/admin/edit-product/{id}','edit');
    Route::put('/admin/update-product/{id}','update');
    Route::delete('/admin/delete-product/{id}','destroy');

});
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);

});
Route::controller(App\Http\Controllers\layoutes\layoutes::class)->group(function(){
    Route::get('/','index')->name('home.index');

    Route::get('/carts','carts')->name('carts.carts');



});
Route::controller(App\Http\Controllers\layoutes\ShowproductfromCategory::class)->group(function(){
    Route::get('/show-products/{id}','showproduct')->middleware('auth');

});

Route::controller(App\Http\Controllers\layoutes\Showallproduct::class)->group(function(){
    Route::get('/products','showallproduct')->name('product.allproduct')->middleware('auth');
    Route::get('/products/search', 'search')->name('products.search');

});
Route::controller(App\Http\Controllers\WishlistController::class)->group(function(){
    Route::get('/whislist/show', 'show');
    Route::post('/wishlist/add/{product}', 'add')->name('wishlist.add');
    Route::delete('/wishlist/remove/{productId}', 'removeProductFromWishlist')->name('wishlist.remove');



});
Route::controller(App\Http\Controllers\layoutes\CartSetting::class)->group(function(){

    Route::get('/product-detailes/{id}','show')->middleware('auth')->name('product-detailes.show');
    Route::get('/cart','cart')->name('cart.cart')->middleware('auth');
    Route::post('/cartshopping/{id}','store')->name('cartcartshopping.store');
    Route::delete('/cartshopping/{id}', 'destroy')->name('cart.remove');
    Route::put('/cartshopping/{id}', 'update')->name('cart.edit');
});

Route::controller(App\Http\Controllers\layoutes\ordersettings::class)->group(function(){
    Route::get('/checkout','checkout')->name('checkout')->middleware('auth');
    Route::get('/thankyou','thank')->name('thank')->middleware('auth');
    Route::post('/checkout-save','checkoutstore')->name('checkout')->middleware('auth');
Route::get('/order-detailes/{id}','show');
Route::get('order-user/{id}','show_order_user');

});
Route::controller(App\Http\Controllers\layoutes\addcityController::class)->group(function(){
    Route::get('admin/add-city','create')->name('users.city');
    Route::post('admin/add-city','store');

});

Route::controller(App\Http\Controllers\DiscountController::class)->group(function(){
    Route::get('admin/show-discount','index');
    Route::get('admin/add-discount','create');
    Route::post('admin/add-discount','store');
});
