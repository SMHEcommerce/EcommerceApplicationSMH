<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/11d17d7d47.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="{{ mix('/css/app.css') }}">

     <!--Styles concerning navBAR -->
     <link rel="stylesheet" href="/css/auth.css">
     <link rel="stylesheet" href="/css/navbar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
   <!-- Primary Navigation Menu -->
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('login') }}">
                        <!--<x-jet-application-mark class="block h-9 w-auto" />-->
                        <img src="{{asset('images/logo2.jpg')}}" alt="Chaouki Distribution" width="180" height="500" class="logo" >
                    </a>
                </div>
   

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!--for responsive dropdown menu phones-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--buttons of menu bar-->
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                        {{ __('Acceuil') }}
                    </x-jet-nav-link>
</div>
      </li>
      <li class="nav-item active">
      <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-jet-nav-link href="{{ route('login') }}">
                        {{ __('Comment ça fonctionne ?') }}
                    </x-jet-nav-link>
      </div>            
      </li>
      <li class="nav-item active">
      <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-jet-nav-link href="{{ route('login') }}">
                        {{ __('A Propos de nous') }}
                    </x-jet-nav-link>
        </div>
      </li>
      <li class="nav-item">
      <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-jet-nav-link href="{{ route('login') }}">
                        {{ __('Nos Produits') }}
                    </x-jet-nav-link>
        </div>
      </li>
      <li class="nav-item">
      <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-jet-nav-link href="{{ route('login') }}">
                        {{ __('Nous Contacter') }}
                    </x-jet-nav-link>
</div>
      </li>
      <div class="nav navbar-nav navbar-right">
      <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <a href="login" class="boutonconnecter" style="background-color:#7a837e">Se connecter | S'inscrire</a>
</div>
  </li>
</div>
    </ul>
  </div>
</div>
</nav>
    
</nav>
</div>






</body>
</html>