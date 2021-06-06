<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use App\Models\Produit;

class Products extends Eloquent
{
    //use HasFactory;
    protected $connection = 'mongodb';
    protected $guarded = [];   // for stocking our fillable
   /* protected $collection = 'products';


  /  public function produits()
    {
        return $this->embedsMany(Produit::class);
    }*/

}
