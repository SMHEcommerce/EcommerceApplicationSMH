<x-app-layout>
    <x-slot name="header">
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="margin-top: 5%;">
                 
                     </br></br>
                     <h2 class="titleVA font-semibold text-xl text-gray-800 leading-tight" >
                        {{ __('Valider mes Achats') }}
                     </h2>
                     <hr class="lineH" >
               
                     <h4 class="descriptionPage">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat enim dolor nibh eu tempor.
                      Enim mattis viverra viverra id dignissim pulvinar.
                     </h4>
              
                       
                                <!-- Multi step form --> 
            <section class="multi_step_form">  
                <form id="msform"> 
                
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">vérifier mes achats</li>  
                    <li>Valider Mes Achats</li> 
                    <li>Suivre Ma commande</li>
                </ul>
                <!-- fieldsets -->
                                <!--==================================Verifier Mes Achats========================= -->
                                <fieldset>
                                <div class="CategorieDiv max-w-7xl mx-auto sm:px-4 lg:px-6">
                                    

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


                                    <a href="{{ route('users.produits.suivreCommandeStat') }}" class=" suivreC action-button" style="
                                            position: absolute;
                                            top: 59%;
                                            left: 56%;
                                            width: 39%;
                                            height: 46px;
                                            font-size: 21px;
                                            border-radius: inherit;
                                            background-color: #C00000;
                                            border: 1px solid #C00000;
                                            padding: 3px;
                                        ">Suivre Ma Commande</a> 

                                    <h1 class="totalM"> Total :    {{ $totalP }} DH </h1>
                                    <button type="button" class="action-button previous_button" style="
                                            top: 90%;
                                            left: 36%;
                                            position: absolute;
                                        ">Précédent</button>
                                    <button type="button" class="next action-button" style="
                                            top: 90%;
                                            left: 50%;
                                            position: absolute;
                                        ">Suivant</button>  
                                </fieldset>
                                    <!--=======================================================================-->

                                <fieldset>
                                    <div id="PaiementST"> 
                                        <h3 class="PS" onclick="showPaiementS()" style="cursor:pointer"> <img class="PSimg"src="images/secure.png" alt="Bastilla">Paiment Securisé</h3>
                                        <hr id="Sline" class="PSline"style="visibility:hidden" >
                                    </div>

                                    <div id="PaiementLT">
                                          <h3 class="PL" onclick="showPaiementL()"style="cursor:pointer"> <img class="PLimg"src="images/home.png" alt="Bastilla">Paiment à livraison</h3>
                                        <hr id="Lline" class="PLline" >
                                    </div>

                                    <div id="PaiementLB" >
                                     
                                                <label for="fname" style="
                                                    font-family: Simonetta;
                                                    font-style: normal;
                                                    font-weight: normal;
                                                    font-size: 36px;
                                                    line-height: 45px;
                                                    color: #000000;
                                                    position: absolute;
                                                    top: 236%;
                                                    left: 9%;
                                                ">Confirm Your Phone Number : </label>
                                                <input type="text" style="
                                                    width: 78%;
                                                        position: absolute;
                                                        background: #FFFFFF;
                                                        border: 1px solid #0C1CAD;
                                                        box-sizing: border-box;
                                                        border-radius: 20px;
                                                        position: absolute;
                                                        top: 369%;
                                                        left: 9%;
                                                        font-family: Simonetta;
                                                        font-style: italic;
                                                        font-weight: normal;
                                                        font-size: 30px;
                                                        line-height: 38px;
                                                        color: rgba(0, 0, 0, 0.8);
                                                        text-align: initial;
                                                        height: 51px;
                                                " id="fname" name="firstname" value="+212  7 68 55 42 32">
                                                        </br>
                                                <label for="lname" style="
                                                    font-family: Simonetta;
                                                    font-style: normal;
                                                    font-weight: normal;
                                                    font-size: 36px;
                                                    line-height: 45px;
                                                    color: #000000;
                                                    position: absolute;
                                                    top: 577%;
                                                    left: 9%;
                                                    ">Confirm Your Adress : </label>
                                                <input type="text" id="lname"
                                                style="width: 78%;
                                                position: absolute;
                                                background: #FFFFFF;
                                                border: 1px solid #0C1CAD;
                                                box-sizing: border-box;
                                                border-radius: 20px;
                                                position: absolute;
                                                top: 717%;
                                                left: 9%;
                                                font-family: Simonetta;
                                                font-style: italic;
                                                font-weight: normal;
                                                font-size: 30px;
                                                line-height: 38px;
                                                color: rgba(0, 0, 0, 0.8);
                                                text-align: initial;
                                                height: 51px;" name="lastname" value="LOT HAJ FATEH - CASABLANCA RC 284 APPT 2">
   
                                    </div>


                                    <div id="PaiementSB" style="visibility:hidden">
                                                
                                               <h4 style="    margin-top: 20%;">Coming Soon...</h4> 
                                               
                                    </div>
                                
                                    <button type="button" class="action-button previous previous_button" style="
                                            top: 2904%;
                                            left: 36%;
                                            position: absolute;
                                        ">Précédent</button>
                                 
                                    <button type="button" class="next action-button" style="
                                            top: 2904%;
                                            left: 50%;
                                            
                                            width: 23%;

                                            position: absolute;
                                        ">Valider Mes achats</button> 
                                    </a> 
                                </fieldset>  

                            <!--=====================================================================-->
                                <fieldset>
                                    <h1 class="desc">Vos Achats Sont Effectué avec Succées !</h1> 

                                    <img class="successImg"src="{{asset('images/succeess.png')}}" alt="Bastilla">
                                    
                                    
                                    <a href="{{ route('users.produits.suivreCommande') }}" class=" suivreC action-button" style="
                                            position: absolute;
                                            top: 349%;
                                            left: 32%;
                                            width: 39%;
                                            height: 46px;
                                            font-size: 21px;
                                            border-radius: inherit;
                                            background-color: #C00000;
                                            border: 1px solid #C00000;
                                            padding: 3px;
                                        ">Suivre Ma Commande</a> 
                                </fieldset>  
                                
                     </form>  
                </section>    
            </div>
        </div>
    </div>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <!--To include Jquery-->

  
