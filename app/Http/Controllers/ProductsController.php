<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use Auth;
use View;

class ProductsController extends Controller
{
    //function to get all products of all categories for USERS

    public function index()
    {
       
        $products = Products::all();   // a variable to get all data that exist in the Products table in our database
        
        $cart = Cart::where("user_id",Auth::user()->_id)->pluck('produits_C');
        $totalA=0;
        foreach($cart as $product)
        {
            $totalA += count($product);
        }

       // return view("navigation-menu",compact('totalA'));
       View::share('totalA',$totalA);
        return view('users.produits.allproducts',compact('products','totalA')); // send the data to the 'allproducts view as the name of 'products'
    }


     //function to get all products of all categories  FOR ADMINS

     public function indexAdmin()
     {
        
        $products = Products::all();
        $produits = Products::all()->pluck('produits'); // we will use it to calculate how much of products they exist
     
       $total=0;
       foreach($produits as $product)
       {
           $total += count($product);
       }
        //dd($total);


         $totalC = Products::count(); // calculate how much of category it exist
         return view('admin.gestionstock',compact('products','total','totalC')); // send the data to the 'allproducts view as the name of 'products'
     }




  

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

            $cart = Cart::where("user_id",Auth::user()->_id)->pluck('produits_C');
        $totalA=0;
        foreach($cart as $product)
        {
            $totalA += count($product);
        }

       // return view("navigation-menu",compact('totalA'));
       View::share('totalA',$totalA);

            //$data = collect($products->produits)->where("namep",$namep); // to get the product that we waant method 2
           // dd($namecat);  // to verify if the data is null or not !  it's better to use one dd() by one or use it as an array that containt your parameters that u wanna check
           // dd($produit);    
            return view('users.produits.productDetails',compact('products','produit'));
        }





