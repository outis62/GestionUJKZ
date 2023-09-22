@extends('../template')

@section('page-content')

    <section class="arriere-plan">
    <div class="testbox">
    <form class="formulairestudentsave">
      <fieldset>
        <legend>STUDENT SAVE</legend>
        <div class="colonne">
          <div class="item champsaisi">
            <input id="fname" type="text" name="nom" placeholder="Nom"/>
          </div>
          <div class="item">
            <input id="lname" type="text" name="cycle" placeholder="Cycles"/>
          </div>
          <div class="item">
            <input id="address" type="text"   name="prenom" placeholder="Prénom"/>
          </div>
          <div class="item">
            <input id="phone" type="tel"   name="filiere" placeholder="Filières"/>
          </div>
          <div class="item">
            <input id="saddress" type="text"   name="telephone" placeholder="Téléphone"/>
          </div>
          <div class="item">
            <input id="city" type="text"   name="anneeuniversitaire" placeholder="Anneé Universitaire"/>
          </div>
          <div class="item">
            <input id="zip" type="text"   name="email" placeholder="Email"/>
          </div>
          <div class="item">
            <input id="country" type="text"   name="nationalite" placeholder="Nationalité" />
          </div>
          <div class="item">
            <input id="country" type="text"   name="datenaissance" placeholder="Date de naissance" />
          </div>
          <div class="item">
            <input id="country" type="text"   name="genre" placeholder="Genre" />
          </div>
          <div class="item">
            <input id="country" type="text"   name="matricule" placeholder="Matricule" />
          </div>
          <div class="item">
            <input id="country" type="file"   name="photo" placeholder="Photo" />
          </div>
          <div class="item">
            <input id="country" type="text"   name="text" placeholder="Mot de passe" />
          </div>
          <div class="item">
            <input id="country" type="hidden"   name="role" value="role" />
          </div>
      </fieldset>
      <br/>

      <div class="btn-block">
      <button class="buttonsaveetudiant" type="submit">Enregistrer</button>
      <button id="button2id" style="border-radius: 10px; width: 70px; height: 45px; background:  orange;"  type="reset">Annuler</button>
      </div>
    </form>
    </div>
    </section>
@endsection
