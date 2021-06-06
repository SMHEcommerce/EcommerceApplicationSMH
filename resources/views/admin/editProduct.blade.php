

<x-app-layout>
    <x-slot name="header">
       
    </x-slot>

   

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" detailAutresP bg-white overflow-hidden shadow-xl sm:rounded-lg" style="height:877px; overflow:scroll;overflow-x:hidden">
                
                <h1 class="details">Produits (2M)</h1>
                <hr>

<div class="transparentDiv" id="transparent" style="margin-top:-18% !important">
            <!--Div of Supprimer Produit -->
    <center>
    @if(session('success'))
        <div id="alertS" class="alert alert-success" style="
       background: #D4EDDA;
    border: 1px solid #CDEBD3;
    box-sizing: border-box;
    border-radius: 5px;
    padding-left: 2%;
    width: 401px;
    height: 102px;
    font-family: Roboto;
    font-style: normal;
    font-weight: bold;
    font-size: 25px;
    line-height: 37px;
    display: flex;
    align-items: center;
    color: #457D52;
    margin-left: 31%;
    position: absolute;
    top: -3%;">
     
            {{ session('success') }}
        </div>
    @endif

<!--===========================================================================-->
              <!--Div of Modifier Produit -->
              <div class="editPopup" id="editP" style="margin-top:4% !important" >
                 
                    <h1 class="deleteTitle" style="margin-top: -5%;">Modifier Le produit : {{ $produit['namep'] }} </h1>
                    <?php 
                    $k= array_search('test2',array_values($produit),true);
                    $url = route('product.update')."/". $product->namecat ."/" . $k;?>
            
                    <form action="{{ $url }}" method="post">
                                    @csrf
                                    @method('PUT')
                            <div class="infoP">

                                    <div class="oneproduitad" style="width: 59% !important; height: 65% !important; margin-left:7%">
                                    
                                                </br>
                                        <center>
                                                <img class="produitImg"src="{{asset('images/1.png')}}" alt="Bastilla">
                                        </center> 
                                        <br>
                                            <h2 class="prix"> {{ $produit['prix'] }}</h2>
                                            <h4 class="produittitle">{{ $produit['namep'] }}</h4>
                                            <h6 class="quantite">{{ $produit['quantite'] }} </h6>
                                        </br>
                                    </div>

                            
                                        <label class="nameP" for="namep"> Nom du produit :</label>

                                        <input class="inputD" type="text" id="namep" name="namep"  value="{{ $produit['namep'] }}" >

                                        <label class="prixP" for="prix"> Prix :</label>

                                        <input class="inputPD" type="text" id="prix" name="prix"  value="{{ $produit['prix'] }} " >
                                
                             </div>

                                <div class="plusInfoP">

                                    <label class="detailP" for="detailP"> Détails :</label>
                                        <input class="inputdetailD" type="text" id="detailP" name="detailP"  value="{{ $produit['detailP'] }}" >

                                    <label class="CaracteristiqueP" for="carasP"> Principale Caractéristiques :</label>
                                        <input class="inputCPD" type="text" id="caracP" name="carasP1"  value=" Lorem ipsum dolor sit amet, " >
                                        <input class="inputCPD" type="text" id="caracP" name="carasP2"  value="consectetur adipiscing elit.  "  style="top: 33%;">
                                        <input class="inputCPD" type="text" id="caracP" name="carasP3"  value="Consequat enim dolor nibh eu tempor. " style="top: 43%;">
                                    

                                    <label class="poidP" for="poidP"> Poids (Kg) :</label>
                                        <input class="inputPsTD" type="text" id="poidP" name="poidP"  value="{{ $produit['poidP'] }} " >
                                    
                                    <label class="quantP" for="quantP"> Quantité (g) :</label>
                                        <input class="inputQTD" type="text" id="quantP" name="quantite"  value="{{ $produit['quantite'] }} ">

                                    <label class="DEP" for="DEP"> Date d'expiration  :</label>
                                        <input class="inputDETD" type="text" id="DEP" name="DEP"  value="{{ $produit['DEP'] }}">
                                    
                                    
                                </div>

                  <button class=" enregistrer precBtn"  value="Save"  style="position :inherit !important; 
                  margin-top: 41%;
                        width: 30%;
                        margin-left: 63%;
                        font-weight: bold;">Enregistrer les modifications </button>

                    </form>
                    <a href="{{route('admin.gestionstock')}}" class=" back precBtn"  value="Annuler"  style="position :inherit !important; margin-top: -4%;
                                width: 30%;
                                margin-left: 4%;
                                font-weight: bold;
                                background: slategray;
                                padding-top: 1%;">Annuler </a>
                </div>




            </center>
        </div>
</div>
</div>
</div>
<!--========================-->

<!--======================FIN transparent pop up windows ===================================-->
  

    <div class="footer">
        <h1>2021 &copy; SMH_Team</h1>
    </div>

</x-app-layout>




