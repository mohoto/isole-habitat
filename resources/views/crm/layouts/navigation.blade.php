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
                <a href="{{ route('crm.admin.accueil') }}" class="logo">
                    <img src="{{ asset('isolation-crm/images/Isole-Habitat-logo.svg')}}" alt="" class="logo-lg">
                    <img src="{{ asset('isolation-crm/images/logo_sm.png')}}" alt="" height="24" class="logo-sm">
                </a>
            </div>
            <!-- End Logo container-->
        <div class="menu-extras topbar-custom">
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
                        <a href="{{ route('crm.deconnexion') }}" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-power"></i> <span>Logout</span>
                        </a>
                    </div>
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
                    <li class="has-submenu sub-navigation-menu">
                        <a href="{{ route('crm.lead-web') }}"><i class="fa fa-dashboard"></i>Administration</a>
                    </li>
                    @endif
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