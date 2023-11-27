<x-mail::message>
    # Introduction
    Bonjour {{ $eleve->nom }} {{ $eleve->prenom }},
    Vous avez reçu cet e-mail parce que vous êtes inscrit à
    l'Université Joseph KI-Zerbo. Veuillez télécharger l'application
    {{ config('app.name') }} pour un suivi plus éfficace de votre cursus.

    <x-mail::button :url="route('accueil')">
        Télécharger
    </x-mail::button>

    Merci pour votre confiance,
    {{ config('app.name') }}
</x-mail::message>
