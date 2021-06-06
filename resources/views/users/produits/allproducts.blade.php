<x-app-layout>
    <x-slot name="header">
       
    </x-slot>

    @if(session('success'))
        <div class="alert alert-success" style="
        background: #D4EDDA;
    border: 1px solid #CDEBD3;
    box-sizing: border-box;
    border-radius: 5px;
    padding-left: 2%;
    width: 94%;
    height: 63px;
    font-family: Roboto;
    font-style: normal;
    font-weight: bold;
    font-size: 25px;
    line-height: 14px;
    display: flex;
    align-items: center;
    color: #457D52;
    margin-left: 3%;
    position: absolute;
    top: 24%;">
            {{ session('success') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="
    margin-top: 5%;
">
                 <center>
                     </br></br>
                     <h2 class="title font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Nos Produits') }}
                     </h2>
                 </center>
               <!-- </br> </br> </br>-->
               @foreach($products as $product)

                    <div class="CategorieDiv max-w-7xl mx-auto sm:px-4 lg:px-6">
                            <img class="categorieImg"src="images/Bastilla.png" alt="Bastilla">
                            <p class="line"></p>
                            <h3 class="categorieTitle">{{ $product->namecat }}</h3>
                            </br></br></br></br>

                      
                          
                            <div class="produitsofcategori">
                            @foreach($product->produits as $produit)
                            <?php $url = route('users.produits.productDetails')."/". $product->namecat ."/" . $produit['namep']?>
                                <a href=" {{ $url }} ">
                                        <div class="oneproduit">
                                                    </br>
                                            <center>
                                                    <img class="produitImg"src="images/1.png" alt="Bastilla">
                                            </center> 
                                            <br>
                                                <h2 class="prix"> {{ $produit['prix'] }} DH</h2>
                                                <h4 class="produittitle">{{ $produit['namep'] }}</h4>
                                                <h6 class="quantite">{{ $produit['quantite'] }} g</h6>
                                            </br>

                                        </div>
                                </a>
                                
                                @endforeach
                                      
                             </div>                       
                      </div>
             @endforeach
                          
            </div>
        </div>
    </div>
</x-app-layout>
