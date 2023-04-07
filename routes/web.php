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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(App\Http\Controllers\dashboard\dashboard::class)->group(function(){
    Route::get('admin','index');});

require __DIR__.'/auth.php';
Route::controller(App\Http\Controllers\category\addcategory::class)->group(function(){
    Route::get('/admin/add-category','create');
    Route::post('/admin/add-category','store');
    Route::get('/admin/show-category','index');
    Route::get('/admin/edit-category/{id}','edit');
    Route::put('/admin/update-category/{id}','update');
    Route::delete('/admin/delete-category/{id}','destroy');
});

Route::controller(App\Http\Controllers\product\product::class)->group(function(){
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
