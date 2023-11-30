@extends('../template')
@section('page-content')
    <section class="content">
        <div class="container-fluid">
            @if (\Session::has('success'))
                <div class="alert alert-danger">
                    <h4 class="text-center">{{ \Session::get('success') }}</h4>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h3 class="text-center" style="color: black!important">Liste des Tuteurs</h3>
                    <a href="{{ route('tuteur.create') }}" type="button" class="btn btn-primary">Ajouter un tuteur</a>
                    <a href="{{ route('home') }}" type="button" class="btn btn-info"><i class="fa fa-backward"></i>
                        Retour</a>
                    @if ($tuteur->count() > 0)
                        <div class="table-responsive">
                            <table id="enseignant" class="table table-default">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Residence</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tuteur as $tuteur)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $tuteur->nom }}</td>
                                            <td>{{ $tuteur->prenom }}</td>
                                            <td>{{ $tuteur->telephone }}</td>
                                            <td>{{ $tuteur->email }}</td>
                                            <td>{{ $tuteur->residence }}</td>
                                            <td style="width: 130px;">
                                                <a href="javascript:void(0);" class="btn btn-info"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-success d-iniline"><i
                                                        class="fa fa-pen"></i></a>
                                                <a href="#deleteEmployeeModal{{ $tuteur->id }}"
                                                    class="delete btn btn-danger d-inline mt-1" data-toggle="modal"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <div id="deleteEmployeeModal{{ $tuteur->id }}" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="background: white">
                                                    <form action="{{ route('supprimertuteur', $tuteur->id) }}">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-dark text-center">Suppression
                                                                Tuteur
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-danger">Voulez-vous vraiment supprimer le
                                                                tuteur <span class="text-info">{{ $tuteur->nom }}
                                                                    {{ $tuteur->prenom }}</span> ?
                                                            </p>
                                                            <p class="text-warning"><small>Cette action est
                                                                    irréverssible.</small></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="button" class="btn btn-default"
                                                                data-dismiss="modal" value="Annuler">
                                                            <button type="submit" class="btn btn-danger">supprimer</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="small-box bg-white mt-5">
                            <div class="inner ms-3">
                                <p class="fs-6 text-warning text-center">Aucun tuteur constaté pour le moment 👦</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
