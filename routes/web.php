<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WoodyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
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
        return view('index');

});
Route::resource('products', WoodyController::class);
Route::controller(WoodyController::class)->group(function () {

    Route::get('/', 'index')->name('products.index');
    Route::get('/create', 'create')->name('products.create');
    Route::get('category/{name}/products', 'index')->name('products.category');
    Route::post('/product', 'store')->name('products.store');
    Route::delete('/product/{id}', 'destroy')->name('products.destroy');
    Route::get('/product/{id}/edit', 'edit')->name('products.edit');
    Route::patch('/product/{id}', 'update')->name('products.update');
    Route::get('/product/{id}', 'show')->name('show');


});
Route::controller(RegisterController::class)->group(function () {

    Route::get('/register', 'formRegister')->name('products.register');
    Route::post('/register/store', 'registerUser')->name('users.register');
});

Route::controller(LoginController::class)->group(function () {

    Route::get('/login', 'formLogin')->name('products.login');
    Route::post('/login/store', 'CustomLogin')->name('Custom.login');
    Route::get('signout','signOut')->name('signout');
});
Route::controller(CartController::class)->group(function () {

    Route::get('/cart', 'showCart')->name('cart.show');
    Route::post('/ajoutCart/{id}','ajoutCart')->name('cart.add');


});

    Route::get('/products/{id}', 'ProductController@show')->name('product.show');
    Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
