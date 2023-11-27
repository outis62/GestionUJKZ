@extends('template')
@section('page-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-white boardaccueil">
                        <div class="inner ms-3">
                            <p class="fw-bold fs-6" style="color: lightseagreen;">Bienvenue dans votre tableau de bord de
                                {{ config('app.name') }} M. {{ Auth::user()->name }}</p>
                            <p>Vous pouvez <b>gérer éfficacement les aspects et opérations liées </br> à votre compte</b> et
                                accéder aux informations éssentieles à portée de main.</p>
                        </div>
                        <div style="margin-left: 170px!important;"><img src="{{ asset('dist/img/boardaccueil.svg') }}"
                                width="140" height="140" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white">
                        <div class="inner">
                            <p>Filières</p>
                            <i class="fa fa-chalkboard" style="color: lightseagreen;"></i> <b>#{{ $filiere }}</b>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('ListeFiliere') }}" class="small-box-footer text-white">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white">
                        <div class="inner">
                            <p>Matières</p>
                            <i class="fa fa-chalkboard" style="color: lightseagreen;"></i> <b>#{{ $matiere }}</b>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('listematiere') }}" class="small-box-footer text-white">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white">
                        <div class="inner">
                            <p>Etudiants par cycles</p>
                            <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i> <b>#</b>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer text-white">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white">
                        <div class="inner">
                            <p>Etudiants par filières</p>
                            <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i> <b>#</b>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer text-white">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white">
                        <div class="inner">
                            <p>Admin</p>
                            <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>
                            <b>#{{ $user->where('role', 'admin')->count() }}</b>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.create') }}" class="small-box-footer text-white">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white">
                        <div class="inner">
                            <p>Enseignant</p>
                            <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i> <b>#{{ $enseignant }}</b>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('enseignant') }}" class="small-box-footer text-white">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white">
                        <div class="inner">
                            <p>Etudiant</p>
                            <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i> <b>#{{ $eleve }}</b>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('Eleve.create') }}" class="small-box-footer text-white">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-white">
                        <div class="inner">
                            <p>Nationalité</p>
                            <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i> <b>#{{ $nationalite }}</b>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('listenationalite') }}" class="small-box-footer text-white">Voir plus <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
