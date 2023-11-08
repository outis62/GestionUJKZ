<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="loginedit">
        @csrf

        <div>
        <a href="#"><img src="{{ asset('dist/img/logobu2.png') }}" width="80" class="logoujkzlogin" height="80" alt="LogoESI"></a>
        </div>
        <!-- Email Address -->
        <div>
            <h4 class="text-center" style="font-weight: bold; color: lightseagreen; font-size:20px;">Bienvenue à Bulletin-Univ ☻</h4>
            <!-- <x-input-label for="email" :value="__('Email')" /> -->
            <x-text-input id="email" class="block mt-1 w-full logininput" type="email" placeholder="Email"
             name="email"
             style="width: 270px; margin-left: 65px; margin-top: 80px; opacity: 0.95;"
              :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <!-- <x-input-label for="password" :value="__('Password')" /> -->

            <x-text-input id="password" class="block mt-1 w-full logininput"
                            type="password"
                            name="password"
                            placeholder="Mot de passe"
                            style="width: 270px; margin-left: 65px; opacity: 0.95;"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4" style="margin-left: 10px!important;">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-danger-600 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm" style="color: blue; font-weight:bold;">{{ __('Se souvenir de moi') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mdpoublie" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif

            <x-primary-button class="ml-3" style="background-color: lightseagreen; margin-right: 130px;">
                {{ __('Se connecter') }}
            </x-primary-button>
        </div>
        @if(\App\Models\User::where('role', 'super-admin')->count() > 0)
            <!-- Ne rien afficher si le rôle "super-admin" existe déjà -->
        @else
            <a href="{{ route('register') }}" class="underline" style="color: blue;margin-left:140px;"><i class="fa fa-user-plus" aria-hidden="true"></i>Créer un compte</a>
        @endif



    </form>
</x-guest-layout>
