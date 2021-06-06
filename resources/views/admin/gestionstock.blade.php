

<x-app-layout>
    <x-slot name="header">
       
    </x-slot>




    <!--===================================Dashboard First Card ============================================-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" cartAdmin bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                
            <img class=" adminpdp pdp h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

            <h1 class="MessageEntre">Content de vous revoir !</h1>

            <img class=" etoileAdmin pdp h-8 w-8 rounded-full object-cover" src="{{ asset('images/etoileAdmin.png') }}" alt="etoileAdmin" />

            <h6 class="infoCnx">Hasnae CHIHI, Dernière Connexion : 09:53 - 01/05/2021</h6>
            
            </div>
        </div>
    </div>

    <!--=====================================================================================================-->

    <!--========================================Tableau de bord Admin===================================================-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" TB bg-white overflow-hidden shadow-xl sm:rounded-lg" style="height:279px">
                
            <h1 class="details">Gestion de Stock des Produits</h1>
                <hr>
                <div>
                    <div class="TBadmin" style="width:35% !important">
                        <div class="TBadminInfo">
                            <img class=" TBimgs pdp h-8 w-8 rounded-full object-cover" src="{{ asset('images/categories.png') }}" alt="messages"style="margin-top:2% !important" />
                            <div class="TBimgsInfo" >
                                <h1 class="TBInfoTitle" style="font-size:31px !important"> {{ $totalC}} u</h1>
                                <h6 class="TBTitle">Catégories</h6>
                            </div>
                        </div>
                   
                    </div>

                    <div class="TBadmin" style="width:35% !important">
                        <div class="TBadminInfo">
                            <img class=" TBimgs pdp h-8 w-8 rounded-full object-cover" src="{{ asset('images/produits.png') }}" alt="notif"  style="margin-top:2% !important"/>
                            <div class="TBimgsInfo"  >
                                <h1 class="TBInfoTitle" style="font-size:31px !important">{{ $total}} u</h1>
                                <h6 class="TBTitle">Produits</h6>
                            </div>
                        </div>
                    </div>

                   

               

            </div>
        </div>
    </div>

    <!--=======================================================================================================-->


   


<!--===========================================================================-->

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" detailAutresP bg-white overflow-hidden shadow-xl sm:rounded-lg" style="height:877px; overflow:scroll;overflow-x:hidden">
                
                <h1 class="details">Produits ({{ $total}})</h1>
                <hr>
                    

           
@foreach($products as $product)

<div class="CategorieDiv max-w-7xl mx-auto sm:px-4 lg:px-6">
        <img class="categorieImg"src="{{asset('images/Bastilla.png')}}" alt="Bastilla">
        <p class="line"></p>
        <h3 class="categorieTitle">{{ $product->namecat }}</h3>
        </br></br></br></br>

      
      
        <div class="produitsofcategori">

            @foreach($product->produits as $produit)

                    <div href="#">
                            <div class="oneproduitad">
                            <?php $url1 = route('admin.deleteProduct')."/". $product->namecat ."/" . $produit['namep']?>
                            <a href="{{ $url1 }}"> 
                                   <img class="closebtn"  src="{{asset('images/close.png')}}" alt="close" style="
                                margin-left: 85%;"></a>

                            <?php $url = route('admin.editProduct')."/". $product->namecat ."/" . $produit['namep']?>

                                <a href="{{ $url }}"> 
                                    <img class="editbtn"  src="{{asset('images/modify.png')}}" alt="modify" style="
                                FLOAT: left;
                                margin-top: -13%;
                                margin-left: 70%;"></a>
                                        </br>
                                <center>
                                        <img class="produitImg"src="{{asset('images/1.png')}}" alt="Bastilla">
                                </center> 
                                <br>
                                    <h2 class="prix">{{ $produit['prix'] }} DH</h2>
                                    <h4 class="produittitle">{{ $produit['namep'] }}</h4>
                                    <h6 class="quantite">{{ $produit['quantite'] }} g</h6>
                                </br>

                            </div>
                    </div>

               @endforeach

            
                    <!--Div to add one product of a category -->
                            <a  href="{{ route('admin.addProduct',$product->namecat) }}" class="oneproduitadd" style="cursor:pointer">
                            
                                        </br>
                                <center>
                                        <img class="ajoutpr"  src="{{asset('images/ajoutpr.png')}}" alt="ajoutpr" style="height:200px">
                                </center> 
                            
                            </a>
                    <!--====================================-->
        </div>
            
       
                  
</div>  
  

    @endforeach
  
    <a  href="{{ route('admin.addCategory') }}">
        <button class=" Repondre precBtn"  value="Ajoutct"  style="position :inherit !important;margin-top: -17%;">Ajouter Catégorie </button>
</a>
            </div>
        </div>
    </div>


<!--===========================================================================-->




    <div class="footer">
        <h1>2021 &copy; SMH_Team</h1>
    </div>

</x-app-layout>



<!--=============================JAVASCRIPT CODE===================================-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <!--To include Jquery-->



<script>




function showDeletePopup(){
    var a = document.getElementById("transparent");
    var b = document.getElementById("supprimerP");

        a.style.visibility = "visible";
        b.style.visibility = "visible";
       
    
}


function hideDeletePopup(){
    var a = document.getElementById("transparent");
    var b = document.getElementById("supprimerP");


        a.style.visibility = "hidden";
        b.style.visibility = "hidden";
       
    
}



function showEditPopup(){
    var a = document.getElementById("transparent");
    var b = document.getElementById("editP");

    a.style.visibility = "visible";
        b.style.visibility = "visible";
       
    
}


function HideEditPopup(){
    var a = document.getElementById("transparent");
    var b = document.getElementById("editP");

    a.style.visibility = "hidden";
        b.style.visibility = "hidden";
    
}



                  




</script>


<!--===================================-->
