<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/allproducts','App\Http\Controllers\ProductsController@index')->name('users.produits.allproducts');
Route::get('/allproduct/{namecat?}/{namep?}','App\Http\Controllers\ProductsController@getproduct')->name('users.produits.productDetails');




Route::post('/panier/ajouter','App\Http\Controllers\CartController@store')->name('cart.store');

Route::get('/ValiderAchats','App\Http\Controllers\CartController@index')->name('users.produits.myproducts');

Route::get('/viderPanier', function()
{
    Cart::destroy();
});



/*==================================PARTIE ADMIN =======================================================*/

Route::get('/adminDashboard', function()
{
    return view('admin.dashboard'); // return to the view of dashboard.blade.php that exist in the admin folder inside the ressource folder
});