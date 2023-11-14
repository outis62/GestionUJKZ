<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <title>Bulletin Univ Login</title>
</head>
<body>
    <style>
@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
background-image: linear-gradient(to top, lightseagreen 0%, seagreen 100%);
background-attachment: fixed;
  background-repeat: no-repeat;
    font-family: 'Vibur', cursive;
    font-family: 'Abel', sans-serif;
opacity: .95;
}
form {
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    background-image: linear-gradient(-225deg, #E3FDF1 50%, #E3FDF1 50%);
}
form .con {
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: space-around;
    justify-content: space-around;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0 auto;
}
.head-form {
    margin: 2% auto 10% auto;
    text-align: center;
}
.head-form h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
}
.head-form p {letter-spacing: 0.05em;}
.input-item {
    background: #fff;
    color: #333;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}
#eye {
    background: #fff;
    color: #333;
    margin: 5.9px 0 0 0;
    margin-left: -20px;
    padding: 15px 9px 19px 0px;
    border-radius: 0px 5px 5px 0px;
    float: right;
    position: relative;
    right: 1%;
    top: -.2%;
    z-index: 5;
    cursor: pointer;
}
input[class="form-input"]{
    width: 240px;
    height: 50px;
    margin-top: 2%;
    padding: 15px;
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
    outline: none;
    border: none;
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;

}
input[id="txt-input"] {width: 250px;}
input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
}
input::placeholder{
    font-weight: bold;
}
button {
    display: inline-block;
    color: #252537;
    width: 280px;
    height: 50px;
    padding: 0 20px;
    background: #fff;
    border-radius: 5px;
    outline: none;
    border: none;
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    margin: 7% auto;
    letter-spacing: 0.05em;
}
.submits {
    width: 48%;
    display: inline-block;
    margin-left: 2%;
}
.log-in{
    color: white;
    font-weight: bold;
    background-color: lightseagreen;
}
.frgt-pass {text-decoration: none; color: red!important;}
.sign-up {text-decoration: none;}

button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
    0% {
        transform: translateY(3px);
    }
    100% {
        transform: translateY(5px);
    }
}
    </style>
<div class="overlay">
<form method="POST" action="{{ route('login') }}">
        @csrf
   <div class="con">
   <header class="head-form">
      <img src="{{asset('dist/img/logobu2.png')}}" width="110" height="110">
      <h4 style="color: lightseagreen!important;">Bienvenue à BULLETIN-UNIV ! 👋</h4>
      <p>Connectez-vous en utilisant votre Email et Mot de passe</p>
   </header>
   <br>
   <div class="field-set">
         <span class="input-item">
           <i class="fa fa-envelope"></i>
         </span>
         <input class="form-input" id="txt-input" name="email" type="text" placeholder="Email" required>
      <br>
      <span class="input-item">
        <i class="fa fa-lock"></i>
       </span>
      <input class="form-input" type="password" required autocomplete="current-password" placeholder="Mot de passe" id="pwd"  name="password" >
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     <x-input-error :messages="$errors->get('password')" class="mt-2" />
      <br>
      <button class="log-in"> Se connecter </button>
   </div>
   <div class="other">
     <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-danger-600 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm" style="color: blue;">Se souvenir de moi</span>
            </label>
        </div>
      <a class="frgt-pass text-danger" href="{{ route('password.request') }}">Mot de passe oublié ?</a></br>
      @if(\App\Models\User::where('role', 'super-admin')->count() > 0)
        @else
      <a href="{{ route('register') }}" class="sign-up"><i class="fa fa-user-plus" aria-hidden="true"></i>Créer un compte
      </a>
      @endif
   </div>
  </div>
</form>
</div>
<script>
    function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}
function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}
var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);
</script>
</body>
</html>
