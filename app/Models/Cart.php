<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cart extends Eloquent
{
   // use HasFactory;
   protected $connection = 'mongodb';
    protected $guarded = [];   // for stocking our fillable
}
