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
                <li class="list-inline-item">Bonjour {{ ucfirst(Auth::user()->name) }}</li>
                <li class="list-inline-item ml-30">
                    <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                        <i class="dripicons-expand noti-icon text-dark"></i>
                    </a>
                </li>
                @if(Auth::user()->is_admin === 1)
                    <li class="list-inline-item ml-30">
                        <a class="text-dark" href="{{ route('crm.admin.administration') }}">
                            <i class="fas fa-tachometer-alt mr-10"></i><span>Administration</span>
                        </a>
                    </li>
                @endif
                <li class="list-inline-item">
                    <a class="text-dark" href="{{ route('crm.deconnexion') }}">
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
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/lead-web') ? 'active' : ''}}">
                        <a href="{{ route('crm.lead-web') }}"><i class="far fa-address-book"></i>Formulaires web</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/lead-rappel-web') ? 'active' : ''}}">
                        <a href="{{ route('crm.lead-rappel-web') }}"><i class="fa fa-volume-control-phone"></i>Demandes rappel</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/appel-telephonique') ? 'active' : ''}}">
                        <a href="{{ route('crm.appel-telephonique') }}"><i class="fas fa-phone"></i>Appels Tel</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/previsite') ? 'active' : ''}}">
                        <a href="{{ route('crm.previsite') }}"><i class="fa fa-calculator"></i>Pré-vistes à faire</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/previsite-valide') ? 'active' : ''}}">
                        <a href="{{ route('crm.previsite-valide') }}"><i class="far fa-calendar-plus"></i>Pré-visites validées</a>
                    </li>
                    <li class="has-submenu sub-navigation-menu {{ Request::is('crm/chantier-valide') ? 'active' : ''}}">
                        <a href="{{ route('crm.chantier-valide') }}"><i class="fa fa-calendar-check-o"></i>Poses à faire</a>
                    </li>
                    <li class="sub-navigation-menu {{ Request::is('crm/pose-valide') ? 'active' : ''}}">
                        <a href="{{ route('crm.pose-valide') }}"><i class="fas fa-check-circle"></i>Poses validéés</a>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->