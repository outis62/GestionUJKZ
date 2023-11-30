@extends('template')

@section('page-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h3 class="text-center" style="color: black!important">Liste des enseignants</h3>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" type="button"
                        class="btn btn-primary">Ajouter un enseignant</a>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content" style="background-color: white;">
                                <div class="modal-header">
                                    <h4 class="modal-title text-warning">Inscription enseignant.e ☻</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('enseignant.store') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <label for="nom" class="text-black">Nom</label>
                                        <input type="text" class="form-control" name="nom" placeholder="Nom"
                                            style="background-color: white; margin-bottom: 10px; color: black;" required>
                                        <label for="prenom" class="text-black">Prénom</label>
                                        <input type="text" class="form-control" name="prenom" placeholder="Prénom"
                                            style="background-color: white; margin-bottom: 10px; color: black;" required>
                                        <label for="telephone" class="text-black">Téléphone</label>
                                        <input type="number" class="form-control" name="telephone" placeholder="Téléphone"
                                            style="background-color: white; color: black; margin-bottom: 10px;" required>
                                        <label for="email" class="text-black">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            style="background-color: white; color: black; margin-bottom: 10px;" required>
                                        <label for="password" class="text-black">Mot de passe</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Mot de passe"
                                            style="background-color: white; color: black; margin-bottom: 10px;" required>
                                        <label for="filiere" class="text-black">Filière enseignée</label>
                                        <select name="filiere_id" class="form-control" id="filiere"
                                            style="background-color: white; color:black;">
                                            @foreach ($filiere as $filiere)
                                                <option value="{{ $filiere->id }}">{{ $filiere->filiere }}</option>
                                            @endforeach
                                        </select>
                                        <label for="cycle" class="text-black">Cycle enseigné</label>
                                        <select name="cycle_id" class="form-control" id="cycle"
                                            style="background-color: white; color:black;">
                                            @foreach ($cycle as $cycle)
                                                <option value="{{ $cycle->id }}">{{ $cycle->cycle }}</option>
                                            @endforeach
                                        </select>
                                        <label for="matiere" class="text-black">Matière enseignée</label>
                                        <select name="matiere_id" class="form-control" id="matiere"
                                            style="background-color: white; color:black;">
                                            @foreach ($matiere as $matiere)
                                                <option value="{{ $matiere->id }}">{{ $matiere->matiere }}</option>
                                            @endforeach
                                        </select>
                                        <label for="adhesion" class="text-black">Date d'adhesion</label>
                                        <input type="date" class="form-control" name="adhesion" id="adhesion"
                                            style="background-color: white; color: black; margin-bottom: 10px;" required>
                                        <label for="anneeuniversitaire_id" class="text-black">Année Universitaire</label>
                                        <select name="anneeuniversitaire_id" class="form-control" id="anneeuniversitaire"
                                            style="background-color: white; color:black;">
                                            @foreach ($anneeuniversitaire as $anneeuniversitaire)
                                                <option value="{{ $anneeuniversitaire->id }}">
                                                    {{ $anneeuniversitaire->anneeuniversitaire }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="role" value="enseignant">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Enregistrer <i
                                            class="fa fa-cloud"></i></button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer <i
                                            class="fa fa-bolt"></i></button>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <a href="{{ route('home') }}" type="button" class="btn btn-info"><i class="fa fa-backward"></i>
                        Retour</a>
                    @if (\Session::has('success'))
                        <div class="alert alert-danger">
                            <h4 class="text-center">{{ \Session::get('success') }}</h4>
                        </div>
                    @endif
                    @if (\Session::has('message'))
                        <div class="alert alert-success opacity-50">
                            <h4 class="text-center">{{ \Session::get('message') }}</h4>
                        </div>
                    @endif
                    @if ($enseignant->count() > 0)
                        <div class="table-responsive" id="enseignant_table">
                            <table id="enseignant" class="table table-default listeenseignant">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enseignant as $enseignant)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $enseignant->nom }}</td>
                                            <td>{{ $enseignant->prenom }}</td>
                                            <td>{{ $enseignant->telephone }}</td>
                                            <td>{{ $enseignant->email }}</td>
                                            <td style="display:flex;">
                                                <a href="javascript:void(0);" class="btn btn-info ms-3"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-success ms-1"><i
                                                        class="fa fa-pen"></i></a>
                                                <form action="{{ route('enseignant.destroy', $enseignant->id) }}"
                                                    method="POST" class="ms-1">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger delete"><i
                                                            class="fa fa-trash"></i></a></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    @else
                        <div class="small-box bg-white mt-5">
                            <div class="inner ms-3">
                                <p class="fs-6 text-warning text-center">Aucun enseignant constaté pour le moment 👦</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
