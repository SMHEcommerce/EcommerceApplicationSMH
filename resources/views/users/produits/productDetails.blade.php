

<x-app-layout>
    <x-slot name="header">
       
    </x-slot>



    <h4 class="chemin">Nos Produits   >    {{ $products->namecat }}    >     {{ $produit['namep'] }} </h4>


    <!--===================================Produit Card============================================-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" cart bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="inline img">
                <img class="oneProduitImg"src="{{asset('images/food.jpg')}}" alt="Bastilla">
                 </div>

                 
                    <div class="inline info">
                        <h2 class="nameProduct"> {{ $produit['namep'] }} </h2>
                        <h3 class="categorieName">Catégorie : {{ $products->namecat }}</h3>
                        <img class="starsAvis" src="{{asset('images/avis.png')}}" alt="Bastilla"> 
                        <h6 class="avis"> (9 avis)</h6>
                        <h1 class="prixProduct"> {{ $produit['prix'] }} DH </h1>
                        <h6 class="livraison">+ livraison à partir de 16.00 Dhs vers CASABLANCA - Anfa</h6>
                        <div class="number">
	                        <span class="minus">-</span>
	                        <input type="text" value="1"/>
	                        <span class="plus">+</span>
                        </div>

                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <!--here we'll add all the parameters of the product -->

                            <input type="hidden" name="id" value="{{ $produit['id'] }}">
                            <input type="hidden" name="title" value="{{ $produit['namep'] }}">
                            <input type="hidden" name="price" value="{{ $produit['prix'] }}">
                            <input type="hidden" name="quantite" value="{{ $produit['quantite'] }}">
                            <!--======================================================-->
                             <button class="ajoutPan" type="submit" value="Ajouter Au Panier"> <img class="achaticon"src="{{asset('images/achatPlus.png')}}" alt="AcheterIcon">Ajouter Au Panier </button>
                        </form>
                    </div>
                 

            </div>
        </div>
    </div>

    <!--=====================================================================================================-->

    <!--========================================Details===================================================-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" detailCard bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1 class="details">Détails</h1>
                <hr>
                <p class="detailsText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Consequat enim dolor nibh eu tempor. Enim mattis viverra viverra
                     id dignissim pulvinar.</p>


            </div>
        </div>
    </div>

    <!--=======================================================================================================-->


    <!--==================================Fiche Technique====================================================-->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" detailfiche bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1 class="details">Fiche Technique</h1>
                <hr>
                <div class="PC">
                    <h1 class="detailsPC">Principale Caractéristiques</h1>
                    <hr>
                    <ul style="list-style-type:disc">
                        <li>Lorem ipsum dolor sit amet, </li>
                        <li>consectetur adipiscing elit. </li>
                        <li>Consequat enim dolor nibh eu tempor. </li>
                    </ul>
                </div>

                <div class="DT">
                    <h1 class="detailsDT">Descriptif Technique</h1>
                    <hr>
                    <ul >
                        <li><b>Poids  :</b> 1kg </li>
                        <li><b>Lorum  :</b> Consectetur adipiscing elit.  </li>
                        <li><b>Lorum  :</b> Consequat enim dolor nibh </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>

    <!--=====================================================================================================-->




    <!--============================================Avis Des Utilisateur======================================-->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" CardAvis bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1 class="details">Avis Des utilisateurs</h1>
                <hr>
                <div class="avisUsers">

                   <div class="etoils">
                       <center>
                        <h3 class="score"> 4.6 / 5</h3>
                        <img class="starsAvis" src="{{asset('images/avis.png')}}" alt="avis"> 
                        <h6 class="nbrAvis"> (9 avis) </h6>
                        </center>
                   </div>

                   <div class="etoilsDetails">
                        <div class="nV"> 
                            <span class="nbr5"><b>5</b></span> 
                            <span><img class="star" src="{{asset('images/etoil.png')}}" alt="etoile"></span> 
                             <span class="nbrVote">(6)</span> 
                            <div class="progressBar"></div>
                         </div>

                         <div class="nV"> 
                            <span class="nbr5"><b>4</b></span> 
                            <span><img class="star" src="{{asset('images/etoil.png')}}" alt="etoile"></span> 
                             <span class="nbrVote">(0)</span> 
                            <div class="progressBar"></div>
                         </div>

                         <div class="nV"> 
                            <span class="nbr5"><b>3</b></span> 
                            <span><img class="star" src="{{asset('images/etoil.png')}}" alt="etoile"></span> 
                             <span class="nbrVote">(0)</span> 
                            <div class="progressBar"></div>
                         </div>

                         <div class="nV"> 
                            <span class="nbr5"><b>2</b></span> 
                            <span><img class="star" src="{{asset('images/etoil.png')}}" alt="etoile"></span> 
                             <span class="nbrVote">(0)</span> 
                            <div class="progressBar"></div>
                         </div>

                         <div class="nV"> 
                            <span class="nbr5"><b>1</b></span> 
                            <span><img class="star" src="{{asset('images/etoil.png')}}" alt="etoile"></span> 
                             <span class="nbrVote">(0)</span> 
                            <div class="progressBar"></div>
                         </div>
                   </div>

                </div>

                <div class="commentaires">
                    <h1 class="nbrCom">COMMENTAIRES (3)</h1>
                    <div class="userC">
                    <img class="userPdp img-fluid" src="{{asset('images/userP.jpg')}}" alt="etoile">
                    <h3 class="userName">Salma EL AAKKOUCHI </h3>
                    <hr>
                    </br>
                    <div class="userComment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Lectus nulla porttitor tortor sed rhoncus suspendisse eget. 
                         Consectetur in ligula at felis nec convallis. Turpis rhoncus vulputate
                          habitasse sagittis id mi ut hac. Ultrices nunc, in urna viverra pharetra.
                           Mi eget in at pellentesque nullam dictum. Metus, eget est urna 
                           platea sit vulputate ac.</div>
                    </div>
                    <div class=bouton>
                        <div class="precedent">
                        <button class="precBtn" type="submit" value="Ajouter Au Panier">Precedent </button>
                        </div>
                        <div class=Suivant>
                        <button class="nextBtn" type="submit" value="Ajouter Au Panier">Suivant </button>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
