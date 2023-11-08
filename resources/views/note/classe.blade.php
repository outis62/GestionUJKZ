@extends('template')
@section('page-content')
  <section class="content">
  <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-12">
            <div class="small-box bg-white boardaccueil">
              <div class="inner ms-3">
                <p class="fw-bold fs-6" style="color: lightseagreen;">Bienvenue dans votre tableau de bord de bulletin univ M. {{ Auth::user()->name }}</p>
                <p>Vous pouvez <b>gérer éfficacement les aspects et opérations liées </br> à votre compte</b> et accéder aux informations éssentieles à portée de main.</p>
              </div>
              <div style="margin-left: 170px!important;"><img src="{{asset('dist/img/boardaccueil.svg')}}" width="140" height="140" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p>ELN 1</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>  <b>#</b>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="javascript:void(0);" class="small-box-footer text-white">Ajoutez notes<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p>ELN 2</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>  <b>#</b>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="javascript:void(0);" class="small-box-footer text-white">Ajoutez notes<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p>ELN 3</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>  <b>#</b>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="javascript:void(0);" class="small-box-footer text-white">Ajoutez notes<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p>IT 1</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>  <b>#</b>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="javascript:void(0);" class="small-box-footer text-white">Ajoutez notes<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p>IT 2</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>
                <b># {{ $etudiants->where('filiere', 'IT')->where('niveauetude', 'Licence 2')->where('cycle', 'Licence')->count() }}</b>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('listeIT2')}}" class="small-box-footer text-white">Ajoutez notes<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p>IT 3</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>  <b>#</b>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="javascript:void(0);" class="small-box-footer text-white">Ajoutez notes<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p>FC 1</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>  <b>#</b>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="javascript:void(0);" class="small-box-footer text-white">Ajoutez notes<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p>FC 2</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>  <b>#</b>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="javascript:void(0);" class="small-box-footer text-white">Ajoutez notes<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
