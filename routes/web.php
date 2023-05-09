<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WoodyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
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

    Route::get('home', function () {
        return view('home');

});
Route::resource('products', WoodyController::class);
Route::controller(WoodyController::class)->group(function () {

    Route::get('/', 'index')->name('products.index');
    Route::get('/create', 'create')->name('products.create')->middleware('is_admin');
    Route::get('category/{name}/products', 'index')->name('products.category');
    Route::post('/product', 'store')->name('products.store');
    Route::delete('/product/{id}', 'destroy')->name('products.destroy')->middleware('is_admin');
    Route::get('/product/{id}/edit', 'edit')->name('products.edit')->middleware('is_admin');
    Route::patch('/product/{id}', 'update')->name('products.update');
    Route::get('/product/{id}', 'show')->name('show');

    //Options categories

    Route::get('/create/cate', 'createcate')->name('category.create')->middleware('is_admin');
    Route::post('/store/cate', 'storecate')->name('category.store')->middleware('is_admin');
    Route::get('/update/{id}/cate', 'updatecate')->name('category.update')->middleware('is_admin');
    Route::delete('/create/cate/{id}', 'destroycate')->name('category.destroy')->middleware('is_admin');
    Route::get('/show/cate', 'showcate')->name('category.view')->middleware('is_admin');
    Route::get('/edit/{id}/cate', 'editcate')->name('categories.edit')->middleware('is_admin');

    //Routes Commandes

    Route::get('/commande/create', 'order')->name('create.order');
    Route::get('/recap/order', 'inforder')->name('recap.order');
    Route::post('/recap', 'storder')->name('store.order');


});
Route::controller(RegisterController::class)->group(function () {

    Route::get('/register', 'formRegister')->name('products.register');
    Route::post('/register/store', 'registerUser')->name('users.register');
});

Route::controller(LoginController::class)->group(function () {

    Route::get('/login', 'formLogin')->name('products.login');
    Route::post('/login/store', 'CustomLogin')->name('Custom.login');
    Route::get('signout','signOut')->name('signout');
    Route::get('/login/admin', 'adminLogin')->name('adminHome');

});
Route::controller(CartController::class)->group(function () {

    Route::get('/cart', 'showCart')->name('cart.show');
    Route::post('/ajoutCart/{id}','ajoutCart')->name('cart.add');
    Route::delete('/cart/{id}', 'destroyCart')->name('cart.delete');
    Route::delete('/cart', 'clearCart')->name('cart.clear');
    Route::post('/cart/{id}', 'updateCart')->name('cart.update');

});

Route::controller(HomeController::class)->group(function(){

    Route::get('/admin/home', 'adminHome')->name('adminHome');

});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin', 'HomeController@admin')->name('admin');
});

