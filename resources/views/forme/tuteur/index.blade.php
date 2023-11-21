@extends('../template')
@section('page-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <a href="{{ route('tuteur.create') }}" type="button" class="btn btn-primary">Ajouter un tuteur</a>
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
                                            <a href="javascript:void(0);" class="btn btn-danger d-inline mt-1"><i
                                                    class="fa fa-trash"></i></a>
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
