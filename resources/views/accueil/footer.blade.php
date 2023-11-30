<style>
    /* Footer */
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    #footer {
        padding: 10px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #footer {
        background: #2e3267 !important;
    }

    #footer h5 {
        padding-left: 10px;
        border-left: 3px solid #eeeeee;
        padding-bottom: 6px;
        margin-bottom: 0px;
        color: #ffffff;
    }

    #footer a {
        color: #ffffff;
        text-decoration: none !important;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    #footer ul.social li {
        padding: 3px 0;
    }

    #footer ul.social li a i {
        margin-right: 5px;
        font-size: 25px;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.social li:hover a i {
        font-size: 30px;
        margin-top: -10px;
    }

    #footer ul.social li a,
    #footer ul.quick-links li a {
        color: #ffffff;
    }

    #footer ul.social li a:hover {
        color: #eeeeee;
    }

    #footer ul.quick-links li {
        padding: 3px 0;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.quick-links li:hover {
        padding: 3px 0;
        margin-left: 8px;
        font-weight: 400;
    }

    #footer ul.quick-links li a i {
        margin-right: 5px;
    }

    #footer ul.quick-links li:hover a i {
        font-weight: 100;
    }

    .versiune1 {
        font-size: 15px;
        margin-top: 5px;
    }

    @media (max-width:767px) {
        #footer h5 {
            padding-left: 0;
            border-left: transparent;
            padding-bottom: 0px;
            margin-bottom: 10px;
        }
    }
</style>
<section class="container-fluid" id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="javascript:void();"><img src="{{ asset('dist/img/logobu2.png') }}" width="100" height="100"
                        alt="LogoBU"></a>
                <p class="text-white">La technologie au service de l'éducation.</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5 class="fw-bold" style="color: lightseagreen;">Avantages</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Gestion centralisée</a>
                    </li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Suivi mobile</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Notification</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>?</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5 class="fw-bold" style="color: lightseagreen;">Contact</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>TEL :</a></li>
                    <p class="text-white">25 00 00 00</p>
                    <p class="text-white">75 00 00 01</p>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Email:</a></li>
                    <p class="text-white">bulletin-univ@ujkz.edu</p>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <hr>
                {{-- Powered by <a href="javascript:void();">Simplon Burkina Faso</a> P04® <br> --}}
                Copyright &copy 2023 <a href="javascript:void();">{{ config('app.name') }}.</a>Tous droits réservés.
            </div>
            </hr>
        </div>
    </div>
</section>
