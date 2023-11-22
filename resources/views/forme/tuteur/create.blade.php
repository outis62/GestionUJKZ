@extends('template')
<base href="/public">
@section('page-content')
    <section class="content">
        <div class="container-fluid">
            @if (\Session::has('message'))
                <div class="alert alert-light">
                    <h4>{{ \Session::get('message') }}</h4>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-white boardaccueil">
                        <div class="inner ms-3">
                            <p class="fw-bold fs-6" style="color: lightseagreen;">Bienvenue dans votre tableau de bord de
                                bulletin univ M. {{ Auth::user()->name }}</p>
                            <p>Vous pouvez <b>gérer éfficacement les aspects et opérations liées </br> à votre compte.</b>
                                <strong class="text-warning">Vous êtes en train d'inscrire un tuteur</strong>
                            </p>
                        </div>
                        <div style="margin-left: 170px!important;"><img src="{{ asset('dist/img/studentsave.svg') }}"
                                width="140" height="140" alt=""><a type="btn" class="btn btn-success ms-2"
                                href="{{ route('tuteur.index') }}">Liste <i class="fa fa-book"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-3 col-lg-8 col-8">
                    <form class="form etudiantsave" action="{{ route('tuteur.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="inputForm">
                            <i class="fa fa-user text-black"></i>
                            <label for="nom" class="mt-2 ms-2 text-black">Nom</label>
                            <input type="text" name="nom" class="input">
                        </div>
                        @error('nom')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                        <div class="inputForm">
                            <i class="fa fa-user text-black"></i>
                            <label for="prenom" class="mt-2 ms-2 text-black">Prénom</label>
                            <input type="text" name="prenom" class="input">
                        </div>
                        @error('prenom')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                        <div class="inputForm">
                            <i class="fa fa-phone text-black"></i>
                            <label for="telphone" class="mt-2 ms-2 text-black">Téléphone</label>
                            <input type="number" name="telephone" class="input" required>
                        </div>
                        <div class="inputForm">
                            <i class="fa fa-envelope text-black"></i>
                            <label for="telphone" class="mt-2 ms-2 text-black">Email</label>
                            <input type="email" name="email" class="input" required>
                        </div>
                        <div class="inputForm">
                            <i class="fa fa-home text-black"></i>
                            <label for="matricule" class="mt-2 ms-2 text-black">Résidence</label>
                            <input type="text" name="residence" class="input" required>
                        </div>
                        <button class="button-submit fw-bold" type="submit"
                            style="background-color: lightseagreen;">Enregistrer <i class="fa fa-cloud"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
