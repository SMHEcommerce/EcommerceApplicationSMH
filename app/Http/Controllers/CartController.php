<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Products;

class CartController extends Controller
{
    
/**
 * 
 * @param \Illuminate\Http\Request  $request
 * @param \Illuminate\Http\Response
 */

 public function store(Request $request)
 {
    
   // $produit = Products::where("id",$request->id)->first();;
     //dd($request->id,$request->title, 1, $request->price,$request->quantite);

    
    // $id_prod=$request->id;
    
    
     
    // $produit = Products::::where("id",$request->produit_id)->first();

     Cart::add($request->id,$request->title, 1, $request->price)   // soit 1 quantite de produit ajouter au panier (a verifier apres)
            ->associate('App\Models\Products');

         return redirect()->route('users.produits.allproducts')->with('success','Le produit a bien été ajouté.');   
 
 
        }


 public function index()
 {
     


     //dd(Cart::content());
     return view('users.produits.myproducts');
 }
}
