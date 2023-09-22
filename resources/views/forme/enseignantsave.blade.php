@extends('../template')

@section('page-content')

<section class="arriere-plan">

              <div style="width: 600px; margin: 0 auto; border: red 2px;">
                <h2 style="color: green;">Compte Enseignant.e.s</h2>
                <form method="POST" action="{{ url('ajoutenseignant') }}">
                @csrf
                  <input type="text" name="nom" placeholder="Nom" />
                  <input type="text" name="prenom" placeholder="Prenom" />
                  <input type="number" name="telephone" placeholder="Telephone" />
                  <input type="email" name="email" placeholder="Email" />
                  <input type="password" name="password" placeholder="Password" />
                  <select name="filiere" class="" required>
                    @foreach($filieres as $filiere)
                            <option value="{{$filiere->filiere}}">{{$filiere->filiere}}</option>
                        @endforeach
                    </select>
                  <select name="matiere" class="" required>
                    @foreach($matieres as $matiere)
                            <option value="{{$matiere->matiere}}">{{$matiere->matiere}}</option>
                        @endforeach
                    </select>
                  <input type="date" name="adhesion" placeholder="Annee d'adhesion" />
                  <input type="hidden" name="role" value="enseignant" />
                  <div id="modal-buttons">
                    <button class="submit-button" type="submit">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                    <button class="reset-button" type="reset" onclick="modal_close()">Fermer</button>
                  </div>
                </form>
              </div>
              </section>
              @endsection
