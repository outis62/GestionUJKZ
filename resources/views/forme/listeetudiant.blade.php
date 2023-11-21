@extends('../template')
@section('page-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h3 style="color: black!important">Liste des étudiants</h3>
                    <a href="{{ route('Eleve.index') }}" type="button" class="btn btn-primary">Ajouter un étudiant</a>
                    <a href="javascript:void(0);" type="button" class="btn btn-secondary">Imprimer <i
                            class="fa fa-print"></i></a>
                    <a href="javascript:void(0);" type="button" class="btn btn-success">Excel <i
                            class="fa fa-file"></i></a>
                    <a href="{{ route('home') }}" type="button" class="btn btn-info"><i class="fa fa-backward"></i>
                        Retour</a>
                    <div class="table-responsive">
                        <table id="enseignant" class="table table-default">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Tuteur</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eleve as $eleve)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $eleve->nom }}</td>
                                        <td>{{ $eleve->prenom }}</td>
                                        <td>{{ $eleve->telephone }}</td>
                                        <td>{{ $eleve->email }}</td>
                                        <td>{{ $eleve->tuteur->nom }} {{ $eleve->tuteur->prenom }}</td>
                                        <td style="width: 130px;">
                                            <a href="javascript:void(0);" data-toggle="dropdown" class="btn btn-info"><i
                                                    class="fa fa-info"></i></a>
                                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                                                <a href="javascript:void(0);" class="dropdown-item text-center">Etudiant</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0);" class="dropdown-item text-center">Tuteur</a>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-success d-iniline"><i
                                                    class="fa fa-pen"></i></a>
                                            <a href="{{ route('supprimereleve', $eleve->id) }}"
                                                class="btn btn-danger d-inline mt-1"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
