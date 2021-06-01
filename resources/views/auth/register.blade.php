@extends('layouts.menu')
<img src="{{asset('images/img1.jpg')}}" alt="produits alimentaires" class="img2">
<img src="{{asset('images/img1.jpg')}}" alt="produits alimentaires" class="img1">
<div class="fenetre"></div>

<button onclick="window.location='{{ url('/auth/login') }}'" name="connexion" class="seconnecter" type="submit" style="top:240px;">Se connecter</button>
<button onclick="window.location='{{ url('/auth/register') }}'" name="inscription" class="inscrire" type="submit"style="top:240px;">S'inscrire</button>
<div class="line" style="position: absolute; width: 160px; height: 0px; left: 50%; top: 280px; border: 3px solid #FF0000;"></div>
<div class="verticale" style="top: 270px"></div>
<div class="formulaire" style="top: 32%; left: 41%;">
@if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label style="color:white" for="name" value="{{ __('Nom') }}" />
                <x-jet-input style="margin-left: 15%; height: 9%; width 125%; color: black;" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label style="color:white; margin-top: -9%;" for="email" value="{{ __('Email') }}" />
                <x-jet-input style="margin-left: 15%; height: 9%; width 125%;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label style="color:white; margin-top: -9%;" for="password" value="{{ __('Mot de passe') }}" />
                <x-jet-input style="margin-left: 15%; height: 9%; color: black; width 125%;" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label style="color:white; margin-top: -9%;" for="password_confirmation" value="{{ __('Confirmer votre mot de passe') }}" />
                <x-jet-input style="margin-left: 15%; height: 9%; color: black; width 125%;" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div>
                <x-jet-label style="color:white" for="name" value="{{ __('Adresse') }}" />
                <x-jet-input style="margin-left: 15%; height: 9%; color: black; width 125%;" id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" />
            </div>
            <div>
                <x-jet-label style="color:white" for="name" value="{{ __('Téléphone') }}" />
                <x-jet-input style="margin-left: 15%; height: 9%; color: black; width 125%;" id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="telephone" />
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color:white" href="{{ route('auth.login') }} ">
                    {{ __('Déjà inscrit?') }}
                </a>

                <x-jet-button class="ml-4" style="left: 45% !important; ">
                    {{ __("S'inscrire") }}
                </x-jet-button>
            </div>
        </form>
</div>