//return view getmyproduct so as to have the ability to annuler commande
        
    public function getmyproduct($namecat=null,$namep=null)
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

        $cart = Cart::where("user_id",Auth::user()->_id)->pluck('produits_C');
        $totalA=0;
        foreach($cart as $product)
        {
            $totalA += count($product);
        }

       // return view("navigation-menu",compact('totalA'));
       View::share('totalA',$totalA);

        //$data = collect($products->produits)->where("namep",$namep); // to get the product that we waant method 2
       // dd($namecat);  // to verify if the data is null or not !  it's better to use one dd() by one or use it as an array that containt your parameters that u wanna check
       // dd($produit);    
        return view('users.produits.myproductDetails',compact('products','produit'));
    }











        //Function to Add a product
    
        
      //function to show the AddProduct page and getiing all products of a categories  FOR ADMINS

      public function addProduct($namecat)
      {
         
          $product = Products::where("namecat",$namecat)->first(); // a variable to get all data that exist in the Products table in our database
        //dd($namecat);
            return view('admin.addProduct',compact('product')); // send the data to the 'allproducts view as the name of 'products'
      }


    public function save($namecat=null,Request $request)
    {
       // dd($request->nameP);  // to verify what is our request ==> We verified to get the name of the product (here we've used ' nampP ' wchich is the name of the input where the admin has entered the name)
        
       // Let's save data in mongoDB now ! 

       $da = Products::where("namecat",$namecat)->push('produits', array( $request->all()));
      
        // Let's show a success msg
       return back()->with('success','Le produit a bien été ajouté. (Ajouter un autre, ou annuler)');
     
       
    }




    //function to show the EditProduct page and getiing the product of a categories  FOR ADMINS

    public function editProduct($namecat,$namep)
    {
       
        $product = Products::where("namecat",$namecat)->first(); // a variable to get all data that exist in the Products table in our database
      //dd($namecat);
          // to get the product that we want ! 
          $produit = null;
          $data = $product->produits;
          foreach($data as $prd)
          {
              if($prd['namep'] == $namep)
              {
                  $produit=$prd;
              }
          }
      return view('admin.editProduct',compact('product','produit')); // send the data to the 'allproducts view as the name of 'products'
    }





        //Function to Add a product ==> Update a category
    
        public function update($namecat=null,$namep=null, Request $request)
        {
           // dd($namep);

            /*$newdata = array('$set' => array("prix" => $request->prix, "namep" => $request->namep));
            // specify the column name whose value is to be updated. If no such column than a new column is created with the same name.
            
            $condition = array($product->produit['namep'] => $namep);

            dd($condition);
            $product= Products::where("namecat",$namecat)->update($condition, $newdata);*/
           // dd($product);
                /*["produits.namep" => $namep],
                ['$set' => ["produits.$.prix" => $request->prix]]
            );*/
           /* $index = $product->produits
            $produit = $product->produits()->where("namep",$namep)->first();

            dd($produit);*/
            $update= ['produits.0.namep' => $request->namep,
                            'produits.0.prix' => $request->prix,
                            'produits.0.detailP' => $request->detailP,
                            'produits.0.carasP1' => $request->carasP1,
                            'produits.0.carasP2' => $request->carasP2,
                            'produits.0.carasP3' => $request->carasP3,
                            'produits.0.poidP' => $request->poidP,
                            'produits.0.quantite' => $request->quantite,
                            'produits.0.DEP' => $request->DEP

        ];



           // dd($request->nameP);  // to verify what is our request ==> We verified to get the name of the product (here we've used ' nampP ' wchich is the name of the input where the admin has entered the name)
            
           // Let's save data in mongoDB now ! 


           $products = Products::where("namecat",$namecat)->update($update); // a variable to get all data that exist in the Products table in our database

         //  $produit = collect($products->produits)->where("namep",$namep);
               // dd($produit);
           /*$products = Products::findOneAndUpdate(
               ['namecat' => $namecat],
               ['$set' => [
                'namep' = $request->namep;
                'prix' = $request->prix;
                'detailP' = $request->detailP;
                'carasP1' = $request->carasP1;
                'carasP2' = $request->carasP2;
                'carasP3' = $request->carasP3;
                'poidP' = $request->poidP;
                'quantite' = $request->quantite;
                'DEP' = $request->DEP;
               ]]
               );*/

           // $queryFilter = ['produits.namep'=>$namep];
            //$products = Products::where($queryFilter)->first();
           //$products = Products::where("namecat",$namecat)->first();
          // $products->produits['namep'] = $request->namep;
          // dd($products);
          //// ->update(
              // {'produits.namep' : $namep},{'$set': {'produits.$.prix' : $request->prix}});

          /*  '$set' :
                {'produits' : array(
            'namep' = $request->namep,
            'prix' = $request->prix,
            'detailP' = $request->detailP,
            'carasP1' = $request->carasP1,
            'carasP2' = $request->carasP2,
            'carasP3' = $request->carasP3,
            'poidP' = $request->poidP,
            'quantite' = $request->quantite,
            'DEP' = $request->DEP)});*/
           //]]]);
           /*$produit=$products->where("produits.namep",$namep)->first();

           $products->update('produits' =>[
            'namep' = $request->namep;
            'prix' = $request->prix;
            'detailP' = $request->detailP;
            'carasP1' = $request->carasP1;
            'carasP2' = $request->carasP2;
            'carasP3' = $request->carasP3;
            'poidP' = $request->poidP;
            'quantite' = $request->quantite;
            'DEP' = $request->DEP;
           ]);*/
        

/*         $test=array();

         $test['namep'] = $request->namep;
         $test['prix'] = $request->prix;
         $test['detailP'] = $request->detailP;
         $test['carasP1'] = $request->carasP1;
         $test['carasP2'] = $request->carasP2;
         $test['carasP3'] = $request->carasP3;
         $test['poidP'] = $request->poidP;
         $test['quantite'] = $request->quantite;
         $test['DEP'] = $request->DEP;

         /*$test['namep'] = implode(' , ', $request->namep);
         $test['prix'] = implode(' , ', $request->prix);
         $test['detailP'] = implode(' , ', $request->detailP);
         $test['carasP1'] = implode(' , ', $request->carasP1);
         $test['carasP2'] = implode(' , ', $request->carasP2);
         $test['carasP3'] = implode(' , ', $request->carasP3);
         $test['poidP'] = implode(' , ', $request->poidP);
         $test['quantite'] = implode(' , ', $request->quantite);
         $test['DEP'] = implode(' , ', $request->DEP);*/


          //$produit = array($request->all());
         /* $produit['namep'] = $request->namep;
          $produit['prix'] = $request->prix;
          $produit['detailP'] = $request->detailP;
          $produit['carasP1'] = $request->carasP1;
          $produit['carasP2'] = $request->carasP2;
          $produit['carasP3'] = $request->carasP3;
          $produit['poidP'] = $request->poidP;
          $produit['quantite'] = $request->quantite;
          $produit['DEP'] = $request->DEP;*/
      
        // $products->save();
      //  $produit->save();
        
            // Let's show a success msg
            return redirect('/adminDashboard')->with('success','Le produit a bien été Modifié. ');
           //dd($produit);
            //dd($request->produits);
          // $data = new Products($request->all());
    
        }







        
    //function to show the EditProduct page and getiing the product of a categories  FOR ADMINS

    public function deleteProduct($namecat,$namep)
    {
       
        $product = Products::where("namecat",$namecat)->first(); // a variable to get all data that exist in the Products table in our database
      //dd($namecat);
          // to get the product that we want ! 
          $produit = null;
          $data = $product->produits;
          foreach($data as $prd)
          {
              if($prd['namep'] == $namep)
              {
                  $produit=$prd;
              }
          }
      return view('admin.deleteProduct',compact('product','produit')); // send the data to the 'allproducts view as the name of 'products'
    }







        public function delete($namecat,$namep)
        {
            $da = Products::where("namecat",$namecat)->pull('produits', [
                'namep' => $namep,
            ]);
      
            if($da)
            {
                return redirect('/adminDashboard')->with('success','Le produit a bien été Supprimé. ');
            }
            // Let's show a success msg
          // return back()->with('success','Le produit a bien été Supprimé. (annuler pour revenir en arrière ! )');
        }







        //function to add a category 

 //function to show the AddProduct page and getiing all products of a categories  FOR ADMINS

 public function addCategory()
 {
    
       return view('admin.addCategory'); 
 }


public function saveCategory(Request $request)
{
    //dd($request->namecat); // to verify what is our request ==> We verified to get the name of the category (here we've used ' namecat ' wchich is the name of the input where the admin has entered the name)

  // Let's save data in mongoDB now ! 
  $data = new Products();
  $data->namecat=$request->namecat;
  $data->produits=array();
  $data->save();

  
 
   // Let's show a success msg
  return back()->with('success','La catégorie a bien été ajouté. (Ajouter une autre, ou annuler)');

  
}


}
