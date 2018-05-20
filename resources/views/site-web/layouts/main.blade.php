<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"  prefix="og: http://ogp.me/ns#">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Isole habitat : Isolation des logement - @yield('pageTitle')</title>
        <meta name="description" content="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:url"           content="https://isole-habitat.fr" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Isoler votre maison pour 1€" />
        <meta property="og:description"   content="Profitez du programme d'isolation à 1€ et économisez jusqu'à 30% sur votre facture de chauffage. Isolations des combles, garages et caves." />
        <meta property="og:locale"        content="fr_FR" />
        <meta property="og:image"         content="{{ asset('images/image-facebook-share.jpg') }}" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@isolehabitat">
        <meta name="twitter:title" content="Isoler votre maison pour 1€">
        <meta name="twitter:description" content="Profiter du programme d'isolation à 1€ et économisez jusqu'à 30% sur votre facture de chauffage. Isolations des combles, garages et caves.">
        <meta name="twitter:image" content="{{ asset('images/image-facebook-share.jpg') }}">
        <meta name="twitter:image:width" content="640">
        <meta name="twitter:image:height" content="360">


        <link rel="shortcut icon" href="images/favicon.ico">

        <title>Isole-habitat | Isolation de votre maison pour 1€</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/nar0gtx.css') }}">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Owl Carousel CSS -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

        <!-- Owl Carousel CSS -->
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

        <!-- Icon CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="{{ ('css/icons.css') }}" rel="stylesheet">
        <!-- Toastr CSSasset -->
        <link href="{{ asset('plugins/toastr/toastr.css') }}" rel="stylesheet">
        <!-- SweetAlert2 CSS -->
        <link href="{{ asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('isolation-crm/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <!-- Wizard CSS -->
        <link href="{{ asset('plugins/wizard/assets/css/material-bootstrap-wizard.css') }}" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <script type="text/javascript" src="{{ asset('js/modernizr.min.js') }}"></script>


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-N97HNP2');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body  class="@yield('pageClass')">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N97HNP2"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        <!-- Navbar -->
        <header>
            <nav id='cssmenu'>
                <div class="container-nav d-flex justify-content-around">
                    <div class="logo"><a href="{{ route('site-web.accueil') }}"><img id="logo" src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat"></a></div>
                    <div id="head-mobile"></div>
                    <div class="button"></div>
                    <ul>
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('site-web.accueil') }}">ACCUEIL</a></li>
                        <li class="{{ Request::is('isolation-des-combles') ? 'active' : '' }}"><a href="{{ route('site-web.isolation-combles') }}">L'ISOLATION DES COMBLES</a></li>
                        <li class="{{ Request::is('qui-sommes-nous') ? 'active' : '' }}"><a href="{{ route('site-web.societe') }}">QUI SOMMES-NOUS?</a></li>
                        <li id="phone-link"><i class="fa fa-phone mr-10"></i><a href="tel:01 76 50 88 50"><span>01 76 50 88 50</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid" id="ribbon-formulaire">
                <div class="row justify-content-md-center align-items-md-center">
                    <h4 class="gras_300" data-color="blanc"><span data-color="orange">Votre intérieur frais et agréable en été :</span> Profitez de votre isolation pour 1€</h4>
                    <a href="#" id="btn-formulaire-ribbon" class="btn btn-rounded btn-vert btn-formulaire ml-20">Testez votre éligibilité</a>
                </div>
            </div>
        </header>


        <div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="{{ asset('images/assistance-telephonique.jpg') }}" class="assistace_phone_img rounded-circle" alt="Demande assistace telephonique isole habitat">
                        <div>
                            <p class="text-center gras_500 text_intro">Besoin de conseils pour l'isolation de votre maison et pour pouvoir bénéficier du programme à 1€?</p>
                            <h4 class="text-center" data-color="orange"><i class="ion-ios7-telephone mr-10"></i>Nous vous rappelons</h4>
                            <p class="text-center">En moins de 24 heures</p>
                        </div>
                    </div>
                    <form id="phoneFormModal">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <input type="radio" class="radio" name="rappel_civilite" id="civ_M" required="required" value="monsieur" checked>
                                    <label for="civ_M" class="civilite">Monsieur</label>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <input type="radio" class="radio" name="rappel_civilite" id="civ_Mme" required="required" value="madame">
                                    <label for="civ_Mme" class="civilite">Madame</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="rappel_nom" Placeholder="Nom">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control telephone_input" name="rappel_telephone" maxlength="14" Placeholder="N° Mobile ou Fixe">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-30">
                                <h5 class="text-center">Selectionnez vos disponibilités:</h5>
                                <div class="row mt-20">
                                    <div class="col-6 col-md-3 block-heure">
                                        <input type="radio" class="radio" name="rappel_heure_modal" id="modal_type_heure-1" value="9h-12h" checked>
                                        <label for="modal_type_heure-1" class="type-heure">9h-12h</label>
                                    </div>
                                    <div class="col-6 col-md-3 block-heure">
                                        <input type="radio" class="radio" name="rappel_heure_modal" id="modal_type_heure-2" value="12h-14h">
                                        <label for="modal_type_heure-2" class="type-heure">12h-14h</label>
                                    </div>
                                    <div class="col-6 col-md-3 block-heure">
                                        <input type="radio" class="radio" name="rappel_heure_modal" id="modal_type_heure-3" value="14h-18h">
                                        <label for="modal_type_heure-3" class="type-heure">14h-18h</label>
                                    </div>
                                    <div class="col-6 col-md-3 block-heure">
                                        <input type="radio" class="radio" name="rappel_heure_modal" id="modal_type_heure-4" value="18-20h">
                                        <label for="modal_type_heure-4" class="type-heure">18h-20h</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{--<input type="submit" id="btn_phone_modal" class="btn btn-rounded btn-orange" value="Me rappeler">--}}
                            <button type="button" id="btn_phone_modal" class="btn btn-rounded btn-orange">Me rappeler</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {{--<a href="#" class="btn btn-orange popup_aide" data-toggle="modal" data-target="#phoneModal" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">Besoin de conseils <i class="ion-help"></i></a>--}}
    <!--Formulaire éligibilité overlay-->
    {{--<div class="image-container set-full-height" style="background-image: url('plugins/wizard/assets/img/wizard-city.jpg')">
        <a href="" class="close-overlay">&times;</a>--}}
    @include('site-web.layouts.formulaire-overlay')
    {{--</div>--}}
    <!--End Formulaire éligibilité overlay-->
    <div class="wrapper-content">
        @yield('content')
        <section class="section" id="section-social-share">
            <div class="row justify-content-center">
                <div class="text-center">
                    <h2 data-color="vert">Participer à l'amélioration des habitats</h2>
                    <h3>Faîtes profiter votre famille et vos amis de l'isolation à 1€</h3>
                    <h4 class="mt-20 mb-30" data-color="orange">Partager notre programme</h4>
                    <img src="{{ asset('images/programme-isolation6.png') }}" alt="Programme isolation à 1€">
                    <div class="mt-30">
                        <button type="button" role="button" target="_blank" id="share_facebook" class="btn btn-facebook waves-effect waves-light share_facebook">
                            <i class="fa fa-facebook m-r-5"></i> Facebook
                        </button>

                        {{--<button type="button" role="button" class="btn btn-twitter waves-effect waves-light share_twitter">
                            <i class="fa fa-twitter m-r-5"></i> Twitter
                        </button>--}}

                        {{--<button type="button" class="btn btn-googleplus waves-effect waves-light share_gplus">
                            <i class="fa fa-google-plus m-r-5"></i> Google+
                        </button>--}}
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section-presentation2" data-background-color="">
            <div class="container">
                <div class="row align-items-end justify-content-center mb-40">
                    <div class="">
                        <h2 class="text-center ml-10"><span data-color="vert">Isole </span><span class="text-habitat" data-color="orange">HABITAT </span>utilise des matériaux d'isolation <span class="gras_500" data-color="vert">écocologiques et certifiés.</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('images/knauf.svg') }}" class="logo-materiel-iso" alt="logo-knauf-isolation">
                    </div>
                    <div class="col">
                        <img src="{{ asset('images/isover.svg') }}" class="logo-materiel-iso" alt="logo-isover-isolation">
                    </div>
                    <div class="col">
                        <img src="{{ asset('images/ursa.svg') }}" class="logo-materiel-iso" alt="logo-ursa-isolation">
                    </div>
                    <div class="col">
                        <img src="{{ asset('images/saint-gobin.svg') }}" class="logo-materiel-iso" alt="logo-saint-gobin-isolation">
                    </div>
                    <div class="col">
                        <img src="{{ asset('images/rockwool2.svg') }}" class="logo-materiel-iso" alt="logo-rockwool-isolation">
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img id="logo-footer" src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat">
                        <p data-color="bleue-clair">Isole Habitat est un service du groupe PRESTA HABITAT, société experte dans l'isolation des habitats et la transition énergétique.</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="liens-footer">
                            <li><a href="{{ route('site-web.isolation-combles') }}">L'isolation des combles</a></li>
                            {{--<li><a href="#">L'isolation des murs</a></li>--}}
                            {{--<li><a href="#">L'isolation des caves et garges</a></li>--}}
                            <li><a href="{{ route('site-web.societe') }}">Qui sommes-nous?</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="">
                                <i class="ion-ios7-help-outline"></i><p class="besoin-aide">Besoin de conseils?</p>
                            </div>
                            <button class="btn btn-orange btn-rounded"><i class="fa fa-phone mr-10"></i><a href="tel:01 76 50 88 50"><span>01 76 50 88 50</span></a></button>
                            <p class="mt-10" data-color="bleue-clair" ">Lundi-vendredi   9h-20h</p>
                            {{--<ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>--}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="text-muted copyright">© 2018. Tous droits réservés Presta Habitat.</p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- End Footer -->
    </div>

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="fa fa-angle-up"></i> </a>


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--  Plugin for the Wizard -->
    <script src="{{ asset('plugins/wizard/assets/js/jquery.bootstrap.js') }}" type="text/javascript"></script>
    <!--  Plugin for the Wizard -->
    <script src="{{ asset('plugins/wizard/assets/js/material-bootstrap-wizard.js') }}"></script>
    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="{{ asset('plugins/wizard/assets/js/jquery.validate.min.js') }}"></script>

        <!-- Jquery easing -->
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- Toastr -->
        <script type="text/javascript" src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
        <!-- Sweet alert -->
        <script type="text/javascript" src="{{ asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
        <!-- Notification -->
        <script type="text/javascript" src="{{ asset('plugins/bootstrap-notify-master/bootstrap-notify.min.js') }}"></script>
        <!--  Plugin for the Wizard -->
        <!-- My custom-->
        <script type="text/javascript" src="{{ asset('js/custom2.js') }}"></script>
        <!--common script for all pages-->
        <script src="{{ asset('js/jquery.app.js') }}"></script>
    <script>
            /*Popup "besoin de conseils"  avec submit "rappel"*/
            $('#btn_phone_modal').click(function () {
                var x = document.querySelector('#phoneFormModal');
                var data = $('#phoneFormModal').serializeArray();
                var submitButton = document.querySelector('#btn_phone_modal');
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'post',
                    url: '{{ route('site-web.rappel-web') }}',
                    data: data,
                    dataType: 'JSON'
                })
                .done(function(response){
                    $('#phoneModal').modal('hide');
                    swal({
                    text: "<h4 class='mt-20 mb-20' data-color='orange'>Votre demande a été prise en compte</h4><p>Un conseiller isolation vous rappellera rapidement</p><p><strong data-color='orange'>Entre " + response.heureRappel + "</strong></p>",
                    timer: 3000,
                    showConfirmButton: false
                    });
                })
                .fail(function(data) {
                    $.each(data.responseJSON, function(index, val) {
                        var input = $("input[name='" + index + "']");
                        input.addClass('active');
                        //submitButton.setAttribute('diseabled');
                        setTimeout(function(){
                        input.removeClass('active');
                        //submitButton.removeAttribute('diseabled');
                        }, 3000);
                        $.notify({
                            // options
                            icon: 'glyphicon glyphicon-warning-sign',
                                message: 'Turning standard Bootstrap alerts into "notify" like notifications'

                        },{
                            // settings
                            element: 'body',
                            position: null,
                            type: "danger",
                            allow_dismiss: false,
                            newest_on_top: false,
                            showProgressbar: false,
                            placement: {
                            from: "top",
                            align: "center"
                            },
                            offset: 100,
                            spacing: 20,
                            z_index: 1061,
                            delay: 500,
                            timer: 1000,
                            url_target: '_blank',
                            mouse_over: null,
                            animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                            },
                            onShow: function(){
                                setTimeout(function(){
                                // enable click after 1 second
                                $('#btn_phone_modal').prop('disabled',false);
                                },5000);
                            },
                            onShown: null,
                            onClose: null,
                            onClosed: null,
                            icon_type: 'class',
                            template: '<div data-notify="container" class="col-xs-10 col-sm-3 alert alert-{0}" role="alert" data-background-color="orange">' +
                                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                                '<span data-notify="icon"></span> ' +
                                '<span data-notify="title">{1}</span> ' +
                                '<span class="text-white mt-20 mb-20" data-notify="message">'+ val + '</span>' +
                                '<div class="progress" data-notify="progressbar">' +
                                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                '</div>'
                        });
                    });
                })
            });




    </script>
    @yield('javascript')
    </body>
</html>