<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">

    <link href="{{ asset('css/custombox.css')}}" rel="stylesheet">

    <!-- App css -->
    <link href="{{ asset('isolation-crm/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/plugins/toastr/toastr.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/plugins/notifications/notification.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/css/style.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('isolation-crm/js/modernizr.min.js')}}"></script>

</head>
<body class="@yield('pageClass')">
<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">
            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <!--<a href="index.html" class="logo">-->
                <!--UBold-->
                <!--</a>-->
                <!-- Image Logo -->
                <a href="{{ route('crm.accueil') }}" class="logo">
                    <img src="{{ asset('isolation-crm/images/Isole-Habitat-logo.svg')}}" alt="" class="logo-lg">
                    <img src="{{ asset('isolation-crm/images/logo_sm.png')}}" alt="" height="24" class="logo-sm">
                </a>
            </div>
            <!-- End Logo container-->
            {{--<div class="menu-extras topbar-custom">
                <ul class="list-inline float-right mb-0">
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-pink noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                            </div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                            </a>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                View All
                            </a>
                        </div>
                    </li>
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>--}}
            <!-- end menu-extras -->
            <div class="clearfix"></div>
        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->
    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu d-flex">
                    <li class="has-submenu sub-navigation-menu">
                        <a href="{{ route('crm.lead-web') }}"><i class="fa fa-dashboard"></i>Administration</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu">
                        <a href="{{ route('crm.lead-web') }}"><i class="fa fa-wpforms"></i>Formulaire web</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu">
                        <a href="{{ route('crm.lead-rappel-web') }}"><i class="fa fa-volume-control-phone"></i>Rappel Tel web</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu">
                        <a href="{{ route('crm.lead-demarchage') }}"><i class="fa fa-user-circle-o"></i>Clients Démarchage</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu">
                        <a href="{{ route('crm.lead-previsite') }}"><i class="fa fa-calculator"></i>Pré-viste à faire</a>
                    </li>
                    <li class="has-submenusub-navigation-menu">
                        <a href="#"><i class="fa fa-calendar-check-o"></i>Chantier validée</a>
                        <ul class="submenu">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->

@yield('content')

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                © 2018 - Presta Habitat
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- jQuery  -->
<script src="{{ asset('isolation-crm/js/jquery.min.js')}}"></script>
<script src="{{ asset('isolation-crm/js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
<script src="{{ asset('isolation-crm/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('isolation-crm/js/waves.js')}}"></script>
<script src="{{ asset('isolation-crm/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('isolation-crm/js/jquery.scrollTo.min.js')}}"></script>

<!-- Modal-Effect -->
<script src="{{ asset('isolation-crm/plugins/custombox/js/custombox.min.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/custombox/js/legacy.min.js')}}"></script>
<!-- switchery radio custom -->
<script src="{{ asset('isolation-crm/plugins/switchery/js/switchery.min.js')}}"></script>
<!-- toastr -->
<script src="{{ asset('isolation-crm/plugins/toastr/toastr.js')}}"></script>
<!-- notify -->
<script src="{{ asset('isolation-crm/plugins/notifyjs/js/notify.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/notifications/notify-metro.js')}}"></script>

<!-- App js -->
<script src="{{ asset('isolation-crm/js/jquery.core.js')}}"></script>
<script src="{{ asset('isolation-crm/js/jquery.app.js')}}"></script>
<script src="{{ asset('isolation-crm/js/custom-crm.js')}}"></script>
<script>
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });
    var changeCheckbox = document.querySelector('.js-check-change');

    changeCheckbox.onchange = function() {
        alert(changeCheckbox.checked);
    };

</script>
<script>
    //var elem = document.querySelector('.switch-caves');
    //var switchery = new Switchery(elem, { color: '#8ab326', jackColor: '#ffffff' });

    var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-caves'));
    elems.forEach(function(html) {
        var switchery = new Switchery(html, { color: '#8ab326', jackColor: '#ffffff' });
    });
    var changeCheckbox = document.querySelectorAll('.switch-caves');
    var input = document.querySelectorAll('.isolation_voutee_surface');
    for(var i=0; i<changeCheckbox.length; i++){
        changeCheckbox[i].onchange = function() {
            alert(this.checked);
            if(this.checked){
                input.removeAttribute('hidden');
            }else{
                input.setAttribute('hidden');
            }
        };
    }

</script>
@yield('javascript')
</body>
</html>