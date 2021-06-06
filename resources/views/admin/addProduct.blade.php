

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
                <!--Div of Ajouter Produit PopUP   route('product.update',$product->_id) -->
                <div class="editPopup" id="addP" style="margin-top:0.5% !important" >
                    <img class="closebtn"   src="{{asset('images/close.png')}}" alt="close" style="margin-left: 89%;
                    padding: 16px;">
                        <h1 class="deleteTitle" style="margin-top: -5%;">Ajouter Un Produit dans la catégorie {{ $product->namecat }} </h1>
                        <?php $url = route('product.save')."/". $product->namecat ?>

                             <form action="{{ $url }}" method="post">
                                    @csrf
                                    <div class="infoP">

                                            <div class="oneproduitad" style="width: 59% !important;
                                                    height: 65% !important; margin-left:7%">
                                            
                                                        </br>
                                                <center>
                                                        <img class="produitImg"src="{{asset('images/1.png')}}" alt="Bastilla">
                                                </center> 
                                                <br>
                                                    <h2 class="prix"> Prix (DH)</h2>
                                                    <h4 class="produittitle">Nom Produit</h4>
                                                    <h6 class="quantite">Quantite</h6>
                                                </br>
                                            </div>

                                            
                                            <label class="nameP" for="namep"> Nom du produit :</label>

                                            <input class="inputD" type="text" id="namep" name="namep"  placeholder="Entrer le nom du produit..." required>

                                            <label class="prixP" for="prix"> Prix :</label>

                                            <input class="inputPD" type="text" id="prix" name="prix"  placeholder="Entrer le prix... " required>
                                    
                                        </div>

                                                <div class="plusInfoP">

                                                    <label class="detailP" for="detailP"> Détails :</label>
                                                        <input class="inputdetailD" type="text" id="detailP" name="detailP"  placeholder="Entrer une description courte sur le produit..." required>

                                                    <label class="CaracteristiqueP" for="carasP"> Principale Caractéristiques :</label>
                                                        <input class="inputCPD" type="text" id="caracP" name="carasP"  placeholder=" Caractéristique numero 1... " required>
                                                        <input class="inputCPD" type="text" id="caracP" name="carasP"  placeholder=" Caractéristique numero 2..." required style="top: 33%;">
                                                        <input class="inputCPD" type="text" id="caracP" name="carasP"  placeholder="Caractéristique numero 3..." required style="top: 43%;">
                                                    

                                                    <label class="poidP" for="poidP"> Poids  :</label>
                                                        <input class="inputPsTD" type="text" id="poidP" name="poidP"  placeholder="Entrer le poids..." required>
                                                    
                                                    <label class="quantP" for="quantite"> Quantité  :</label>
                                                        <input class="inputQTD" type="text" id="quantite" name="quantite"  placeholder="Entrer la quantité..." required>

                                                    <label class="DEP" for="DEP"> Date d'expiration  :</label>
                                                        <input class="inputDETD" type="text" id="DEP" name="DEP"  placeholder="Entrer La DE..." required>
                                                    
                                                    
                                                </div>

                                        <button class=" enregistrer precBtn"  value="Save"  style="position :inherit !important; margin-top: 42%;
                                                width: 30%;
                                                margin-left: 63%;
                                                font-weight: bold;">Ajouter Le Produit </button>

                            </form>
                            <a href="{{route('admin.gestionstock')}}" class=" back precBtn"  value="Annuler"  style="position :inherit !important; margin-top: -4%;
                                width: 30%;
                                margin-left: 4%;
                                font-weight: bold;
                                background: slategray;
                                padding-top: 1%;">Annuler </a>
                </div>


                <!--================================-->

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




