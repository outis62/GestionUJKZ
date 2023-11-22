@extends('template')
@section('page-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center sticky-top z-index-99" style="color: black!important">Bienvenue sur le formulaire
                        d'ajout des notes
                        de ELN 2</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <form action="{{ route('enregistrerNotes') }}" method="POST">
                        @csrf
                        @method('POST')
                        <a href="{{ route('classe') }}" type="button" class="btn btn-info"><i class="fa fa-backward"></i>
                            Retour</a>
                        <label for="matiere" style="color: lightseagreen;">Choisir matière <i
                                class="fas fa-arrow-circle-right"></i></label>
                        <select name="matiere_id" class="" id="matiere"
                            style="background-color: white; color:black; height:38px; border-radius:7px;">
                            @foreach ($matiere as $matiere)
                                <option value="{{ $matiere->id }}">{{ $matiere->matiere }}</option>
                            @endforeach
                        </select>
                        <label for="semestre" style="color: lightseagreen;">Choisir Semèstre <i
                                class="fas fa-arrow-circle-right"></i></label>
                        <select name="semestre_id" class="" id="semestre"
                            style="background-color: white; color:black; height:38px; border-radius:7px;">
                            @foreach ($semestre as $semestre)
                                <option value="{{ $semestre->id }}">{{ $semestre->semestre }}</option>
                            @endforeach
                        </select>
                        <div class="table-responsive">
                            <table id="enseignant" class="table table-default listeenseignant">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom étudiant</th>
                                        <th>Matricule</th>
                                        <th>Note</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eleve as $eleve)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $eleve->nom }} {{ $eleve->prenom }}</td>
                                            <td>{{ $eleve->matricule }}</td>
                                            <td>
                                                <input type="text" name="note[{{ $eleve->id }}]"
                                                    placeholder="note ici !" style="width: 80px;" required>
                                                <input type="hidden" name="eleve_id[{{ $eleve->id }}]"
                                                    value="{{ $eleve->nom }} {{ $eleve->prenom }}">
                                                <input type="hidden" name="matricule[{{ $eleve->id }}]"
                                                    value="{{ $eleve->matricule }}">
                                                <input type="hidden" name="filiere_id[{{ $eleve->id }}]"
                                                    value="{{ $eleve->filiere }}">
                                                <input type="hidden" name="cycle_id[{{ $eleve->id }}]"
                                                    value="{{ $eleve->cycle }}">
                                                <input type="hidden" name="niveauetude_id[{{ $eleve->id }}]"
                                                    value="{{ $eleve->niveauetude }}">
                                                <input type="hidden" name="coefficient"
                                                    value="{{ $matiere->coefficient }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-success mb-1"
                                onclick="return confirm('Etes-vous sûrs de la matière sélectionnée pour les notes ?')">Enregistrer
                                <i class="fa fa-cloud"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
