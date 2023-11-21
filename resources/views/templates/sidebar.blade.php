<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);
?>
<div class="sidebar">
    <div class="user-panel d-flex">
    </div>
    <nav class="mt-2 sidebarnav">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <a href="{{ route('home') }}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Accueil</p>
                </a>
            </li>
            <li class="nav-item">
                @if (Auth::user()->role != 'enseignant' && Auth::user()->role != 'etudiant')
                    <a style="cursor: pointer;" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Comptes<i class="fas fa-angle-right right"></i></p>
                    </a>
                @endif
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        @if (Auth::user()->role != 'admin' && Auth::user()->role != 'enseignant' && Auth::user()->role != 'etudiant')
                            <a href="{{ route('admin.index') }}" class="nav-link">
                                <i class="far fa-user nav-icon" style="color: orange;"></i>
                                <p style="color: orange;">Admin</p>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('enseignant') }}" class="nav-link">
                            <i class="far fa-user nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Enseignant.e.s</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('Eleve.index') }}" class="nav-link">
                            <i class="far fa-user nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Etudiant</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tuteur.create') }}" class="nav-link">
                            <i class="far fa-user nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Tuteur</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                @if (Auth::user()->role != 'etudiant')
                    <a style="cursor: pointer;" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>Gestion notes<i class="fas fa-angle-right right"></i></p>
                    </a>
                @endif
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('classe') }}" class="nav-link">
                            <i class="fa fa-users nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Classe</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="fa fa-book nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Liste des notes</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>Bulletins</p>
                </a>
            </li>
            <li class="nav-item">
                @if (Auth::user()->role != 'etudiant')
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Messagerie</p><i class="fas fa-angle-right right"></i></p>
                    </a>
                @endif
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="fa fa-users nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Par classe</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="far fa-user nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Individuel</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                @if (Auth::user()->role != 'enseignant' && Auth::user()->role != 'etudiant')
                    <a style="cursor: pointer;" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Paramètres<i class="right fas fa-angle-right"></i></p>
                    </a>
                @endif
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('anneeuniversitaire') }}" class="nav-link"><i class="far fa-circle nav-icon"
                                style="color: orange;"></i>
                            <p style="color: orange;">Année Universitaire</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cycle') }}" class="nav-link"><i class="far fa-circle nav-icon"
                                style="color: orange;"></i>
                            <p style="color: orange;">Cycle</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('filiere') }}" class="nav-link"><i class="far fa-circle nav-icon"
                                style="color: orange;"></i>
                            <p style="color: orange;">Filières</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('niveauetude') }}" class="nav-link"><i class="far fa-circle nav-icon"
                                style="color: orange;"></i>
                            <p style="color: orange;">Niveau d'étude</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('nationalite') }}" class="nav-link"><i class="far fa-circle nav-icon"
                                style="color: orange;"></i>
                            <p style="color: orange;">Nationalité</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('genre') }}" class="nav-link"><i class="far fa-circle nav-icon"
                                style="color: orange;"></i>
                            <p style="color: orange;">Genre</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('semestre') }}" class="nav-link"><i class="far fa-circle nav-icon"
                                style="color: orange;"></i>
                            <p style="color: orange;">Sémèstre</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('matiere') }}" class="nav-link"><i class="far fa-circle nav-icon"
                                style="color: orange;"></i>
                            <p style="color: orange;">Matières</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a style="cursor: pointer;" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Utilisateurs<i class="fas fa-angle-right right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        @if (Auth::user()->role != 'enseignant' && Auth::user()->role != 'admin' && Auth::user()->role != 'etudiant')
                            <a href="{{ route('adminliste') }}" class="nav-link">
                                <i class="far fa-user nav-icon" style="color: orange;"></i>
                                <p style="color: orange;">Admin</p>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('Eleve.create') }}" class="nav-link">
                            <i class="far fa-user nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Etudiant</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('enseignant') }}" class="nav-link">
                            <i class="far fa-user nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Enseignant</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tuteur.index') }}" class="nav-link">
                            <i class="far fa-user nav-icon" style="color: orange;"></i>
                            <p style="color: orange;">Tuteur</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" style="position: fixed; bottom:0; z-index:11;">
                <a href="{{ route('logout') }}" class="nav-link decon"
                    onclick="event.preventDefault();
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
    </nav>
</div>
