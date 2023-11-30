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
                    <a href="{{ route('filiere') }}" type="button" class="btn btn-primary">Ajouter une Filière</a>
                    <a href="javascript:void(0);" type="button" class="btn btn-secondary">Imprimer <i
                            class="fa fa-print"></i></a>
                    <a href="javascript:void(0);" type="button" class="btn btn-success">Excel <i
                            class="fa fa-file"></i></a>
                    <a href="{{ route('home') }}" type="button" class="btn btn-info"><i class="fa fa-backward"></i>
                        Retour</a>
                    @if ($filiere->count() > 0)
                        <div class="table-responsive">
                            <table id="enseignant" class="table table-default listeenseignant">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Filière</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $compteur = 1;
                                    @endphp
                                    @foreach ($filiere as $filiere)
                                        <tr>
                                            <td>{{ $compteur }}</td>
                                            <td>{{ $filiere->filiere }}</td>
                                            <td style="width: 130px;">
                                                <a href="{{ route('delete', $filiere->id) }}"
                                                    class="btn btn-danger d-inline mt-1"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @php
                                            $compteur++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="small-box bg-white mt-5">
                            <div class="inner ms-3">
                                <p class="fs-6 text-warning text-center">Aucune filière constatée pour le moment
                                    🎡</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
