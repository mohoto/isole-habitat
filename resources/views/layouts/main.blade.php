<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="images/favicon.ico">

    <title>UBold | Bootstrap Landing Template</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/nar0gtx.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Icon CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body data-spy="scroll" data-target="#navbar-menu" class="@yield('pageClass')">
<!-- Navbar -->
<nav class="navbar navbar-custom navbar-expand-lg navbar-light">
    <div class="navbar-block d-flex align-items-end">
        <a class="navbar-brand logo" href="{{ route('site-web.accueil') }}"><img id="logo" src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsMenu" aria-controls="navbarsMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-end" id="navbarsMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Accueil</a>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#features">Les travaux d'isolation</a>
                    {{--<ul class="submenu">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>--}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Qui sommes-nous?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#clients">Des questions?</a>
                </li>
                {{--<li class="nav-item">
                    <a href="" class="btn btn-custom navbar-btn"><i class="fa fa-phone m-r-5"></i> <span>01 45 67 78 00</span> </a>
                </li>--}}
            </ul>
        </div>
        <div class="navbar-phone">
            <a href="" class="btn btn-custom navbar-btn"><i class="fa fa-phone m-r-5"></i> <span>Me rappeler</span></a>
        </div>
    </div>
</nav>
<!-- End navbar-custom -->
{{--<button class="olark-launch-button olark-size-md" tabindex="0" role="button" aria-hidden="false" data-reactid=".0.3">
    <svg x="0px" y="0px" viewBox="0 0 27 21.9" aria-label="three small dots to indicate that an agent is available to chat" role="img" data-reactid=".0.3.0">
        <title data-reactid=".0.3.0.0">Chat Icon </title>
        <desc data-reactid=".0.3.0.1">three small dots to indicate that an agent is available to chat</desc>
        <path fill="#ffffff" d="M23.2,0L2.6,1.7C1,1.9,0,3.2,0,4.9v8c0,1.6,0.8,3,2.4,3.1l5.3,0.5c0,0,1,1.6,0.3,3.2C7.2,21.3,6,21.9,6,21.9 c4.2,0,6.6-3.1,7.8-4.9l9.4,0.7c1.8,0.2,3.8-1.3,3.8-3.1V3.1C27,1.3,25-0.1,23.2,0z M6.4,10.1c-0.9,0-1.7-0.7-1.7-1.7 c0-0.9,0.7-1.7,1.7-1.7C7.3,6.8,8,7.5,8,8.5C8,9.4,7.3,10.1,6.4,10.1z M13.2,10.1c-0.9,0-1.7-0.7-1.7-1.7c0-0.9,0.7-1.7,1.7-1.7 c0.9,0,1.7,0.7,1.7,1.7C14.8,9.4,14.1,10.1,13.2,10.1z M19.9,10.1c-0.9,0-1.7-0.7-1.7-1.7c0-0.9,0.7-1.7,1.7-1.7 c0.9,0,1.7,0.7,1.7,1.7C21.6,9.4,20.9,10.1,19.9,10.1z" data-reactid=".0.3.0.2">
        </path>
    </svg>
    <div class="olark-notification-badge olark-hidden" data-reactid=".0.3.1">
        <div class="olark-notification-badge-text" data-reactid=".0.3.1.0">0
        </div>
    </div>
    <div class="olark-button-text" data-reactid=".0.3.2">Des conseils?</div>
</button>--}}
@yield('content')
<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img id="logo-footer" src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat">
                <p data-color="bleue-clair">Isole Habitat est une marque déposée du groupe R.S.I (Rénovation Sécurité Intérieur). Société experte dans le domaine du Batiment.</p>
            </div>
            <div class="col-md-4">
                <ul class="liens-footer">
                    <li><a href="#">L'isolation des combles à 1 euro</a></li>
                    <li><a href="#">L'isolation des murs à 1 euro</a></li>
                    <li><a href="#">L'isolation des sols à 1 euro</a></li>
                    <li><a href="#">Qui sommes-nous</a></li>
                    <li><a href="#">Mentions légales</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center">
                    <div class="">
                        <i class="ion-ios7-help-outline"></i><p class="besoin-aide">Besoin d'assistance?</p>
                    </div>
                    <button type="button" class="btn btn-orange  btn-rounded waves-effect waves-light">
                        <i class="ion-ios7-telephone mr-10"></i>
                        <span>01 78 56 03 03</span>
                    </button>
                    <p class="mt-10" data-color="bleue-clair" ">Lundi-vendredi  9h-19h</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <p class="text-muted copyright">© 2018. Tous droits réservés R.S.I.</p>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</footer>
<!-- End Footer -->


<!-- Back to top -->
<a href="#" class="back-to-top" id="back-to-top"> <i class="fa fa-angle-up"></i> </a>


<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Jquery easing -->
<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!-- My custom-->
<script type="text/javascript" src="js/custom.js"></script>
<!--common script for all pages-->
<script src="js/jquery.app.js"></script>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        autoplay: false,
        autoplayTimeout: 4000,
        responsive:{
            0:{
                items:1
            }
        }
    })
</script>
</body>
</html>