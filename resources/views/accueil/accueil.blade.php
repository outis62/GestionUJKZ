<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="../asset/glass.css" rel="stylesheet">
    <link rel="shortcut icon" href="../dist/img/logobu2.png">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link href="{{asset('dist/css/accueil.css')}}" rel="stylesheet">
    <title>Bulletin-Univ/UJKZ</title>
  </head>
  <body>
    <div id="circle"></div>
    <section class="container-fluid carte" id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="card-body">
                <!-- NOTE: Header -->
                <nav class="navbar navbar-expand-lg navbar-light carte">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                      <img src="{{asset('dist/img/logobu2.png')}}" alt="" width="80" height="74" class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#home">Accueil</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0);">A Propos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0);">Formations</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0);">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0);">FAQ</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0);">Contact</a>
                        </li>
                        <li class="nav-item social">
                          <a href="javascript:void();" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg>
                          </a>
                          <a href="javascript:void();" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                          </a>
                          <a href="javascript:void();" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                          </a>
                          <a href="javascript:void();" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                            </svg>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="btn btn-md btn-outline-primary ms-4" type="button"  href="{{route('login')}}">Connexion</a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </nav>
                <!-- NOTE: end -->
                <div class="col-md-12 row">
                  <div class="col-md-5">
                    <h3 class="text-start ms-4">Renforcer l'éducation grâce à la technologie.</h3>
                    <p class="m-4">Bulletin-Univ est une application innovante conçue pour révolutionner la gestion des bulletins. Elle offre une plateforme centralisée pour la gestion des données étudiantes, des cours et des notes.</p>
                    <a href="{{route('login')}}" class="btn btn-md btn-outline-success m-4 fw-bold">Se connecter</a>
                  </div>
                  <div class="col-md-7 mt-1 text-end">
                    <img src="{{asset('dist/img/studentpi2.png')}}" class="svg" alt="studentdash">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="avantage">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-3 appareildetail">
                <img src="{{asset('dist/img/computer2.svg')}}" width="60" height="50" class="mt-3" alt="computer">
                <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                </div>
                <div class="col-md-3 appareildetail">
                <img src="{{asset('dist/img/mobilephone.svg')}}" width="60" height="50" class="mt-3" alt="mobile phone">
                <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 appareildetail">
                <img src="{{asset('dist/img/mailnotify2.svg')}}" width="60" height="50" class="mt-3" alt="mail">
                <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                </div>
                <div class="col-md-3 appareildetail">
                <img src="{{asset('dist/img/happy.svg')}}" width="60" height="50" class="mt-3" alt="happy">
                <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                </div>
            </div>
            </div>
          <div class="col-md-6">
                <h3 class="text-white text-center fw-bold fs-2">Nos Avantages</h3>
                <p class="text-white">sapien consectetur nibh ipsum vestibulum vitae ipsum lacinia elit. elit. nibh lacinia bibendum et amet, dolor, lacinia. Sed massa vestibulum ullamcorper risus dolor, sapien sit. bibendum tristique. Lorem vestibulum aliquet tellus dolor, at vitae auctor laoreet at Nulla In luctus. et consectetur ipsum Nulla dolor, libero vel et fermentum a vel ultricies Sed dolor, ante adipiscing et sapien Sed et non luctus. ligula Suspendisse consectetur ante venenatis massa vel massa vestibulum </p>
                <div class="mt-5 loadbuton">
                <a href="javascript:void(0);" type="button" class="btn btn-secondary p-3 downloadbuton"><img src="{{asset('dist/img/playstore.png')}}" alt=""></a>
                <a href="javascript:void(0);" type="button" class="btn btn-secondary p-3 downloadbuton"><img src="{{asset('dist/img/applestore.png')}}" width="120" height="35" alt=""></a>
                </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="partenaire">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
                <h3 class="text-white text-center fw-bold fs-2">Nos Partenaires</h3>
                <p class="text-white">sapien consectetur nibh ipsum vestibulum vitae ipsum lacinia elit. elit. nibh lacinia bibendum et amet, dolor, lacinia. Sed massa vestibulum ullamcorper risus dolor, sapien sit. bibendum tristique. Lorem vestibulum aliquet tellus dolor, at vitae auctor laoreet at Nulla In luctus. et consectetur ipsum Nulla dolor, libero vel et fermentum a vel ultricies Sed dolor, ante adipiscing et sapien Sed et non luctus. ligula Suspendisse consectetur ante venenatis massa vel massa vestibulum </p>
          </div>
        </div>
        <div class="container text-center">
  <div class="row">
    <div class="col partenairedetail">
    <img src="{{asset('dist/img/computer2.svg')}}" width="60" height="50" class="mt-3" alt="computer">
                <h5 class="text-white">Universite Aube Nouvelle(ISIG)</h5>
                <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                <a href="javascript:void();" type="button" class="btn btn-secondary p-2 voirplus">Voir plus<i class="fas fa-arrow-circle-right"></i></a>
    </div>
    <div class="col order-5 offset-1 partenairedetail">
    <img src="{{asset('dist/img/mobilephone.svg')}}" width="60" height="50" class="mt-3" alt="mobile phone">
                <h5 class="text-white">Institut Superieure de Technologie(IST)</h5>
                <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                <a href="javascript:void();" type="button" class="btn btn-secondary p-2 voirplus">Voir plus<i class="fas fa-arrow-circle-right"></i></a>
    </div>
    <div class="col order-1 offset-1 partenairedetail">
    <img src="{{asset('dist/img/mailnotify2.svg')}}" width="60" height="50" class="mt-3" alt="mail">
                <h5 class="text-white">ISGE-BF</h5>
                <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                <a href="javascript:void();" type="button" class="btn btn-secondary p-2 voirplus">Voir plus<i class="fas fa-arrow-circle-right"></i></a>
    </div>
    <div class="col order-1 offset-1 partenairedetail">
    <img src="{{asset('dist/img/mailnotify2.svg')}}" width="60" height="50" class="mt-3" alt="mail">
                <h5 class="text-white">SIMPLON Burkina Faso</h5>
                <p>tincidunt sit malesuada laoreet vel suscipit Morbi eu sapien suscipit </p>
                <a href="javascript:void();" type="button" class="btn btn-secondary p-2 voirplus">Voir plus<i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
      </div>
    </section>

    @include('accueil.footer')

    <div id="circle2"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
