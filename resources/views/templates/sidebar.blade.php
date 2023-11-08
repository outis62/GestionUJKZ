<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>
          <li class="nav-item">
          @if(Auth::user()->role != 'enseignant' && Auth::user()->role != 'etudiant')
            <a style="cursor: pointer;" class="nav-link">
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
              <a href="{{route('admin.index')}}" class="nav-link">
              <i class="far fa-user nav-icon" style="color: orange;"></i>
              <p style="color: orange;">Admin.s</p>
              </a>
            @endif
              </li>
              <li class="nav-item">
                <a href="{{route ('etudiantsave.index')}}" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Etudiant.e.s</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('enseignant')}}" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Enseignant.e.s</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          @if(Auth::user()->role != 'enseignant' && Auth::user()->role != 'etudiant')
            <a style="cursor: pointer;" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Paramètres
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            @endif
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('anneeuniversitaire')}}" class="nav-link"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Année Universitaire</p></a>
              </li>
              <li class="nav-item">
              <a href="{{route('cycle')}}" class="nav-link"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Cycle</p></a>
              </li>
              <li class="nav-item">
              <a href="{{route('filiere')}}" class="nav-link"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Filières</p></a>
              </li>
              <li class="nav-item">
              <a href="{{route('niveauetude')}}" class="nav-link"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Niveau d'étude</p></a>
              </li>
              <li class="nav-item">
              <a href="{{route('nationalite')}}" class="nav-link"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Nationalité</p></a>
              </li>
              <li class="nav-item">
              <a href="{{route('genre')}}" class="nav-link"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Genre</p></a>
              </li>
              <li class="nav-item">
              <a href="{{route('semestre')}}" class="nav-link"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Sémèstre</p></a>
              </li>
              <li class="nav-item">
              <a href="{{route('matiere')}}" class="nav-link"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Matières</p></a>
              </li>
              <li class="nav-item">
              <a href="{{route('role')}}" class="nav-link"><i class="far fa-circle nav-icon" style="color: orange;"></i><p style="color: orange;">Roles</p></a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Listes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              @if(Auth::user()->role != 'enseignant' && Auth::user()->role != 'admin' && Auth::user()->role != 'etudiant')
                <a href="{{route('adminliste')}}" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Admin.s</p>
                </a>
                @endif
              </li>
              <li class="nav-item">
                <!-- doit rediriger vers modal ou on saisi cycle,filiere,annee-univ,niveau pour afficher la liste des etudiant correspondant -->
                <a href="{{route('store')}}" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Etudiant.e.s</p>
                </a>
              </li>
              <li class="nav-item">
                <!-- doit rediriger vers modal ou on saisi cycle,filiere,annee-univ,niveau pour afficher la liste des etudiant correspondant -->
                <a href="{{route('enseignant')}}" class="nav-link">
                  <i class="far fa-user nav-icon" style="color: orange;"></i>
                  <p style="color: orange;">Enseignant.e.s</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          @if(Auth::user()->role != 'etudiant')
            <a href="{{route('classe')}}" class="nav-link <?=$page == "classe" ? 'active bg-gradient-primary' : '';?>">
              <i class="nav-icon fas fa-plus"></i>
              <p>Notes</p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Bulletins</p>
            </a>
          </li>
          <li class="nav-item">
          @if(Auth::user()->role != 'etudiant')
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p> Messagerie</p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link decon" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off"></i>
              <p class="fw-bold"> Déconnexion </p>
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
