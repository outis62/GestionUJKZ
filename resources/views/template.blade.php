<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projet File Rouge Simplon</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{asset('dist/css/app.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-5.2.3-dist/css/bootstrap.min.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="" src="dist/img/armoirie.png" alt="Armoirie" height="80" width="80" style="border-radius: 5px;">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-secondary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white;"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link appname"><strong>Bulletin-Univ</strong></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell" style="color: white;"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"  style="color: white;"></i>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
<i class="fas fa-user" style="color: white;"></i><span class="pl-2" style="color: white;">{{ Auth::user()->name }}</span>
        </a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('profile.edit') }}" class="dropdown-item">Profil</a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Déconnexion</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
</div>
</li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.ujkz.bf" class="brand-link" style="text-decoration:none;">
      <span class="brand-text font-weight-light" style="font-style: italic;">Université Joseph Ki-Zerbo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
        <a class="nav-link" data-toggle="dropdown" href="{{ route('profile.edit') }}">
          <i class="fas fa-user" style="color: white;"></i>
                    <span class="pl-2">{{ Auth::user()->name }}</span>
                  </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{url ('/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>
          <li class="nav-item">
          @if(Auth::user()->role != 'enseignant' && Auth::user()->role != 'etudiant')
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Comptes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @endif
            <ul class="nav nav-treeview">
            <li class="nav-item">
            @if(Auth::user()->role != 'admin' && Auth::user()->role != 'enseignant' && Auth::user()->role != 'etudiant')
              <a href="{{route('register')}}" target="_blank" class="nav-link">
              <i class="far fa-user nav-icon" style="color: orange;"></i>
              <p style="color: orange;">Admin.s</p>
              </a>
            @endif
              </li>
              <li class="nav-item">
                <a href="{{route ('etudiantsave')}}" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Etudiant.e.s</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Enseignant.e.s</p>
                </a>
              </li> -->
              <li class="nav-item">
              <div id="main">
              <a href="#" class="nav-link modal-trigger" onclick="modal_open()"><i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Enseignant.e.s</p>
              </a>
              </div>
              <div id="modal-overlay"></div>
              <div id="register-modal">
                <h2 style="color:green">Compte Enseignant.e.s</h2>
                <form method="POST" action="{{route('ajoutenseignant')}}">
                  <input type="text" name="nom" placeholder="Nom" />
                  <input type="text" name="prenom" placeholder="Prenom" />
                  <input type="text" name="telephone" placeholder="Telephone" />
                  <input type="email" name="email" placeholder="Email" />
                  <input type="password" name="password" placeholder="Password" />
                  <select id="filiere" name="filiere" class="" required>
                      @isset($filieres)
                      @foreach($filieres as $filiere)
                      <option value="{{$filiere->filiere}}">{{$filiere->filiere}}</option>
                      @endforeach
                      @endisset
                  </select>

                  <select name="matiere" class="" required>
                    @isset($matieres)
                    @foreach($matieres as $matiere)
                            <option value="{{$matiere->matiere}}">{{$matiere->matiere}}</option>
                        @endforeach
                        @endisset
                    </select>
                    <label style="color: green;">Date d'adhesion</label>
                  <input type="date" name="adhesion" placeholder="Annee d'adhesion" />
                  <input type="hidden" name="role" value="enseignant" />
                  <div id="modal-buttons">
                    <button class="submit-button" type="submit">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                    <button class="reset-button" type="reset" onclick="modal_close()">Fermer</button>
                  </div>
                </form>
              </div>
            </li>
            </ul>
          </li>
          <li class="nav-item">
          @if(Auth::user()->role != 'enseignant' && Auth::user()->role != 'etudiant')
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Paramètres
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            @endif
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link" id="open-btnanneeuniv"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Année Universitaire</p></a>
                <div class="modal-containeranneeuniv">
                  <div class="modalm">
                  <h2 class="modal-titlem text-center">Ajouter Année universitaire</h2>
                  <form method="POST" action="{{route('anneeuniversitaire')}}" name="login_form">
                  @csrf
                  <input type="text" name="anneeuniversitaire" class="mt-4" placeholder="Saisir nouvelle Année Univ ici!" />
                    <div class="close-wrapm mt-5">
                    <button type="submit" style="border-radius: 10px; width: 70px; background:  green;">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                    </form>
                    <button type="buttonm" id="close-btnanneeuniv" style="background:  red;">Fermer</button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
              <a  class="nav-link" id="open-btncycle"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;cursor: pointer;">Cycles</p></a>
                <div class="modal-containercycle">
                  <div class="modalm">
                  <h2 class="modal-titlem text-center">Ajouter Cycle</h2>
                  <form method="POST" action="{{route ('cycle')}}" name="login_form">
                  @csrf
                  <input type="text" name="cycle" class="mt-4" placeholder="Saisir nouveau cycle ici!" />
                    <div class="close-wrapm mt-5">
                    <button type="submit" style="border-radius: 10px; width: 70px; background:  green;">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                    </form>
                    <button type="buttonm" id="close-btncycle" style="background:  red;">Fermer</button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link" id="open-btnm"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Filières</p></a>
                <div class="modal-containerm">
                  <div class="modalm">
                  <h2 class="modal-titlem text-center">Ajouter Filières</h2>
                  <form method="POST" action="{{route('filiere')}}" name="login_form">
                  @csrf
                  <input type="text" class="mt-4" name="filiere" placeholder="Saisir nouvelle filière ici!" />
                    <div class="close-wrapm mt-5">
                    <button type="buttonm" style="border-radius: 10px; width: 70px; background:  green;">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                  </form>
                    <button type="buttonm" id="close-btnm" style="background:  red;">Fermer</button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link" id="open-btnniveau"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Niveaux d'étude</p></a>
                <div class="modal-containerniveau">
                  <div class="modalm">
                  <h2 class="modal-titlem text-center">Ajouter Niveau d'étude</h2>
                  <form method="POST" action="{{route('niveauetude')}}" name="login_form">
                  @csrf
                  <input type="text" class="mt-4" name="niveauetude" placeholder="Saisir niveau d'étude ici!" />
                    <div class="close-wrapm mt-5">
                    <button type="buttonm" style="border-radius: 10px; width: 70px; background:  green;">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                  </form>
                    <button type="buttonm" id="close-btnniveau" style="background:  red;">Fermer</button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link" id="open-btnnational"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Nationalités</p></a>
                <div class="modal-containernational">
                  <div class="modalm">
                  <h2 class="modal-titlem text-center">Ajouter nationalités</h2>
                  <form method="POST" action="{{route('nationalite')}}" name="login_form">
                  @csrf
                  <input type="text" class="mt-4" name="nationalite" placeholder="Saisir nouvelle nationalité ici!" />
                    <div class="close-wrapm mt-5">
                    <button type="buttonm" style="border-radius: 10px; width: 70px; background:  green;">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                  </form>
                    <button type="buttonm" id="close-btnnational" style="background:  red;">Fermer</button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link" id="open-btngenre"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Genres</p></a>
                <div class="modal-containergenre">
                  <div class="modalm">
                  <h2 class="modal-titlem text-center">Ajouter genre</h2>
                  <form method="POST" action="{{route('genre')}}" name="login_form">
                  @csrf
                  <input type="text" class="mt-4" name="genre" placeholder="Saisir nouveau genre ici!" />
                    <div class="close-wrapm mt-5">
                    <button type="buttonm" style="border-radius: 10px; width: 70px; background:  green;">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                  </form>
                    <button type="buttonm" id="close-btngenre" style="background:  red;">Fermer</button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link" id="open-btnsemestre"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Sémètres</p></a>
                <div class="modal-containersemestre">
                  <div class="modalm">
                  <h2 class="modal-titlem text-center">Ajouter sémèstres</h2>
                  <form method="POST" action="{{route('semestre')}}" name="login_form">
                  @csrf
                  <input type="text" class="mt-4" name="semestre" placeholder="Saisir nouveau sémèstre ici!" />
                    <div class="close-wrapm mt-5">
                    <button type="buttonm" style="border-radius: 10px; width: 70px; background:  green;">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                  </form>
                    <button type="buttonm" id="close-btnsemestre" style="background:  red;">Fermer</button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link" id="open-btnmatiere"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Matières</p></a>
                <div class="modal-containermatiere">
                  <div class="modalm">
                  <h2 class="modal-titlem text-center">Ajouter Matières</h2>
                  <form method="POST" action="{{route('matiere')}}">
                  @csrf
                  <input type="text" class="mt-4" name="matiere" placeholder="Saisir nouvelle matière ici!" />
                    <div class="close-wrapm mt-5">
                    <button type="buttonm" style="border-radius: 10px; width: 70px; background:  green;">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                  </form>
                    <button type="buttonm" id="close-btnmatiere" style="background:  red;">Fermer</button>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link" id="open-btnrole"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Roles</p></a>
                <div class="modal-containerrole">
                  <div class="modalm">
                  <h2 class="modal-titlem text-center">Ajouter Roles</h2>
                  <form method="POST" action="{{route('role')}}">
                  @csrf
                  <input type="text" class="mt-4" name="role" placeholder="Saisir nouveau role ici!" />
                    <div class="close-wrapm mt-5">
                    <button type="buttonm" style="border-radius: 10px; width: 70px; background:  green;">Save</button>
                    <button id="button2id" style="border-radius: 10px; width: 70px; background:  orange;"  type="reset">Annuler</button>
                  </form>
                    <button type="buttonm" id="close-btnrole" style="background:  red;">Fermer</button>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Listes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              @if(Auth::user()->role != 'enseignant' && Auth::user()->role != 'admin' && Auth::user()->role != 'etudiant')
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Admin.s</p>
                </a>
                @endif
              </li>
              <li class="nav-item">
                <!-- doit rediriger vers modal ou on saisi cycle, filiere, niveau-enseigner, annee-adhesion, -->
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Enseignant.e.s</p>
                </a>
              </li>
              <li class="nav-item">
                <!-- doit rediriger vers modal ou on saisi cycle,filiere,annee-univ,niveau pour afficher la liste des etudiant correspondant -->
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Etudiant.e.s</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Bulletins/Notes</p>
            </a>
          </li>
          <li class="nav-item">
          @if(Auth::user()->role != 'etudiant')
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p> Add notes</p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-ban"></i>
              <p> Déconnexion </p>
            </a>
          </li>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>
        </ul>
        <a href="https://www.ujkz.bf"><img src="dist/img/UJKZ-arriere.png" alt="UJKZ Logo" width="100" height="100" class="brand-image img-circ elevation-3" style="margin-left:65px!important; margin-top:20px!important;" /></a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="">
  @yield('page-content')
  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2022-2023 <a href="https://www.ujkz.bf/" style="color: white;text-decoration:none;">Université Joseph Ki-Zerbo</a>.</strong>
    Tous droit reservés.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/appli.js"></script>
<script src="bootstrap/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
<!-- <script src="bootstrap/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
