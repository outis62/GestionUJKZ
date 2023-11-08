@extends('template')

@section('page-content')

  <!-- Main content -->
  <section class="content">
  <div class="container-fluid">
  <div class="row">
          <div class="col-lg-12 col-12">
            <div class="bg-white boardaccueil">
              <div class="inner ms-4">
                <p class="fw-bold fs-6" style="color: lightseagreen;">Gestion Matiere</p>
                <p>Vous pouvez <b>gérer éfficacement les aspects et opérations liées </br> à votre compte</b> et accéder aux informations éssentieles à portée de main.</p>
              </div>
              <div class="mt-4" style="margin-left: 170px!important;"><a type="btn" class="btn btn-primary" href="{{('listematiere')}}">Liste <i class="fa fa-book"></i></a>   <a type="btn" class="btn btn-secondary" href="javascript:void(0);"><i class="fa fa-backward"></i> Retour</a></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-12">
            <div class="small-box bg-white boardaccueil">
              <div class="inner ms-3">
                <p class="fw-bold fs-6" style="color: lightseagreen;">Ajouter une matiere</p>
                <form action="{{route('ajoutmatiere')}}" method="POST">
                @csrf
                  <input type="text" class="form-control d-inline" name="matiere" placeholder="Saisir nouvelle matiere" style="background-color: white; margin-bottom: 10px; color: black;" required>
                  <input type="number" class="form-control d-inline" name="coefficient" placeholder="Saisir coefficient" style="background-color: white; margin-bottom: 10px; color: black;" required>
                  <input type="submit" class="btn btn-success" value="Enregistrer">
                </form>
              </div>
              <div style="margin-left: 200px!important;"><img src="{{asset('dist/img/semestre.svg')}}" width="140" height="140" alt=""></div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection
