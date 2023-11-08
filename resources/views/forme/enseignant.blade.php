@extends('template')

@section('page-content')
  <section class="content">
  <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-12">
          <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary">Ajouter un.e enseignant.e</a>
          <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: white;">
      <div class="modal-header">
        <h4 class="modal-title text-warning">Inscription enseignant.e ☻</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="{{route('enseignant.store')}}" method="POST">
          @csrf
        <input type="text" class="form-control" name="nom" placeholder="Nom" style="background-color: white; margin-bottom: 10px; color: black;" required>
        <input type="text" class="form-control" name="prenom" placeholder="Prenom" style="background-color: white; margin-bottom: 10px; color: black;" required>
        <input type="number" class="form-control" name="telephone" placeholder="Téléphone" style="background-color: white; color: black; margin-bottom: 10px;" required>
        <input type="email" class="form-control" name="email" placeholder="Email" style="background-color: white; color: black; margin-bottom: 10px;" required>
        <input type="password" class="form-control" name="password" placeholder="Mot de passe" style="background-color: white; color: black; margin-bottom: 10px;" required>
        <label for="filiere" style="color: lightseagreen;">Filière enseignée</label>
        <select name="filiere" class="form-control" id="filiere" style="background-color: white; color:black;">
    @foreach ($filiere as $filiere)
        <option value="{{ $filiere->filiere }}">{{ $filiere->filiere }}</option>
    @endforeach
</select>
<label for="cycle" style="color: lightseagreen;">Cycle enseigné</label>
        <select name="cycle" class="form-control" id="cycle" style="background-color: white; color:black;">
    @foreach ($cycle as $cycle)
        <option value="{{ $cycle->cycle }}">{{ $cycle->cycle }}</option>
    @endforeach
</select>
<label for="matiere" style="color: lightseagreen;">Matière enseignée</label>
        <select name="matiere" class="form-control" id="matiere" style="background-color: white; color:black;">
    @foreach ($matiere as $matiere)
        <option value="{{ $matiere->matiere }}">{{ $matiere->matiere }}</option>
    @endforeach
</select>
        <label for="adhesion" style="color: lightseagreen;">Date d'adhesion</label>
        <input type="date" class="form-control" name="adhesion" id="adhesion" style="background-color: white; color: black; margin-bottom: 10px;" required>
        <label for="anneeuniversitaire" style="color: lightseagreen;">Année Universitaire</label>
        <select name="anneeuniversitaire" class="form-control" id="anneeuniversitaire" style="background-color: white; color:black;">
    @foreach ($anneeuniversitaire as $anneeuniversitaire)
        <option value="{{ $anneeuniversitaire->anneeuniversitaire }}">{{ $anneeuniversitaire->anneeuniversitaire }}</option>
    @endforeach
</select>
        <input type="hidden" name="role" value="enseignant">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Enregistrer <i class="fa fa-cloud"></i></button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer <i class="fa fa-bolt"></i></button>
      </div>
      </form>
    </div>

  </div>
</div>
          <a href="javascript:void(0);" type="button" class="btn btn-secondary">Imprimer <i class="fa fa-print"></i></a>
          <a href="javascript:void(0);" type="button" class="btn btn-success">Excel <i class="fa fa-file"></i></a>
          <a href="{{route('home')}}" type="button" class="btn btn-info"><i class="fa fa-backward"></i> Retour</a>
        <div class="table-responsive" id="enseignant_table">
            <table id="enseignant" class="table table-default listeenseignant">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Filière</th>
                        <th>Cycle</th>
                        <th>Matière</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @php
            $compteur = 1;
        @endphp
                    @foreach ($enseignant as $enseignant)
                    <tr>
                        <td>{{ $compteur }}</td>
                        <td>{{ $enseignant->nom }}</td>
                        <td>{{ $enseignant->prenom}}</td>
                        <td>{{ $enseignant->telephone }}</td>
                        <td>{{ $enseignant->email }}</td>
                        <td>{{ $enseignant->filiere }}</td>
                        <td>{{ $enseignant->cycle}}</td>
                        <td>{{ $enseignant->matiere }}</td>
                        <td style="width: 130px;">
                            <a href="javascript:void(0);" class="btn btn-info"><i class="fa fa-info"></i></a>
                            <a href="javascript:void(0);" class="btn btn-success d-iniline"><i class="fa fa-pen"></i></a>
                            <a href="javascript:void(0);" type="button" class="btn btn-danger d-inline mt-1 delete"><i class="fa fa-trash"></i></a>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection
