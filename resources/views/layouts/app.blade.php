<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!--Styles concerning navBAR -->
        <link rel="stylesheet" href="{{ asset('css/navbarcss.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Bootstrap-->
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="Assets/css/bootstrap-theme.min.css" rel="stylesheet">

        <!--Styles concerning allproducts page -->
        <link rel="stylesheet" href="{{ asset('css/allproduitscss.css') }} ">

        <!--Styles concerning productDetails page -->
                             <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/productDetailscss.css') }} ">
                            <!-- JavaScript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!--To include Jquery-->
        <script type="text/javascript" src="{{ asset('js/achatPlusMoins.js') }}" ></script>
        
        <!--Styles concerning MyProducts - Paiement Page -->
        <link rel="stylesheet" href="{{ asset('css/myproductscss.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/multistepscss.css') }} ">


        <!--Styles concerning Dashboard Admin -- First Page -->
        <link rel="stylesheet" href="{{ asset('css/dashboardAdmincss.css') }} ">

        
       
        


        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
