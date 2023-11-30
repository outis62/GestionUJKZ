<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.5.0.0.min.css') }}">
    <link href="../asset/glass.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('../dist/img/logobu2.png') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link href="{{ asset('dist/css/accueil.css') }}" rel="stylesheet">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <div id="circle"></div>
    <section class="container-fluid carte" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="card-body">
                            <nav class="navbar navbar-expand-lg navbar-light window-scroll">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="/">
                                        <h4 class="buluni text-white fw-bold">{{ config('app.name') }}</h4>
                                    </a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse ms-2" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page"
                                                    href="#home">Accueil</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">A Propos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">Formations</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#avantage">Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">Contact</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="btn btn-md btn-outline-primary"
                                                    style="margin-left:110px!important" type="button"
                                                    href="{{ route('login') }}">Connexion</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="col-md-12 row">
                                <div class="col-md-5">
                                    <h3 class="text-start ms-4 mt-5">Renforcer l'éducation grâce à la technologie.</h3>
                                    <p class="m-4">{{ config('app.name') }} est une application innovante conçue pour
                                        révolutionner la gestion des bulletins. Elle offre une plateforme centralisée
                                        pour la gestion des données étudiantes, des cours et des notes.</p>
                                    <a href="{{ route('login') }}" class="btn btn-md btn-outline-success m-4 fw-bold">Se
                                        connecter</a>
                                </div>
                                <div class="col-md-7 mt-1 text-end">
                                    <img src="{{ asset('dist/img/studentpi2.png') }}" class="svg" alt="studentdash">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="avantage">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3 appareildetail">
                            <img src="{{ asset('dist/img/computer2.svg') }}" width="60" height="50"
                                class="mt-3" alt="computer">
                            <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                        </div>
                        <div class="col-md-3 appareildetail">
                            <img src="{{ asset('dist/img/mobilephone.svg') }}" width="60" height="50"
                                class="mt-3" alt="mobile-phone">
                            <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3 appareildetail">
                            <img src="{{ asset('dist/img/mailnotify2.svg') }}" width="60" height="50"
                                class="mt-3" alt="mail">
                            <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                        </div>
                        <div class="col-md-3 appareildetail">
                            <img src="{{ asset('dist/img/happy.svg') }}" width="60" height="50" class="mt-3"
                                alt="happy">
                            <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="text-white text-center fw-bold fs-2">Nos Avantages</h3>
                    <p class="text-white justify-content-center">sapien consectetur nibh ipsum vestibulum vitae
                        ipsum
                        lacinia elit. elit. nibh
                        lacinia bibendum et amet, dolor, lacinia. Sed massa vestibulum ullamcorper risus dolor, sapien
                        sit. bibendum tristique. Lorem vestibulum aliquet tellus dolor, at vitae auctor laoreet at Nulla
                        In luctus. et consectetur ipsum Nulla dolor, libero vel et fermentum a vel ultricies Sed dolor,
                        ante adipiscing et sapien Sed et non luctus. ligula Suspendisse consectetur ante venenatis massa
                        vel massa vestibulum </p>
                    <div class="mt-5 loadbuton">
                        <a href="javascript:void(0);" type="button" class="btn btn-secondary p-3 downloadbuton"><img
                                src="{{ asset('dist/img/playstore.png') }}" width="120" height="35"
                                alt=""></a>
                        <a href="javascript:void(0);" type="button" class="btn btn-secondary p-3 downloadbuton"><img
                                src="{{ asset('dist/img/applestore.png') }}" width="120" height="35"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="partenaire">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h3 class="text-white text-center fw-bold fs-2">Nos Partenaires</h3>
                    <p class="text-white">sapien consectetur nibh ipsum vestibulum vitae ipsum lacinia elit. elit. nibh
                        lacinia bibendum et amet, dolor, lacinia. Sed massa vestibulum ullamcorper risus dolor, sapien
                        sit. bibendum tristique. Lorem vestibulum aliquet tellus dolor, at vitae auctor laoreet at Nulla
                        In luctus. et consectetur ipsum Nulla dolor, libero vel et fermentum a vel ultricies Sed dolor,
                        ante adipiscing et sapien Sed et non luctus. ligula Suspendisse consectetur ante venenatis massa
                        vel massa vestibulum </p>
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col partenairedetail">
                        <img src="{{ asset('dist/img/computer2.svg') }}" width="60" height="50"
                            class="mt-3" alt="computer">
                        <h5 class="text-white fw-bold">Universite Aube Nouvelle(ISIG)</h5>
                        <p class="text-white">tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit
                        </p>
                        <a href="javascript:void();" type="button" class="btn btn-secondary p-1 voirplus">Voir
                            plus<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col order-5 offset-1 partenairedetail">
                        <img src="{{ asset('dist/img/mobilephone.svg') }}" width="60" height="50"
                            class="mt-3" alt="mobile phone">
                        <h5 class="text-white fw-bold">Institut Superieure de Technologie(IST)</h5>
                        <p class="text-white">tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit
                        </p>
                        <a href="javascript:void();" type="button" class="btn btn-secondary p-1 voirplus">Voir
                            plus<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col order-1 offset-1 partenairedetail">
                        <img src="{{ asset('dist/img/mailnotify2.svg') }}" width="60" height="50"
                            class="mt-3" alt="mail">
                        <h5 class="text-white fw-bold">ISGE-BF</h5>
                        <p class="text-white">tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit
                        </p>
                        <a href="javascript:void();" type="button" class="btn btn-secondary p-1 voirplus">Voir
                            plus<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col order-1 offset-1 partenairedetail">
                        <img src="{{ asset('dist/img/mailnotify2.svg') }}" width="60" height="50"
                            class="mt-3" alt="mail">
                        <h5 class="text-white fw-bold">SIMPLON Burkina Faso</h5>
                        <p class="text-white">tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit
                        </p>
                        <a href="javascript:void();" type="button" class="btn btn-secondary p-1 voirplus">Voir
                            plus<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('accueil.footer')
    <div id="circle2"></div>
    <script src="{{ asset('dist/css/bootstrap.5.0.0.min.js') }}"></script>
</body>

</html>