<!--Script MsForm-->
  <script>
     (function ($) {
            "use strict";

            //* Form js
            function verificationForm() {
                //jQuery time
                var current_fs, next_fs, previous_fs; //fieldsets
                var left, opacity, scale; //fieldset properties which we will animate
                var animating; //flag to prevent quick multi-click glitches

                $(".next").click(function () {
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    //activate next step on progressbar using the index of next_fs
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate(
                        {
                            opacity: 0
                        },
                        {
                            step: function (now, mx) {
                                //as the opacity of current_fs reduces to 0 - stored in "now"
                                //1. scale current_fs down to 80%
                                scale = 1 - (1 - now) * 0.2;
                                //2. bring next_fs from the right(50%)
                                left = now * 50 + "%";
                                //3. increase opacity of next_fs to 1 as it moves in
                                opacity = 1 - now;
                                current_fs.css({
                                    transform: "scale(" + scale + ")",
                                    position: "absolute"
                                });
                                next_fs.css({
                                    left: left,
                                    opacity: opacity
                                });
                            },
                            duration: 800,
                            complete: function () {
                                current_fs.hide();
                                animating = false;
                            },
                            //this comes from the custom easing plugin
                            easing: "easeInOutBack"
                        }
                    );
                });

                $(".previous").click(function () {
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();

                    //de-activate current step on progressbar
                    $("#progressbar li")
                        .eq($("fieldset").index(current_fs))
                        .removeClass("active");

                    //show the previous fieldset
                    previous_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate(
                        {
                            opacity: 0
                        },
                        {
                            step: function (now, mx) {
                                //as the opacity of current_fs reduces to 0 - stored in "now"
                                //1. scale previous_fs from 80% to 100%
                                scale = 0.8 + (1 - now) * 0.2;
                                //2. take current_fs to the right(50%) - from 0%
                                left = (1 - now) * 50 + "%";
                                //3. increase opacity of previous_fs to 1 as it moves in
                                opacity = 1 - now;
                                current_fs.css({
                                    left: left
                                });
                                previous_fs.css({
                                    transform: "scale(" + scale + ")",
                                    opacity: opacity
                                });
                            },
                            duration: 800,
                            complete: function () {
                                current_fs.hide();
                                animating = false;
                            },
                            //this comes from the custom easing plugin
                            easing: "easeInOutBack"
                        }
                    );
                });

                $(".submit").click(function () {
                    return false;
                });
            }

          
            /*Function Calls*/
            verificationForm();
           
        })(jQuery);

      </script>
  
  <!--=====================================-->


  <!--Script Paiement Securise - livraison -->

    <script>

            function showPaiementL(){
                var a = document.getElementById("PaiementLB");
                var b = document.getElementById("Lline");
                var x = document.getElementById("PaiementSB");
                var y = document.getElementById("Sline");
                
         
                    a.style.visibility = "visible";
                    b.style.visibility = "visible";
                    x.style.visibility = "hidden";
                    y.style.visibility = "hidden";
                
            }


            function showPaiementS(){
                var a = document.getElementById("PaiementLB");
                var b = document.getElementById("Lline");
                var x = document.getElementById("PaiementSB");
                var y = document.getElementById("Sline");
                
         
                    x.style.visibility = "visible";
                    y.style.visibility = "visible";
                    a.style.visibility = "hidden";
                    b.style.visibility = "hidden";
                
            }
    </script>


  <!--===================================-->
</x-app-layout>
