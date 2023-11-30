@extends('template')
@section('page-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-white boardaccueil">
                        <div class="inner ms-3">
                            <p class="fw-bold fs-6" style="color: lightseagreen;">Bienvenue dans votre tableau de bord de
                                {{ config('app.name') }} M. {{ Auth::user()->name }}</p>
                            <p>Vous pouvez <b>gérer éfficacement les aspects et opérations liées </br> à votre compte.</b>
                                <strong class="text-warning">Vous êtes en train d'inscrire un.e étudiant.e.</strong>
                            </p>
                        </div>
                        <div style="margin-left: 170px!important;"><img src="{{ asset('dist/img/studentsave.svg') }}"
                                width="140" height="140" alt=""><a type="btn" class="btn btn-success ms-2"
                                href="{{ route('Eleve.create') }}">Liste <i class="fa fa-book"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (\Session::has('message'))
                    <div class="alert alert-success opacity-50">
                        <h4 class="text-center">{{ \Session::get('message') }}</h4>
                    </div>
                @endif
                <div class="offset-3 col-lg-8 col-8">
                    <form class="form etudiantsave" action="{{ route('Eleve.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="inputForm">
                            <i class="fa fa-user text-black"></i>
                            <label for="nom" class="mt-2 ms-2 text-black">Nom</label>
                            <input type="text" name="nom" class="input">
                        </div>
                        @error('nom')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                        <div class="inputForm">
                            <i class="fa fa-user text-black"></i>
                            <label for="prenom" class="mt-2 ms-2 text-black">Prénom</label>
                            <input type="text" name="prenom" class="input">
                        </div>
                        @error('prenom')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                        <div class="inputForm">
                            <i class="fa fa-phone text-black"></i>
                            <label for="telphone" class="mt-2 ms-2 text-black">Téléphone</label>
                            <input type="number" name="telephone" class="input" required>
                        </div>
                        <div class="inputForm">
                            <label for="genre" class="text-black">Genre</label>
                            <select name="genre_id" id="genre" class="form-control"
                                style="background-color: white; color:black;">
                                @foreach ($genre as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="inputForm">
                            <label for="datenaissance" class="text-black">Date naissance</label>
                            <i class="fa fa-calendar-days" style="color: lightseagreen;"></i>
                            <input type="date" id="datenaissance" name="datenaissance" class="input" required>
                        </div>
                        <div class="inputForm">
                            <i class="fa fa-list-ol text-black"></i>
                            <label for="matricule" class="mt-2 ms-2 text-black">Matricule</label>
                            <input type="number" name="matricule" class="input" required>
                        </div>
                        <div class="inputForm">
                            <label for="cycle" class="text-black">Cycle</label>
                            <select name="cycle_id" id="cycle" class="form-control"
                                style="background-color: white; color:black;">
                                @foreach ($cycle as $cycle)
                                    <option value="{{ $cycle->id }}">{{ $cycle->cycle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="inputForm">
                            <label for="filiere" class="text-black">Filière</label>
                            <select name="filiere_id" id="filiere" class="form-control"
                                style="background-color: white; color:black;">
                                @foreach ($filiere as $filiere)
                                    <option value="{{ $filiere->id }}">{{ $filiere->filiere }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="inputForm">
                            <label for="niveauetude" class="text-black">Niveau étude</label>
                            <select name="niveauetude_id" id="niveauetude" class="form-control"
                                style="background-color: white; color:black;">
                                @foreach ($niveauetude as $niveauetude)
                                    <option value="{{ $niveauetude->id }}">{{ $niveauetude->niveauetude }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="inputForm">
                            <label for="anneeuniversitaire" class="text-black">Année Univ</label>
                            <select name="anneeuniversitaire_id" id="anneeuniversitaire" class="form-control"
                                style="background-color: white; color:black;">
                                @foreach ($anneeuniversitaire as $anneeuniversitaire)
                                    <option value="{{ $anneeuniversitaire->id }}">
                                        {{ $anneeuniversitaire->anneeuniversitaire }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="inputForm">
                            <label for="nationalite" class="text-black">Nationalité</label>
                            <select name="nationalite_id" id="nationalite" class="form-control"
                                style="background-color: white; color:black;">
                                @foreach ($nationalite as $nationalite)
                                    <option value="{{ $nationalite->id }}">{{ $nationalite->nationalite }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="inputForm">
                            <i class="fa fa-envelope text-black"></i>
                            <label for="email" class="mt-2 ms-2 text-black">Email</label>
                            <input type="email" name="email" class="input" required>
                        </div>
                        <div class="inputForm">
                            <i class="fa fa-key text-black"></i>
                            <label for="password" class="mt-2 ms-2 text-black">Mot de passe</label>
                            <input type="password" name="password" class="input" required>
                            <i class="fa fa-eye" style="color: lightseagreen;"></i>
                        </div>
                        <div class="inputForm">
                            <i class="fa fa-lock text-black"></i>
                            <label for="confirmerpassword" class="mt-2 ms-2 text-black">Confirmer mdp</label>
                            <input type="password" name="confirmerpassword" class="input" required>
                            <i class="fa fa-eye" style="color: lightseagreen;"></i>
                        </div>
                        <div class="inputForm">
                            <i class="fa fa-user text-black"></i>
                            <label for="tuteur" class="mt-2 ms-2 text-black">Tuteur</label>
                            <input type="text" id="tuteur" class="input" placeholder="Nom du tuteur" required>
                            <input type="hidden" name="tuteur_id" value="">
                            <select id="tuteurs" class="form-select"
                                style="color: black; height:50px; background:white; border:lightseagreen;"
                                multiple></select>
                        </div>

                        <div class="inputForm">
                            <label for="photo" class="text-black">Photo</label>
                            <i class="fa fa-image mb-1 ms-2" class="text-black"></i>
                            <input type="file" id="photo" class="mt-1 ms-2 input" name="image" required>
                        </div>
                        <button class="button-submit fw-bold" type="submit"
                            style="background-color: lightseagreen;">Enregistrer <i class="fa fa-cloud"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        // AJAX POUR LA LISTE DEROULANTE SELECTION TUTEUR A L'INSCRIPTION D'UN ETUDIANT
        document.getElementById('tuteur').addEventListener('keyup', function() {
            let inputValue = this.value;

            // Effectuez une requête AJAX pour obtenir les tuteurs correspondants au nom
            fetch('/search-tuteurs?query=' + inputValue)
                .then(response => response.json())
                .then(tuteurs => {
                    // Mettez à jour la liste déroulante avec les résultats de la recherche
                    let tuteursDropdown = document.getElementById('tuteurs');
                    tuteursDropdown.innerHTML = '';

                    if (tuteurs.length > 0) {
                        tuteursDropdown.style.display = 'block'; // Affiche la liste déroulante

                        // Ajoute la classe 'tuteursDropdown' à l'élément <select>
                        tuteursDropdown.classList.add('tuteursDropdown');

                        tuteurs.forEach(tuteur => {
                            let option = document.createElement('option');
                            option.value = tuteur.id;
                            option.text = tuteur.nom + ' ' + tuteur.prenom + ' - ' + tuteur.telephone;
                            tuteursDropdown.add(option);
                        });
                    } else {
                        tuteursDropdown.style.display =
                            'none'; // Masque la liste déroulante s'il n'y a pas de résultats
                    }
                });
        });

        // Lorsque l'utilisateur sélectionne un tuteur dans la liste déroulante
        document.getElementById('tuteurs').addEventListener('change', function() {
            // Mettez à jour le champ tuteur_id avec l'ID du tuteur sélectionné
            document.querySelector('input[name="tuteur_id"]').value = this.value;
        });
        // FIN AJAX TUTEUR
    </script>
@endsection
