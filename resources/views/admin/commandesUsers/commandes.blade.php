

<x-app-layout>
    <x-slot name="header">
       
    </x-slot>

<style>
    .changeStatu{
        margin-left:3%;
        margin-left: 31%;
    font-size: 37px;
    color: red;
    cursor: pointer;
    }

    .enreg{
        border: 1px solid red;
    padding: 7px;
    margin-top: 3%;
    float: left;
    margin-left: 39%;
    background-color: red;
    color: white;
    font-weight: bold;
    width: 24%;
    }
       

    .enreg:hover{
        background-color:#8E0F0F;
    }
    

    .accept{
        background: #0EBA3E;
        margin-left: 60% !important;
    }

    .accept:hover{
        background:#066320;
    }

    .rejet{
        background: #E81212;
    }

    .rejet:hover{
        background:#AA0F0F;
    }

    .btnUs{
        
       
    border-radius: 20px;
    width: 24%;
    float: left;
    margin-top: -17%;
    margin-left:14%;
    color: white;
    padding:5px;
    font-weight: bold;
    }
</style>







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

    @if(session('success'))
        <div id="alertS" class="alert alert-success" style="
      background: #D4EDDA;
    border: 1px solid #CDEBD3;
    box-sizing: border-box;
    border-radius: 5px;
    padding-left: 2%;
    width: 85%;
    height: 44px;
    font-family: Roboto;
    font-style: normal;
    font-weight: bold;
    font-size: 25px;
    line-height: 37px;
    display: flex;
    align-items: center;
    color: #457D52;
    margin-left: 7%;
    position: absolute;
    top: 113%;">
     
            {{ session('success') }}
        </div>
    @endif
    <!--========================================Tableau de bord Admin===================================================-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" TB bg-white overflow-hidden shadow-xl sm:rounded-lg" style="height:279px">
                
            <h1 class="details">Suivie des Commandes</h1>
                <hr>
                <div>
                    <div class="TBadmin" style="width:35% !important;   margin-left: 27%;">
                        <div class="TBadminInfo">
                            <img class=" TBimgs pdp h-8 w-8 rounded-full object-cover" src="{{ asset('images/categories.png') }}" alt="messages"style="margin-top:2% !important" />
                            <div class="TBimgsInfo" >
                                <h1 class="TBInfoTitle" style="font-size:31px !important; "> {{$cnt}} commandes</h1>
                                <h6 class="TBTitle">Nouvelles</h6>
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
                
                <h1 class="details">Nouvelles Commandes  ({{$cnt}})</h1>
                <hr>
                    

           

 @for ($i = 0; $i < 100; $i++)



<div class="CategorieDiv max-w-7xl mx-auto sm:px-4 lg:px-6">
        <img class="categorieImg"src="{{ $cart[$i]->user_pdp }}" alt="Bastilla">
        <p class="line"></p>
        <h3 class="categorieTitle">{{ $cart[$i]->user_name }}</h3>
        </br></br></br></br>

       

      
      
        <div class="produitsofcategori">
        @foreach($cart[$i]->produits_C as $produit)
                    <div href="#">
                            <div class="oneproduitad">
                           
                                        </br>
                                <center>
                                        <img class="produitImg"src="{{asset('images/1.png')}}" alt="Bastilla">
                                </center> 
                                <br>
                                    <h2 class="prix">{{ $produit['prix'] }}DH</h2>
                                    <h4 class="produittitle">{{ $produit['namep'] }}</h4>
                                    <h6 class="quantite">X {{ $produit['occurence'] }}</h6>
                                </br>

                            </div>
                    </div>
@endforeach
           
<h1 class="statu" style="margin-top: 42%; font-family: Segoe UI;
                            font-style: italic;
                            font-weight: 600;
                            font-size: 24px;
                            line-height: 32px;
                            /* identical to box height */


                            color: #7DA98C;
                               "> Statut : {{ $cart[$i]->status }}
                               <i class=" changeStatu fa fa-pencil-square-o" aria-hidden="true"></i> </h1>
                        
                        <?php $url = route('commande.update')."/". $cart[$i]->user_id ?>
                        <form action="{{ $url }}" method="POST">
                              
                               @csrf
                               <input type="text" name="statUpdate" style="background: #FFFFFF;
    border: 1px solid #1341B8;
    box-sizing: border-box;
    border-radius: 20px;
    width: 54%;
    margin-top: 3%;
    margin-left: 9%;" placeholder="nouveau status...">
                  
                  <button class="enreg" type="submit" value="update"> Enregistrer le Status</button>
                  </form>
        </div>
            
       
                  
</div>  
  
@if ($i > $cnt-2)
            @break
        @endif

  @endfor
    
  
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



