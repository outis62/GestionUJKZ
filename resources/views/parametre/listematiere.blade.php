@extends('template')

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
                    <a href="{{ route('matiere') }}" type="button" class="btn btn-primary">Ajouter une matière</a>
                    <a href="javascript:void(0);" type="button" class="btn btn-secondary">Imprimer <i
                            class="fa fa-print"></i></a>
                    <a href="javascript:void(0);" type="button" class="btn btn-success">Excel <i
                            class="fa fa-file"></i></a>
                    <a href="{{ route('home') }}" type="button" class="btn btn-info"><i class="fa fa-backward"></i>
                        Retour</a>
                    @if ($matiere->count() > 0)
                        <div class="table-responsive">
                            <table id="enseignant" class="table table-default listeenseignant">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Matiere</th>
                                        <th>Coeff</th>
                                        <th>Filière</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matiere as $matiere)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $matiere->matiere }}</td>
                                            <td>{{ $matiere->coefficient }}</td>
                                            <td>{{ $matiere->filiere->filiere }}</td>
                                            <td style="width: 130px;">
                                                <a href="#deleteEmployeeModal{{ $matiere->id }}"
                                                    class="delete btn btn-danger d-inline mt-1" data-toggle="modal"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <div id="deleteEmployeeModal{{ $matiere->id }}" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="background: white">
                                                    <form action="{{ route('supprimermatiere', $matiere->id) }}">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-dark text-center">Suppression
                                                                Matière
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-danger">Voulez-vous vraiment supprimer la
                                                                matière <span
                                                                    class="text-info">{{ $matiere->matiere }}</span> ?
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
                                <p class="fs-6 text-warning text-center">Aucune matière constatée pour le moment
                                    🎡</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
