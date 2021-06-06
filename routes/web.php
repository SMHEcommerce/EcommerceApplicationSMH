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



//===============PARTIE USER _ Gestion des Produits=============================================//
Route::get('/allproducts','App\Http\Controllers\ProductsController@index')->name('users.produits.allproducts');
Route::get('/allproduct/{namecat?}/{namep?}','App\Http\Controllers\ProductsController@getproduct')->name('users.produits.productDetails');



Route::get('/allmyproduct/{namecat?}/{namep?}','App\Http\Controllers\ProductsController@getmyproduct')->name('users.produits.myproductDetails');

Route::get('/myproduct/delete/{namecat?}/{namep?}','App\Http\Controllers\CartController@delete')->name('cart.delete');
Route::post('/panier/ajouter','App\Http\Controllers\CartController@store')->name('cart.store');
Route::get('/ValiderAchats','App\Http\Controllers\CartController@index')->name('users.produits.myproducts');


Route::get('/SuivreCommande','App\Http\Controllers\CartController@suivreCmd')->name('users.produits.suivreCommande');
Route::get('/SuivreCommandes','App\Http\Controllers\CartController@suivreCmdStat')->name('users.produits.suivreCommandeStat');





/*==================================PARTIE ADMIN =======================================================*/

Route::get('/adminDashboard', function()
{
    return view('admin.dashboard'); // return to the view of dashboard.blade.php that exist in the admin folder inside the ressource folder
})->name('admin.dashboard');


Route::get('/gestionStock','App\Http\Controllers\ProductsController@indexAdmin')->name('admin.gestionstock');


/*Route::get('/gestionStock',function()
{
    return view('admin.gestionstock');
});
*/

// Route to Get a category and Route to ADD a Product in that category --Admin--
Route::get('/gestionStock/AddProduct/{namecat?}','App\Http\Controllers\ProductsController@addProduct')->name('admin.addProduct');

Route::post('/product/save/{namecat?}','App\Http\Controllers\ProductsController@save')->name('product.save');


// Route to Get a category and Route to MODIFY a Product in that category --Admin--
Route::get('/gestionStock/ModifyProduct/{namecat?}/{namep?}','App\Http\Controllers\ProductsController@editProduct')->name('admin.editProduct');

Route::put('/product/update/{namecat?}/{namep?}','App\Http\Controllers\ProductsController@update')->name('product.update');



// Route to Get a category and Route to DELETE a Product in that category --Admin--
Route::get('/gestionStock/DeleteProduct/{namecat?}/{namep?}','App\Http\Controllers\ProductsController@deleteProduct')->name('admin.deleteProduct');

Route::get('/product/delete/{namecat?}/{namep?}','App\Http\Controllers\ProductsController@delete')->name('product.delete');



// Route to Get a category and Route to ADD a CATEGORY in that category --Admin--
Route::get('/gestionStock/AddCategory','App\Http\Controllers\ProductsController@addCategory')->name('admin.addCategory');

Route::post('/category/save','App\Http\Controllers\ProductsController@saveCategory')->name('category.save');


//Route to get the view that show the Command of users 
Route::get('/commandesUsers','App\Http\Controllers\CartController@allcart')->name('admin.commandesUsers.commandes');



//Route to update the status of a command of a user
Route::post('/commandesUsers/update/{user_id?}','App\Http\Controllers\CartController@updateStatus')->name('commande.update');

//=======================================================================================================//

