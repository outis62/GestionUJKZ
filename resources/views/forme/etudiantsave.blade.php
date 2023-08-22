@extends('../template')

@section('page-content')

    <section>
    <div class="testbox">
    <form class="formulairestudentsave">
      <fieldset>
        <legend>STUDENT SAVE</legend>
        <div class="colonne">
          <div class="item champsaisi">
            <input id="fname" type="text" name="fname" placeholder="Nom"/>
          </div>
          <div class="item">
            <input id="lname" type="text" name="lname" placeholder="Cycle"/>
          </div>
          <div class="item">
            <input id="address" type="text"   name="address" placeholder="Prenom"/>
          </div>
          <div class="item">
            <input id="phone" type="tel"   name="phone" placeholder="Filiere"/>
          </div>
          <div class="item">
            <input id="saddress" type="text"   name="city" placeholder="Telephone"/>
          </div>
          <div class="item">
            <input id="city" type="text"   name="city" placeholder="Annee Universitaire"/>
          </div>
          <div class="item">
            <input id="zip" type="text"   name="zip" placeholder="Email"/>
          </div>
          <div class="item">
            <input id="country" type="text"   name="text" placeholder="Nationalite" />
          </div>
          <div class="item">
            <input id="country" type="text"   name="text" placeholder="Date de naissance" />
          </div>
          <div class="item">
            <input id="country" type="text"   name="text" placeholder="Genre" />
          </div>
          <div class="item">
            <input id="country" type="text"   name="text" placeholder="Matricule" />
          </div>
          <div class="item">
            <input id="country" type="text"   name="text" placeholder="Photo" />
          </div>
          <div class="item">
            <input id="country" type="text"   name="text" placeholder="Mot de passe" />
          </div>
      </fieldset>
      <br/>
     
      <div class="btn-block">
      <button type="order">Enregistrer</button>
      </div>
    </form>
    </div>
    </section>
@endsection