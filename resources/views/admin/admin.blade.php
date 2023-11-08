@extends('template')
@section('page-content')
  <section class="content">
  <div class="container-fluid">
  <div class="row">
          <div class="col-lg-12 col-12">
            <div class="small-box bg-white boardaccueil">
              <div class="inner ms-3">
                <p class="fw-bold fs-6" style="color: lightseagreen;">Bienvenue dans votre tableau de bord de bulletin univ M. {{ Auth::user()->name }}</p>
                <p>Vous pouvez <b>gérer éfficacement les aspects et opérations liées </br> à votre compte.</b> <strong class="text-warning">Vous etes entrain d'inscrire un Administrateur.</strong></p>
              </div>
              <div style="margin-left: 170px!important;"><img src="{{asset('dist/img/studentsave.svg')}}" width="140" height="140" alt=""><a type="btn" class="btn btn-success ms-2" href="{{route('adminliste')}}">Liste <i class="fa fa-book"></i></a></div>
            </div>
          </div>
        </div>
      <div class="row">
          <div class="offset-3 col-lg-8 col-8">
          <form class="form etudiantsave" action="{{route('admin.store')}}" method="POST">
          @csrf
      <div class="inputForm">
        <i class="fa fa-user" style="color: lightseagreen;"></i>
        <input type="text" name="name" class="input" placeholder="Nom et Prénom" required>
      </div>
      <div class="inputForm">
        <i class="fa fa-envelope" style="color: lightseagreen;"></i>
        <input type="text" name="email" class="input" placeholder="Email" required>
      </div>
      <div class="inputForm">
        <i class="fa fa-key" style="color: lightseagreen;"></i>
        <input type="password" name="password" class="input" placeholder="Mot de passe" required>
        <i class="fa fa-eye" style="color: lightseagreen;"></i>
      </div>
      <div class="inputForm">
        <i class="fa fa-lock" style="color: lightseagreen;"></i>
        <input type="password" name="password_confirmation" class="input" placeholder="Confirmer mot de passe" required>
        <i class="fa fa-eye" style="color: lightseagreen;"></i>
      </div>
        <input id="role" type="hidden" name="role" value="admin" class="block w-full mt-1 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <button class="button-submit fw-bold" type="submit" style="background-color: lightseagreen;">Enregistrer <i class="fa fa-cloud"></i></button>
      </form>
          </div>
        </div>
      </div>
    </section>
    @endsection
