

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
            <div class=" TB bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <h1 class="details">Tableau de bord Administrateur</h1>
                <hr>
                <div>
                    <div class="TBadmin">
                        <div class="TBadminInfo">
                            <img class=" TBimgs pdp h-8 w-8 rounded-full object-cover" src="{{ asset('images/Message.png') }}" alt="messages" />
                            <div class="TBimgsInfo">
                                <h1 class="TBInfoTitle">120 Nouveaux</h1>
                                <h6 class="TBTitle">Messages</h6>
                            </div>
                        </div>
                   
                    </div>

                    <div class="TBadmin">
                        <div class="TBadminInfo">
                            <img class=" TBimgs pdp h-8 w-8 rounded-full object-cover" src="{{ asset('images/notif.png') }}" alt="notif" />
                            <div class="TBimgsInfo">
                                <h1 class="TBInfoTitle">20 Nouveaux</h1>
                                <h6 class="TBTitle">Notifications</h6>
                            </div>
                        </div>
                    </div>

                    <div class="TBadmin">
                        <div class="TBadminInfo">
                            <img class=" TBimgs pdp h-8 w-8 rounded-full object-cover" src="{{ asset('images/orders.png') }}" alt="orders" />
                            <div class="TBimgsInfo">
                                <h1 class="TBInfoTitle">14 Ordres</h1>
                                <h6 class="TBTitle">Commandes</h6>
                            </div>
                        </div>
                    </div>

                </div>


                    <div class="PC stats">
                        <h1 class="detailsPC">Statistiques</h1>
                        <hr>
                        <img class=" statImg h-8 w-8  object-cover" src="{{ asset('images/ecommerce-FR.jpg') }}" alt="statistiques" />

                        
                    </div>

                <div class="DT">
                    <h1 class="detailsDT">Les Produits les plus Commandé</h1>
                    <hr>
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4420,90DH</h1>
                    <hr class="linePrCommande">
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         4420,90DH</h1>
                    <hr class="linePrCommande">
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        4420,90DH</h1>
                    <hr class="linePrCommande">
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        4420,90DH</h1>
                    <hr class="linePrCommande">
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4420,90DH</h1>
                    <hr class="linePrCommande">
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         4420,90DH</h1>
                    <hr class="linePrCommande">
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        4420,90DH</h1>
                    <hr class="linePrCommande">
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        4420,90DH</h1>
                    <hr class="linePrCommande">
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4420,90DH</h1>
                    <hr class="linePrCommande">
                    <h1 class="Prd">Lorem - <span style="color : rgba(26, 96, 20, 1)">ipsum dolor</span>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         4420,90DH</h1>
                    

                </div>


            </div>
        </div>
    </div>

    <!--=======================================================================================================-->


    <!--==================================Fiche Message====================================================-->
    


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div id="msgcard" class=" cardmsgs bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <h1 class="details">Messages (120) </h1>
            <hr>
            
                
                
            <div class="commentaires">
                   
                        <div class=" MsgUsers userC">
                            <img class=" imguser userPdp img-fluid" src="{{asset('images/userP.jpg')}}" alt="etoile">
                            <h3 class="userName">Salma EL AAKKOUCHI </h3>
                            <hr style="
                                    margin-left: -42.5%;
                                ">
                                <div class="  precedent">
                                    <button class=" Repondre precBtn" onclick="showRepAdmin()" value="Répondre" >Répondre </button>
                                </div>
                            </br>
                            <div class="userComment" style="
                                margin-left: 10%;
                                width: 80%;
                            ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lectus nulla porttitor tortor sed rhoncus suspendisse eget. 
                                Consectetur in ligula at felis nec convallis. Turpis rhoncus vulputate
                                habitasse sagittis id mi ut hac. Ultrices nunc, in urna viverra pharetra.
                                Mi eget in at pellentesque nullam dictum. Metus, eget est urna 
                                platea sit vulputate ac.
                            </div>
                        </div>

                        <div class=bouton>
                            <div class="precedent">
                                <button class="precBtn" type="submit" value="Ajouter Au Panier">Precedent </button>
                            </div>
                            <div class=Suivant>
                                <button class="nextBtn" type="submit" value="Ajouter Au Panier">Suivant </button>
                            </div>
                        </div>


                        <div id="repadmin" class="repondreMsg" style="visibility:hidden">
                        <div class=" MsgUsers userC">
                            <img class=" imguser userPdp img-fluid" src="{{ Auth::user()->profile_photo_url }}" alt="etoile">
                            <h3 class="userName">Hasnae CHIHI </h3>
                            <hr style="
                                    margin-left: -42.5%;
                                    margin-top:33.5%
                                ">
                               
                            <img class="minus img-fluid"  onclick="hideRepAdmin()" src="{{asset('images/minus.png')}}" alt="minus">
                                   
                            
                            </br>
                            <input class="userComment" style="
                               margin-left: 10%;
                                width: 80%;
                                height: 82px;
                                margin-top: 9%;
                            " type="text" placeholder="Your Message....">
                            </input>
                        </div>

                        <div class="  precedent" >
                                    <button class=" Repondre precBtn"  value="Envoyer" style="
                                    margin-top: 58% !important;
                                ">Envoyer </button>
                         </div>

                        </div>

             </div>

                
               


            </div>
        </div>
    </div>

    <!--=====================================================================================================-->


<!--========================================Notifications===================================-->

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class=" detailAutresP bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1 class="details">Notifications (20)</h1>
                <hr>
                    <div class="notifs">
                            <div>
                                <h2 class="notif"> Nouveaux</h2>
                                <hr style="    width: 80%;
                                    margin-left: 6%;">
                                <p class="notifbody">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis, vel tempus in duis.</p>
                                <hr style="   width: 76%;
                                    margin-left: 7%;">
                                <p class="notiftime">il y a 2j.</p>

                            </div>


                            <div>
                                <h2 class="notif"> Anciennes</h2>
                                <hr style="    width: 80%;
                                    margin-left: 6%;">
                                <p class="notifbody">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis, vel tempus in duis.</p>
                                <hr style="   width: 76%;
                                    margin-left: 7%;">
                                <p class="notiftime">il y a 2j.</p>

                            </div>
                           
                        </div>
              
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

function showRepAdmin(){
    var a = document.getElementById("repadmin");
    var b = document.getElementById("msgcard");

        a.style.visibility = "visible";
        b.style.height ="1000px"
       
    
}


function hideRepAdmin(){
    var a = document.getElementById("repadmin");
    var b = document.getElementById("msgcard");

        a.style.visibility = "hidden";
        b.style.height ="576px"
    
}
</script>


<!--===================================-->