<!--========================================Autres produits de meme categories ===================================-->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" detailAutresP bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1 class="details">Autres Produits de même catégorie</h1>
                <hr>
                
               

                <div class="div-zone" id="main-container">
                    <div class="slide-div">
                        <div class="slide active">
                            <a class="APr" href="#">
                                        <div class="prod">
                                                    </br>
                                                    <center>
                                                    <img class="ImgProd"src="{{asset('images/1.png')}}" alt="Bastilla">
                                            <br>
                                                <h2 class="nomP">{{ $produit['namep'] }}</h2>
                                                <h3 class="prixP">{{ $produit['prix'] }} DH</h3>
                                            </br>
                                            </center> 
                                        </div>
                                    </a>
                        </div>
                        
                            @foreach($products->produits as $produit)
                            
                            <!-- ================one===========================-->
                            <div class="slide">
                            <a class="APr" href="#">
                                        <div class="prod">
                                                    </br>
                                                    <center>
                                                    <img class="ImgProd"src="{{asset('images/1.png')}}" alt="Bastilla">
                                            <br>
                                                <h2 class="nomP">{{ $produit['namep'] }}</h2>
                                                <h3 class="prixP">{{ $produit['prix'] }} DH</h3>
                                            </br>
                                            </center> 
                                        </div>
                                    </a>
                        </div>

                             @endforeach
                        
                    </ul>            
                </div>

                <div class="slide-controls">
                    <button class="slide-button" id="previous"> <img src="{{asset('images/backbtn.png')}}" alt="Backbtn" style="
                        position: absolute;
                        margin-top: -13%;
                        margin-left: 19%;"></button>
                    <button class="slide-button" id="next"> <img src="{{asset('images/suivbtn.png')}}" alt="suivantbtn"style="
                        position: absolute;
                        margin-top: -13%;
                        margin-left: 59%;"></button>
                </div>
                
               
               

                            
                    
                
            </div>
        </div>
    </div>
            
<!-- jQuery -->




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!--To include Jquery-->
<!-- Slider JS -->
<script>
 var allSlides = $('.slide');
  var activeSlide = 0;
  $("#next").click(function () {
    if (activeSlide + 1 >= allSlides.length) {
      allSlides.eq(activeSlide).hide().removeClass("active");
      activeSlide = 0;
      allSlides.eq(0).fadeIn("slow").addClass("active");
    } else
    {
      allSlides.eq(activeSlide).hide().removeClass("active");
      activeSlide++;
      allSlides.eq(activeSlide).fadeIn("slow").addClass("active");
    }
  });
  $("#previous").click(function () {
    if (activeSlide - 1 < 0) {
      allSlides.eq(0).hide().removeClass("active");
      activeSlide = allSlides.length - 1;
      allSlides.eq(activeSlide).fadeIn("slow").addClass("active");
    } else
    {
      allSlides.eq(activeSlide).hide().removeClass("active");
      activeSlide--;
      allSlides.eq(activeSlide).fadeIn("slow").addClass("active");
    }
  });

</script>





    <!--=====================================================================================================-->



    <div class="footer">
        <h1>2021 &copy; SMH_Team</h1>
    </div>

</x-app-layout>
