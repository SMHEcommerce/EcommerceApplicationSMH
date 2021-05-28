<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    //function to get all products of all categories 
    public function index()
    {
       
        $products = Products::all();   // a variable to get all data that exist in the Products table in our database
        return view('users.produits.allproducts',compact('products')); // send the data to the 'allproducts view as the name of 'products'
    }

   /* public function getproduct(/*Request $namecat, $namep)
    {
        //$category = Products::find($namecat);
        $products = Products::find($namep);
        return view('users.produits.productDetails',compact(/*'category','products'));
    }*/

    //function to get the product selected 
    public function getproduct($namecat=null,$namep=null)
        {
           /* $products = Products::find($namecat);   don't use find ! it is based only on ID !
            $data = Products::find($namep);*/ 



            $products = Products::where("namecat",$namecat)->first();

            // to get the product that we want ! 
            $produit = null;
            $data = $products->produits;
            foreach($data as $prd)
            {
                if($prd['namep'] == $namep)
                {
                    $produit=$prd;
                }
            }


            //$data = collect($products->produits)->where("namep",$namep); // to get the product that we waant method 2
           // dd($namecat);  // to verify if the data is null or not !  it's better to use one dd() by one or use it as an array that containt your parameters that u wanna check
           // dd($produit);    
            return view('users.produits.productDetails',compact('products','produit'));
        }


}
