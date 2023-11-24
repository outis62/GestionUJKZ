@extends('template')
@section('page-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-white boardaccueil">
                        <div class="inner ms-3">
                            <p class="fw-bold fs-6" style="color: lightseagreen;">Bienvenue dans votre tableau de bord de
                                bulletin univ M. {{ Auth::user()->name }}</p>
                            <p>Vous pouvez <b>gérer éfficacement les aspects et opérations liées </br> à votre compte.</b>
                                <strong class="text-warning">Vous êtes en train d'inscrire un administrateur.</strong>
                            </p>
                        </div>
                        <div style="margin-left: 170px!important;"><img src="{{ asset('dist/img/studentsave.svg') }}"
                                width="140" height="140" alt=""><a type="btn" class="btn btn-success ms-2"
                                href="{{ route('admin.create') }}">Liste <i class="fa fa-book"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (\Session::has('message'))
                    <div class="alert alert-success opacity-50">
                        <h4 class="text-center">{{ \Session::get('message') }}</h4>
                    </div>
                @endif
                <div class="offset-3 col-lg-8 col-8">
                    <form class="form etudiantsave" action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <label for="name" class="text-black">Nom et Prenom</label>
                        <div class="inputForm">
                            <i class="fa fa-user" style="color: lightseagreen;"></i>
                            <input type="text" name="name" class="input" placeholder="Nom et Prénom" required>
                        </div>
                        <label for="email" class="text-black">Email</label>
                        <div class="inputForm">
                            <i class="fa fa-envelope" style="color: lightseagreen;"></i>
                            <input type="email" name="email" class="input" placeholder="Email" required>
                        </div>
                        <label for="password" class="text-black">Mot de passe</label>
                        <div class="inputForm">
                            <i class="fa fa-key" style="color: lightseagreen;"></i>
                            <input type="password" name="password" class="input" placeholder="Mot de passe" required>
                            <i class="fa fa-eye" style="color: lightseagreen;"></i>
                        </div>
                        <label for="password_confirmation" class="text-black">Confirmer mot de passe</label>
                        <div class="inputForm">
                            <i class="fa fa-lock" style="color: lightseagreen;"></i>
                            <input type="password" name="password_confirmation" class="input"
                                placeholder="Confirmer mot de passe" required>
                            <i class="fa fa-eye" style="color: lightseagreen;"></i>
                        </div>
                        <input id="role" type="hidden" name="role" value="admin"
                            class="block w-full mt-1 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <button class="button-submit fw-bold" type="submit"
                            style="background-color: lightseagreen;">Enregistrer <i class="fa fa-cloud"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
