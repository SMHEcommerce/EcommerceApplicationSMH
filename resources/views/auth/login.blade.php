@extends('layouts.menu')
<img src="{{asset('images/img1.jpg')}}" alt="produits alimentaires" class="img2">
<img src="{{asset('images/img1.jpg')}}" alt="produits alimentaires" class="img1">
<div class="fenetre"></div>

<button name="connexion" class="seconnecter" type="submit">Se connecter</button>
<a href="{{ route('auth.register') }}" name="inscription" class="inscrire" type="submit">S'inscrire</a>
<!--button onclick="window.location='{{ route('auth.register') }}'" name="inscription" class="inscrire" type="submit">S'inscrire</button-->
<div class="line" style="position: absolute; width: 160px; height: 0px; left: 720px; top: 320px; border: 3px solid #FF0000;"></div>
<div class="verticale"></div>
<div class="formulaire">
@if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div style="margin-left: 7%; width: 136%;">
                Email
                <x-jet-input style="color: black;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div></br>
            <div style="margin-left: 7%; width: 136%;">
                Mot de passe
                <x-jet-input style="color: black;" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

                <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600" style="color:#B2BABB;">{{ __('Garder ma session active') }}</span>
                </label>
            </div>
               <!-- <button type="submit" name="connect" style="position: absolute; width: 309px; height: 50px; left: 750px; top: 600px; background: #FF0000;
border-radius: 50px; font-family: Roboto; font-size: 25px; color: #FFFFFF;">
                    {{ __('Se connecter') }}
                    </button>-->
                    <div class="flex items-center justify-end mt-4" >
                @if (Route::has('password.request'))
                    <a style="color:#B2BABB; margin-top: -35%; margin-right: -64% !important;" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif
                <x-jet-button class="ml-4" style="position: absolute; width: 309px; height: 50px; left: -6%; top:108% ; background: #FF0000;
border-radius: 50px; font-family: Roboto; font-size: 28px; color: #FFFFFF;">
                <!--<button type="submit" name="connect" style="position: absolute; width: 309px; height: 50px; left: 750px; top: 600px; background: #FF0000;
border-radius: 50px; font-family: Roboto; font-size: 25px; color: #FFFFFF;"> {{ __('Se connecter') }}</button>
                   -->  {{ __('Se connecter') }}  
                    </x-jet-button>
               
            </div>
            </div>
        </form>
</div>
