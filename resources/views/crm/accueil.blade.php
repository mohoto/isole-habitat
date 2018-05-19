@extends('crm.layouts.main')
@section('navigation')
    @include('crm.layouts.navigation')
@endsection
@section('content')
    <div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Ubold</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard 2</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->


            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget-panel widget-style-2 card-box">
                        <i class="fab fa-wpforms text-primary"></i>
                        <h2 class="m-0 counter font-600">{{ App\ClientForm::count() }}</h2>
                        <div class="text-muted m-t-5">Formulaires web</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget-panel widget-style-2 card-box">
                        <i class="fas fa-phone text-pink"></i>
                        <h2 class="m-0 counter font-600">{{ App\Pose::where('lead_previsite', 1)->where('previsite_chantier', 0)->count() }}</h2>
                        <div class="text-muted m-t-5">Prévistes à faire</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget-panel widget-style-2 card-box">
                        <i class="fa fa-calendar-check-o text-info"></i>
                        <h2 class="m-0 counter font-600">{{ App\Pose::where('previsite_chantier', 1)->where('chantier_traite', 0)->count() }}</h2>
                        <div class="text-muted m-t-5">Poses en attente</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget-panel widget-style-2 card-box">
                        <i class="fas fa-check-circle text-custom"></i>
                        <h2 class="m-0 counter font-600">{{ App\Pose::where('chantier_traite', 1)->where('chantier_pose', 1)->count() }}</h2>
                        <div class="text-muted m-t-5">Poses validés</div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h3 class="text-dark header-title m-t-0">Total :</h3>
                        <div class="row mt-30">
                            <div class="col-md-12 col-xl-4">
                                <p class="font-600">Leads Formulaire<span class="text-primary pull-right">80%</span></p>
                                <div class="progress m-b-30">
                                    <div class="progress-bar progress-bar-primary progress-animated wow animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    </div><!-- /.progress-bar .progress-bar-danger -->
                                </div><!-- /.progress .no-rounded -->

                                <p class="font-600">Leads Appels<span class="text-pink pull-right">50%</span></p>
                                <div class="progress m-b-30">
                                    <div class="progress-bar progress-bar-pink progress-animated wow animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                    </div><!-- /.progress-bar .progress-bar-pink -->
                                </div><!-- /.progress .no-rounded -->

                                <p class="font-600">Prévisites validées<span class="text-info pull-right">70%</span></p>
                                <div class="progress m-b-30">
                                    <div class="progress-bar progress-bar-info progress-animated wow animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    </div><!-- /.progress-bar .progress-bar-info -->
                                </div><!-- /.progress .no-rounded -->

                                <p class="font-600">Poses en attente<span class="text-warning pull-right">65%</span></p>
                                <div class="progress m-b-30">
                                    <div class="progress-bar progress-bar-warning progress-animated wow animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                    </div><!-- /.progress-bar .progress-bar-warning -->
                                </div><!-- /.progress .no-rounded -->

                                <p class="font-600">Pose validées<span class="text-success pull-right">40%</span></p>
                                <div class="progress m-b-30">
                                    <div class="progress-bar progress-bar-success progress-animated wow animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    </div><!-- /.progress-bar .progress-bar-success -->
                                </div><!-- /.progress .no-rounded -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->
@endsection