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
        <div class="menu-extras topbar-custom">
            <ul class="list-inline float-right mt-20 mb-0">
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
                <li class="list-inline-item">Bonjour {{ Auth::user()->name }}</li>
                <li class="list-inline-item ">
                    <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                        <i class="dripicons-expand noti-icon text-dark"></i>
                    </a>
                </li>
                <li class="list-inline-item dropdown notification-list">
                    <a class="text-dark" href="{{ route('crm.deconnexion') }}" class="dropdown-item notify-item">
                        <i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
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
                    @if(Auth::user()->is_admin === 1)
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/admin/administration') ? 'active' : ''}}">
                        <a href="{{ route('crm.admin.administration') }}"><i class="fas fa-tachometer-alt"></i>Administration</a>
                    </li>
                    @endif
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/lead-web') ? 'active' : ''}}">
                        <a href="{{ route('crm.lead-web') }}"><i class="fab fa-wpforms"></i>Formulaire web</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/lead-rappel-web') ? 'active' : ''}}">
                        <a href="{{ route('crm.lead-rappel-web') }}"><i class="fa fa-volume-control-phone"></i>Rappel Tel web</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/lead-demarchage') ? 'active' : ''}}">
                        <a href="{{ route('crm.lead-demarchage') }}"><i class="fas fa-users"></i>Parrainage</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/lead-previsite') ? 'active' : ''}}">
                        <a href="{{ route('crm.lead-previsite') }}"><i class="fa fa-calculator"></i>Pré-viste à faire</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/admin/chantier-validee') ? 'active' : ''}}">
                        <a href="{{ route('crm.admin.chantier-validee') }}"><i class="fa fa-calendar-check-o"></i>Chantier validée</a>
                    </li>
                    @if(Auth::user()->is_admin === 1)
                        <li class="sub-navigation-menu {{ Request::is('crm/admin/pose-validee') ? 'active' : ''}}">
                            <a href="{{ route('crm.admin.pose-validee') }}"><i class="fas fa-check-circle"></i>Pose validéé</a>
                        </li>
                    @endif
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->