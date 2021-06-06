<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Cart;
use Auth;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
   

    public function boot()
    {
        Schema::defaultstringLength(191);
        if(Auth::user())
        {
            $carty = Cart::where("user_id",Auth::user()->_id)->pluck('produits_C');
            $totalA=0;
            foreach($carty as $product)
            {
                $totalA += count($product);
            }
    
           // return view("navigation-menu",compact('totalA'));
           View::share('totalA',$totalA);
        }

        else{
            View::share('totalA','9');
        }
       
    }


}
