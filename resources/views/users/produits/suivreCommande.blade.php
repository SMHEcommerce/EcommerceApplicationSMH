

<x-app-layout>
    <x-slot name="header">
       
    </x-slot>

<style>
    .starG{
        float: left;
        /* position: absolute; */
        /* top: -86%; */
        position: absolute;
    left: -51%;
    top: 229%;
    cursor: pointer;
    color:rgba(150, 146, 138, 1);

    }
#str1:hover{
    color:rgba(245, 176, 33, 1);
}
   
#str1:hover,#str2:hover,#str3:hover,#str4:hover,#str5:hover{
    color:rgba(245, 176, 33, 1);
}
   
    
</style>

    <!--=======================================Liste des Produits Achetés===================================================-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" TB bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <h1 class="details" style="font-family: SimSun-ExtB;
                                    font-style: normal;
                                    font-weight: normal;
                                    font-size: 48px;
                                    line-height: 48px;
                                    /* identical to box height */

                                   
                                    color: #000000;">Suivre Ma Commande</h1>
                <hr>
               
                <div class="CategorieDiv max-w-7xl mx-auto sm:px-4 lg:px-6">
                                    <h1 style="font-family: SimSun-ExtB;
                                    font-style: normal;
                                    font-weight: normal;
                                    font-size: 48px;
                                    line-height: 48px;
                                    /* identical to box height */

                                    margin-bottom: 9%;
                                    margin-left: 28%;
                                    color: #000000;"><U style="color:red;">Mes Produits Achetés</U></h1>

                                    <div class="produitsofcategori">
                                    @foreach($cart->produits_C as $produit)
                                    <?php $url = route('users.produits.myproductDetails')."/". $produit['namecat'] ."/" . $produit['namep']?>
                                        <a href=" {{ $url }}">
                                                <div class="oneproduit mr-6" style="
                                                                margin-top: 8%;
                                                                margin-left: -1%;
                                                            ">
                                                            </br>
                                                    <center>
                                                            <img class="produitImg"src="images/1.png" alt="Bastilla">
                                                    </center> 
                                                    <br>
                                                        <h2 class="prix"> {{ $produit['prix'] }} DH</h2>
                                                        <h4 class="produittitle">{{ $produit['namep'] }}</h4>
                                                        <h6 class="produittitle">X {{ $produit['occurence'] }}</h6>
                                                      
                                                        
                                                    </br>

                                                </div>
                                        </a>
                                       
                                        @endforeach
                                        
                                       </div>  
                                    </div>

                                    <h1 class="totalM" style="top:124%"> Total :    {{ $totalP }} DH </h1>
                                    <h1 class="totalM" style="top:134%; color:green;
                               "> Statut : {{ $cart->status }}... </h1>

            </div>
        </div>
    </div>

    <!--=======================================================================================================-->


    <!--==================================Fiche Message====================================================-->
    


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div id="msgcard" class=" cardmsgs bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <h1 class="details">Ajouter un Avis ou Commentaire </h1>
            <hr>
            
                
                
            <div class="commentaires">
                   
                        <div class=" MsgUsers userC">
                            <img class=" imguser userPdp img-fluid" style="margin-left:11% !important"src="{{asset('images/userP.jpg')}}" alt="etoile">
                            <h3 class="userName" style="
                                margin-top: 5%;
                                margin-left: 1%;
                            ">Salma EL AAKKOUCHI </h3>
                            <hr style="
                                   margin-left: -38%;
    margin-top: -58.5%;
                                ">
                            </br>
                            <h4 style="
                            float: left;
                            margin-top: 10%;
                            margin-left: -10%;
                            font-family: Segoe UI Emoji;
                            font-style: normal;
                            font-weight: normal;
                            font-size: 20.6315px;
                            line-height: 31px;
                            margin-bottom:2%;

                            color: #000000;
                        ">Ajouter un avis : 
                        <i class="fa fa-star starsAvis starG" id="str1" style="left: 44% !important;
                        top: 198% !important;" aria-hidden="true"></i>

<i class="fa fa-star starsAvis starG" id="str2" style="left: 47% !important;
                        top: 198% !important;" aria-hidden="true"></i>

<i class="fa fa-star starsAvis starG" id="str3"style="left: 50%;
    top: 198%;" aria-hidden="true"></i>

<i class="fa fa-star starsAvis starG"id="str4" style="    top: 198%;
    left: 53%;" aria-hidden="true"></i>

<i class="fa fa-star starsAvis starG"  id="str5" style="top: 198%;
    left: 56%;" aria-hidden="true"></i>


      </h4>
                            <input class="inputComment" type="text" id="comment" name="comment"
                            style="
                            
    width: 73%;
    /* border: 1px solid black; */
    margin-top: 0%;
    height: 168px;
    background: #FFFFFF;
    border: 0.593206px solid #0500FA;
    margin-left: 19%;
    box-sizing: border-box;
    border-radius: 20px;
"  placeholder="Ajouter votre Commentaire..." >
                        </div>

                       
                            <div class="Suivant">
                                <button class="nextBtn" style="
    margin-left: 72%;
" type="submit" value="Ajouter Au Panier">Enregistrer </button>
                            </div>
                       


                       

             </div>

                
               


            </div>
        </div>
    </div>

    <!--=====================================================================================================-->
<!--===========================================================================-->




<div class="footer">
        <h1>2021 &copy; SMH_Team</h1>
    </div>

</x-app-layout>