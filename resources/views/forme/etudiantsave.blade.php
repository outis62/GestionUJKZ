@extends('template')

@section('page-content')
  <section class="content">
  <div class="container-fluid">
  <div class="row">
          <div class="col-lg-12 col-12">
            <div class="small-box bg-white boardaccueil">
              <div class="inner ms-3">
                <p class="fw-bold fs-6" style="color: lightseagreen;">Bienvenue dans votre tableau de bord de bulletin univ M. {{ Auth::user()->name }}</p>
                <p>Vous pouvez <b>gérer éfficacement les aspects et opérations liées </br> à votre compte.</b>  <strong class="text-warning">Vous etes entrain d'inscrire un.e étudiant.e.</strong></p>
              </div>
              <div style="margin-left: 170px!important;"><img src="{{asset('dist/img/studentsave.svg')}}" width="140" height="140" alt=""><a type="btn" class="btn btn-success ms-2" href="{{route ('store')}}">Liste <i class="fa fa-book"></i></a></div>
            </div>
          </div>
        </div>
  <div class="row">
          <div class="offset-3 col-lg-8 col-8">
          <form class="form etudiantsave" action="{{route('ajoutetudiant')}}" method="POST">
          @csrf
      <div class="inputForm">
        <i class="fa fa-user" style="color: lightseagreen;"></i>
        <input type="text" name="nom" class="input" placeholder="Nom" value="{{ old('nom') }}" required>
      </div>
      <div class="inputForm">
        <i class="fa fa-user" style="color: lightseagreen;"></i>
        <input type="text" name="prenom" class="input" placeholder="Prénom" value="{{ old('prenom') }}" required>
      </div>
      <div class="inputForm">
        <i class="fa fa-phone" style="color: lightseagreen;"></i>
        <input type="number" name="telephone" class="input" placeholder="Téléphone" required>
      </div>
      <div class="inputForm">
        <label for="genre" style="color: lightseagreen;">Genre</label>
      <select name="genre" id="genre" class="form-control" style="background-color: white; color:black;">
    @foreach ($genre as $genre)
        <option value="{{ $genre->genre }}">{{ $genre->genre }}</option>
    @endforeach
</select>
      </div>
      <div class="inputForm">
      <label for="datenaissance" style="color: lightseagreen;">Date naissance</label>
        <i class="fa fa-calendar-days" style="color: lightseagreen;"></i>
        <input type="date" id="datenaissance" name="datenaissance" class="input" placeholder="Date de naissance" required>
      </div>
      <div class="inputForm">
        <i class="fa fa-list-ol" style="color: lightseagreen;"></i>
        <input type="number" name="matricule" class="input" placeholder="Matricule" required>
      </div>
      <div class="inputForm">
      <label for="cycle" style="color: lightseagreen;">Cycle</label>
      <select name="cycle" id="cycle" class="form-control" style="background-color: white; color:black;">
    @foreach ($cycle as $cycle)
        <option value="{{ $cycle->cycle }}">{{ $cycle->cycle }}</option>
    @endforeach
</select>
      </div>
      <div class="inputForm">
      <label for="filiere" style="color: lightseagreen;">Filière</label>
      <select name="filiere" id="filiere" class="form-control" style="background-color: white; color:black;">
    @foreach ($filiere as $filiere)
        <option value="{{ $filiere->filiere }}">{{ $filiere->filiere }}</option>
    @endforeach
</select>
      </div>
      <div class="inputForm">
      <label for="niveauetude" style="color: lightseagreen;">Niveau étude</label>
      <select name="niveauetude" id="niveauetude" class="form-control" style="background-color: white; color:black;">
    @foreach ($niveauetude as $niveauetude)
        <option value="{{ $niveauetude->niveauetude }}">{{ $niveauetude->niveauetude }}</option>
    @endforeach
</select>
      </div>
      <div class="inputForm">
      <label for="anneeuniversitaire" style="color: lightseagreen;">Année Univ</label>
      <select name="anneeuniversitaire" id="anneeuniversitaire" class="form-control" style="background-color: white; color:black;">
    @foreach ($anneeuniversitaire as $anneeuniversitaire)
        <option value="{{ $anneeuniversitaire->anneeuniversitaire }}">{{ $anneeuniversitaire->anneeuniversitaire }}</option>
    @endforeach
</select>
      </div>
      <div class="inputForm">
      <label for="nationalite" style="color: lightseagreen;">Nationalité</label>
      <select name="nationalite" id="nationalite" class="form-control" style="background-color: white; color:black;">
    @foreach ($nationalite as $nationalite)
        <option value="{{ $nationalite->nationalite }}">{{ $nationalite->nationalite }}</option>
    @endforeach
</select>
      </div>
      <div class="inputForm">
        <i class="fa fa-envelope" style="color: lightseagreen;"></i>
        <input type="email" name="email" class="input" placeholder="Email" required>
      </div>
      <div class="inputForm">
        <i class="fa fa-key" style="color: lightseagreen;"></i>
        <input type="password" name="password" class="input" placeholder="Mot de passe" required>
        <i class="fa fa-eye" style="color: lightseagreen;"></i>
      </div>
      <div class="inputForm">
        <i class="fa fa-lock" style="color: lightseagreen;"></i>
        <input type="password" name="confirmerpassword" class="input" placeholder="confirmer Mot de passe" required>
        <i class="fa fa-eye" style="color: lightseagreen;"></i>
      </div>
      <div class="inputForm">
      <label for="photo" style="color: lightseagreen;">Photo</label>
        <i class="fa fa-image" style="color: lightseagreen;"></i>
        <input type="file" id="photo" class="mt-1 ms-2" name="photo" class="input" placeholder="Photo" required>
      </div>
    <button class="button-submit fw-bold" type="submit" style="background-color: lightseagreen;">Enregistrer <i class="fa fa-cloud"></i></button>
</form>
          </div>
        </div>
      </div>
    </section>
    @endsection
