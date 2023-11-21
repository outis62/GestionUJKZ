<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BULLETIN-UNIV</title>
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/datatable/datatable.min.css') }}">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('templates.header')
        <aside class="main-sidebar sidebar-secondary elevation-4">
            <a href="/" class="brand-link text-decoration-none">
                <h5 class="text-white fw-bold text-center ms-5 mt-4">BULLETIN-UNIV</h5>
                <a href="https://www.ujkz.bf"><img src="dist/img/UJKZ-arriere.png" alt="UJKZ Logo" width="50"
                        height="50" class="brand-image img-circ elevation-3"
                        style="margin-left:10px!important; margin-top:20px!important;" /></a>
            </a>
            @include('templates.sidebar')
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    </div>
                </div>
            </div>
            <div>
                @yield('page-content')
            </div>
        </div>
        @include('templates.footer')
        <script type="text/javascript" src="{{ asset('dist/js/JQuery.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('dist/js/datatable/datatable.min.js') }}"></script>
        <script src="{{ asset('dist/js/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('dist/js/appli.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#enseignant').DataTable();
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $("#enseignant").DataTable({
                    responsive: true,
                    //changer le message de la pagination
                    "language": {
                        "paginate": {
                            "previous": "Précédent",
                            "next": "Suivant"
                        },
                        "search": "Rechercher",
                        "lengthMenu": "Afficher _MENU_ éléments",
                        "zeroRecords": "Aucun élement trouvé",
                        "info": "Page _PAGE_ sur _PAGES_",
                    }

                });
            });
        </script>
</body>

</html>
