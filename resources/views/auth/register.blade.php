<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <img src="{{ asset('dist/img/UJKZ.png') }}" width="130" class="logoujkzregister" height="130" alt="LogoESI">
        <div>
            <h3 style="text-align: center;color:lightseagreen;font-weight:700;">Créer Compte Super-Admin 🚀</h3>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Nom" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Mot de passe"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirmer Mot de passe"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
<div class="mt-4">
    <input id="role" type="hidden" name="role" value="super-admin" class="block w-full mt-1 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    <x-input-error :messages="$errors->get('role')" class="mt-2" />
</div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Connexion?') }}
            </a>
            <x-primary-button class="ml-4">
                {{ __('Enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
