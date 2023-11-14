@extends('template')
@section('page-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <form action="{{route('enregistrerNotes')}}" method="POST">
                    @csrf
                    <a href="javascript:void(0);" type="button" class="btn btn-secondary">Imprimer <i class="fa fa-print"></i></a>
                    <a href="javascript:void(0);" type="button" class="btn btn-success">Excel <i class="fa fa-file"></i></a>
                    <a href="{{ route('classe') }}" type="button" class="btn btn-info"><i class="fa fa-backward"></i> Retour</a>
                    <label for="matiere" style="color: lightseagreen;">Choisir matière <i class="fas fa-arrow-circle-right"></i></label>
                        <select name="matiere" class="" id="matiere" style="background-color: white; color:black; height:38px; border-radius:7px;">
                            @foreach ($matiere as $matiere)
                            <option value="{{ $matiere->matiere }}">{{ $matiere->matiere }}</option>
                            @endforeach
                        </select>
                        <label for="semestre" style="color: lightseagreen;">Choisir Semèstre <i class="fas fa-arrow-circle-right"></i></label>
                        <select name="semestre" class="" id="semestre" style="background-color: white; color:black; height:38px; border-radius:7px;">
                            @foreach ($semestre as $semestre)
                            <option value="{{ $semestre->semestre }}">{{ $semestre->semestre }}</option>
                            @endforeach
                        </select>
                    <div class="table-responsive">
                        <table id="enseignant" class="table table-default listeenseignant">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom étudiant</th>
                                    <th>Matricule</th>
                                    <th>Filière</th>
                                    <th>Cycle</th>
                                    <th>Niveau</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $compteur = 1;
                                @endphp
                                @foreach ($etudiant as $etudiant)
                                <tr>
                                    <td>{{ $compteur }}</td>
                                    <td>{{ $etudiant->nom }} {{ $etudiant->prenom }}</td>
                                    <td>{{ $etudiant->matricule }}</td>
                                    <td>{{ $etudiant->filiere }}</td>
                                    <td>{{ $etudiant->cycle }}</td>
                                    <td>{{ $etudiant->niveauetude }}</td>
                                    <td>
                                        <input type="text" name="note[{{ $etudiant->id }}]" placeholder="note ici !" style="width: 80px;" required>
                                        <input type="hidden" name="nom_etudiant[{{ $etudiant->id }}]" value="{{ $etudiant->nom }} {{ $etudiant->prenom }}">
                                        <input type="hidden" name="matricule[{{ $etudiant->id }}]" value="{{ $etudiant->matricule }}">
                                        <input type="hidden" name="filiere[{{ $etudiant->id }}]" value="{{ $etudiant->filiere }}">
                                        <input type="hidden" name="cycle[{{ $etudiant->id }}]" value="{{ $etudiant->cycle }}">
                                        <input type="hidden" name="niveau[{{ $etudiant->id }}]" value="{{ $etudiant->niveauetude }}">
                                        <input type="hidden" name="coefficient" value="{{ $matiere->coefficient }}">
                                    </td>
                                </tr>
                                @php
                                $compteur++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-success mb-1" onclick="return confirm('Etes-vous sûrs de la matière sélectionnée pour les notes ?')">Enregistrer <i class="fa fa-cloud"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
