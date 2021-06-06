

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
                <!--Div of Ajouter Category PopUP    -->
                <div class="editPopup" id="addP" style="margin-top:0.5% !important" >
                    <img class="closebtn"   src="{{asset('images/close.png')}}" alt="close" style="margin-left: 89%;
                    padding: 16px;">
                        <h1 class="deleteTitle" style="margin-top: -5%;">Ajouter Une catégorie</h1>

                             <form action="{{ route('category.save') }}" method="post">
                                    @csrf

                                            <label class="nameP" for="namecat" style="top:35%; font-size:41px"> Nom de la Catégorie :</label>

                                            <input class="inputD" type="text"  style="
                                             position: absolute;
                                                width: 56%;
                                                top: 47%;
                                                left: 13%;
                                                background: #FFFFFF;
                                                border: 1px solid #1341B8;
                                                box-sizing: border-box;
                                                border-radius: 20px;
                                                height: 50px;"
                                            id="namecat" name="namecat"  placeholder="Entrer le nom de la catégorie ..." required>

                                            <a href="{{route('category.save')}}">
                                            <button class=" enregistrer precBtn"  value="Save"  style="position :inherit !important; margin-top: 35%;
                                                width: 30%;
                                                margin-left: 63%;
                                                font-weight: bold;">Ajouter La Catégorie </button>
                                            </a> 

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




