

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

            
    <!--============================Pop up windows Delete _ Edit============================================== -->

           <!-- Div of Supprimer Produit -->
            <center>
                <div class="deletePopup" id="supprimerP">
                 <img class="closebtn"   src="{{asset('images/close.png')}}" alt="close" style="margin-left: 89%;
                padding: 16px;">
                    <h1 class="deleteTitle">Vous voulez vraiment supprimer ce produit ?</h1>
                   
                    <a href="{{route('admin.gestionstock')}}">
                    <button class=" annuler precBtn"  value="Annuler"  style="position :inherit !important">Annuler </button>
                    </a>
                    
                    <?php  $url = route('product.delete')."/". $product->namecat ."/" . $produit['namep'];?>
                    <a href="{{ $url }}">
                         <button class=" confirm precBtn"  value="confirmer"  style="position :inherit !important">Confirmer </button>
                    </a>
                </div>
               
                <!--========================-->

               
    
<!--========================-->

<!--======================FIN transparent pop up windows ===================================-->

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




