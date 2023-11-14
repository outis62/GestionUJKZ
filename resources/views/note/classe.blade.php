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
              <div style="margin-left: 170px!important;"><img src="{{asset('dist/img/studentpi.png')}}" width="140" height="140" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p><span class="text-warning fw-bold">Classe:</span> ELN 1</p>
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
                <p><span class="text-warning fw-bold">Classe:</span> ELN 2</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>  <b>#{{ $etudianteln2 }}</b>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('listeELN2')}}" class="small-box-footer text-white">Ajoutez notes<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-white">
              <div class="inner">
                <p><span class="text-warning fw-bold">Classe:</span> ELN 3</p>
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
                <p><span class="text-warning fw-bold">Classe:</span> IT 1</p>
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
                <p><span class="text-warning fw-bold">Classe:</span> IT 2</p>
                <i class="fa fa-graduation-cap" style="color: lightseagreen;"></i>
                <b>#</b>
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
                <p><span class="text-warning fw-bold">Classe:</span> IT 3</p>
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
                <p><span class="text-warning fw-bold">Classe:</span> FC 1</p>
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
                <p><span class="text-warning fw-bold">Classe:</span> FC 2</p>
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
