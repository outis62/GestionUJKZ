<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="loginedit">
        @csrf

        <div>
        <img src="{{ asset('dist/img/UJKZ.png') }}" width="100" class="logoujkzlogin" height="100" alt="LogoESI">
        </div>
        <!-- Email Address -->
        <div>
            <h4 style="color: green; text-align: center; font-weight: 700; position: relative; top: 40px;">CONNECTEZ-VOUS</h4>
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
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-danger-600 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm" style="color: blue;">{{ __('Se souvenir de moi') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublie?') }}
                </a>
            @endif

            <x-primary-button class="ml-3" style="background-color: green; margin-right: 130px;">
                {{ __('Se connecter') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
