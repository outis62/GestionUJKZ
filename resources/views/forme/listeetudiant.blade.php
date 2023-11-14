@extends('template')
@section('page-content')
  <section class="content">
  <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-12">
          <a href="{{route('etudiantsave.index')}}" type="button" class="btn btn-primary">Ajouter un.e etudiant.e</a>
          <a href="javascript:void(0);" type="button" class="btn btn-secondary">Imprimer <i class="fa fa-print"></i></a>
          <a href="javascript:void(0);" type="button" class="btn btn-success">Excel <i class="fa fa-file"></i></a>
          <a href="{{route('home')}}" type="button" class="btn btn-info"><i class="fa fa-backward"></i> Retour</a>
        <div class="table-responsive">
            <table id="enseignant" class="table table-default listeenseignant">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Cycle</th>
                        <th>Filière</th>
                        <th>Niveau</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @php
                  $compteur = 1;
                @endphp
                    @foreach ($etudiant as $etudiant)
                    <tr>
                        <td>{{ $compteur }}</td>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom}}</td>
                        <td>{{ $etudiant->telephone }}</td>
                        <td>{{ $etudiant->email }}</td>
                        <td>{{ $etudiant->cycle->cycle }}</td>
                        <td>{{ $etudiant->filiere->filiere }}</td>
                        <td>{{ $etudiant->niveauetude->niveauetude }}</td>
                        <td style="width: 130px;">
                            <a href="javascript:void(0);" class="btn btn-info"><i class="fa fa-info"></i></a>
                            <a href="javascript:void(0);" class="btn btn-success d-iniline"><i class="fa fa-pen"></i></a>
                            <a href="javascript:void(0);" class="btn btn-danger d-inline mt-1 delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @php
                  $compteur++;
                @endphp
                    @endforeach
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
