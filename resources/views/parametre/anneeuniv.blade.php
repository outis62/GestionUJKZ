@extends('template')
@section('page-content')
    <section class="content">
        <div class="container-fluid">
            @if (\Session::has('message'))
                <div class="alert alert-success opacity-50">
                    <h4 class="text-center">{{ \Session::get('message') }}</h4>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="bg-white boardaccueil">
                        <div class="inner ms-4">
                            <p class="fw-bold fs-6" style="color: lightseagreen;">Gestion Année Universitaire</p>
                            <p>Vous pouvez <b>gérer éfficacement les aspects et opérations liées </br> à votre compte</b> et
                                accéder aux informations éssentieles à portée de main.</p>
                        </div>
                        <div class="mt-4" style="margin-left: 170px!important;"><a type="btn" class="btn btn-primary"
                                href="{{ route('listeanneeuniv') }}">Liste <i class="fa fa-book"></i></a> <a type="btn"
                                class="btn btn-secondary" href="javascript:void(0);"><i class="fa fa-backward"></i>
                                Retour</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-white boardaccueil">
                        <div class="inner ms-3">
                            <p class="fw-bold fs-6" style="color: lightseagreen;">Ajouter une Année Universitaire</p>
                            <form action="{{ route('ajoutanneeuniv') }}" method="POST">
                                @csrf
                                <input type="text" class="form-control d-inline" name="anneeuniversitaire"
                                    placeholder="Année au format 202X-202X"
                                    style="background-color: white; margin-bottom: 10px; color: black;" required>
                                <input type="submit" class="btn btn-success" value="Enregistrer">
                            </form>
                        </div>
                        <div style="margin-left: 170px!important;"><img src="{{ asset('dist/img/year.svg') }}"
                                width="140" height="140" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
