<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use App\Models\User;
use Auth;
use View;

class CartController extends Controller
{
    public function store(Request $request)
    {
       
        $cart = Cart::where("user_id",$request->user_id)->first();
        //check if cart dosent exist
        if(!$cart)
        {
            $cart = new Cart();
            $cart->user_id= $request->user_id;
            $cart->user_name=$request->user_name;
            $cart->user_pdp=$request->user_pdp;
            $cart->status = "En cours de traitement";
            $cart->save();
        }

        $prixOP = $request->prix * $request->occurence;
    
        $cart->push('produits_C', array('namep' => $request->namep,'namecat' => $request->namecat, 'prix'=>$prixOP,'occurence'=>$request->occurence));

        
        if($cart)
        {
            return redirect('/allproducts')->with('success','Le produit a bien été Ajouter Au panier. ');
        }

      //dd($cart);
     
      
    }



    public function index()
    {
        $cart = Cart::where("user_id",Auth::user()->_id)->first();   
        /*$totalP = $cart->sum('produits_C[prix]');
        foreach($cart->produits_C as $produit)
        {
            dd($produit['prix']);
        }*/

        $totalP=0;
        foreach($cart->produits_C as $product)
        {
            $totalP += $product['prix'];
        }
        $carty = Cart::where("user_id",Auth::user()->_id)->pluck('produits_C');
        $totalA=0;
        foreach($carty as $product)
        {
            $totalA += count($product);
        }

       // return view("navigation-menu",compact('totalA'));
       View::share('totalA',$totalA);
        
        return view('users.produits.myproducts',compact('cart','totalP'));
    }


    public function delete($namecat,$namep)
    {
        $cart = Cart::where("user_id",Auth::user()->_id)->first();   

        $cartD = $cart->pull('produits_C', [
            'namecat' => $namecat,'namep' => $namep,
        ]);
  
        if($cartD)
        {
            return redirect('/allproducts')->with('success','Le produit a bien été Supprimer du panier. ');
        }
    }




    public function suivreCmd()
    {
        $cart = Cart::where("user_id",Auth::user()->_id)->first();   
        /*$totalP = $cart->sum('produits_C[prix]');
        foreach($cart->produits_C as $produit)
        {
            dd($produit['prix']);
        }*/

        $cart->status = "En cours de traitement";
        $cart->save();
        $totalP=0;
        foreach($cart->produits_C as $product)
        {
            $totalP += $product['prix'];
        }
        
        $carty = Cart::where("user_id",Auth::user()->_id)->pluck('produits_C');
        $totalA=0;
        foreach($carty as $product)
        {
            $totalA += count($product);
        }

       // return view("navigation-menu",compact('totalA'));
       View::share('totalA',$totalA);
        
        return view('users.produits.suivreCommande',compact('cart','totalP'));
    }




    
    public function suivreCmdStat()
    {
        $cart = Cart::where("user_id",Auth::user()->_id)->first();   
        /*$totalP = $cart->sum('produits_C[prix]');
        foreach($cart->produits_C as $produit)
        {
            dd($produit['prix']);
        }*/

        $totalP=0;
        foreach($cart->produits_C as $product)
        {
            $totalP += $product['prix'];
        }
        
        $carty = Cart::where("user_id",Auth::user()->_id)->pluck('produits_C');
        $totalA=0;
        foreach($carty as $product)
        {
            $totalA += count($product);
        }

       // return view("navigation-menu",compact('totalA'));
       View::share('totalA',$totalA);
        
        return view('users.produits.suivreCommande',compact('cart','totalP'));
    }




    public function allcart()
    {
        $cart = Cart::where('status', 'exists', true)->get();  
       // dd($cart->user_id); 
      // dd($cart[1]->user_id);
        //for ($i = 0; $i <= 1000; $i++)
        //{
          //      dd($cart[$i]->user_id);
            
            
        //}
        //dd($cart);
        $cnt = $cart->count();
       // dd($cnt);
      //  dd($cart->count());
    //dd($cart->produits_C);
        return view('admin.commandesUSers.commandes',compact('cart','cnt'));
    }




    public function updateStatus($user_id,Request $request)
    {

      
        $cartUp = Cart::where("user_id",$user_id)->first();   
        $cartUp->status = $request->statUpdate;
        $cartUp->save();
        $cart = Cart::where('status', 'exists', true)->get();  
      
        $cnt = $cart->count();
      

        return back()->with('success','Statut mis à jour avec succès ');
    }

  
    
}
