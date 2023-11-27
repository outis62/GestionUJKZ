<x-mail::message>
    # Introduction
    Bonjour {{ $user->name }},
    Vous avez reçu cet email parce que vous avez créé un compte sur
    la plateforme de gestion {{ config('app.name') }}.

    Utilisez votre Email et mot de passe pour vous connectez.
    <x-mail::button :url="route('login')">
        Connectez vous
    </x-mail::button>

    Merci pour votre confiance,
    {{ config('app.name') }}
</x-mail::message>
