@extends('template')

@section('page-content')
  <section class="content">
  <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-12">
          <a href="{{route('matiere')}}" type="button" class="btn btn-primary">Ajouter un genre</a>
          <a href="javascript:void(0);" type="button" class="btn btn-secondary">Imprimer <i class="fa fa-print"></i></a>
          <a href="javascript:void(0);" type="button" class="btn btn-success">Excel <i class="fa fa-file"></i></a>
          <a href="{{route('home')}}" type="button" class="btn btn-info"><i class="fa fa-backward"></i> Retour</a>
        <div class="table-responsive">
            <table id="enseignant" class="table table-default listeenseignant">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Matiere</th>
                        <th>Coeff</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @php
            $compteur = 1;
        @endphp
                    @foreach ($matiere as $matiere)
                    <tr>
                        <td>{{ $compteur }}</td>
                        <td>{{ $matiere->matiere }}</td>
                        <td>{{ $matiere->coefficient }}</td>
                        <td style="width: 130px;">
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection
