@extends('crm.layouts.main')
@section('navigation')
    @include('crm.layouts.navigation')
@endsection
@section('content')
    <div class="wrapper m-t-40">
        <div class="container-fluid">
            <?php $villeRequest = Request::get('ville');?>
            @if($villeRequest)
                <h3 class="text-white m-b-30">Pre-visites à {{ $villeRequest }} :</h3>
            @endif
                <?php $departementRequest = Request::get('departement');?>
                @if($departementRequest)
                    <h3 class="text-white m-b-30">Pre-visites dans le {{ $departementRequest }} :</h3>
                @endif
            <div class="row">
                @foreach($clientVisites as $clientVisite)
                    <div class="col-sm-6 col-lg-6">
                        <div class="card-box">
                            <div class="contact-card">
                                <div class="member-info">
                                    <div class="departement">
                                        <a class="text-dark" href="{{ route('crm.lead-previsite', ['departement' => $clientVisite->departement]) }}"> {{ $clientVisite->departement }}</a>
                                    </div>
                                    <h4 class="m-t-20 m-b-20">{{ ucfirst($clientVisite->civilite) }}<b> {{ strtoupper($clientVisite->nom) }} {{ ucfirst($clientVisite->prenom) }}</b></h4>
                                    @if( $clientVisite->situation_eligible == 'grand-précaire')
                                        <span class="label label-success">{{ $clientVisite->situation_eligible}}</span>
                                    @elseif( $clientVisite->situation_eligible == 'précaire')
                                        <span class="label label-warning">{{ $clientVisite->situation_eligible}}</span>
                                    @elseif( $clientVisite->situation_eligible == 'classique')
                                        <span class="label label-danger">{{ $clientVisite->situation_eligible}}</span>
                                    @endif
                                    <h5 class="text-dark">{{ strtoupper($clientVisite->codePostal) }} <a class="text-dark" href="{{ route('crm.lead-previsite', ['ville' => $clientVisite->ville]) }}"> {{ strtoupper($clientVisite->ville) }}</a></h5>
                                    <h5 data-color="orange"><i class="fa fa-phone"></i> {{ $clientVisite->telephone_fixe }}<span class="m-l-15">{{ $clientVisite->telephone_mobile }}</span></h5>
                                    <p class="">{{ $clientVisite->dateFormatted()}}</p>
                                    @if($clientVisite->isolation_combles)
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" data-color="vert"></i>101 : Isolation des combles</h5>
                                    @else
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" style="color: transparent"></i>101 : Isolation des combles</h5>
                                    @endif
                                    @if($clientVisite->isolation_garage)
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" data-color="vert"></i>103 : Isolation du garage</h5>
                                    @else
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" style="color: transparent"></i>103 : Isolation du garage</h5>
                                    @endif
                                    @if($clientVisite->isolation_caves)
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" data-color="vert"></i>103 : Isolation des caves</h5>
                                    @else
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" style="color: transparent"></i>103 : Isolation des caves</h5>
                                    @endif
                                    <div class="contact-action">
                                        <a class="btn btn-success btn-sm" data-toggle="collapse" href="#collapse-{{ $clientVisite->id }}" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="collapse-{{ $clientVisite->id }}">
                                    <div class="card card-body">
                                        <form id="formLeadWeb{{ $clientVisite->id }}">
                                            <h5 class="m-b-20" data-color="orange"><span class="">1</span> - Identité du client:</h5>
                                            <div class="row">
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_monsieur{{ $clientVisite->id }}" value="monsieur" {{ $clientVisite->civilite == 'monsieur' ? 'checked' : '' }}>
                                                    <label for="civ_monsieur{{ $clientVisite->id }}" class="civilite">Monsieur</label>
                                                </div>
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_madame{{ $clientVisite->id }}" value="madame" {{ $clientVisite->civilite == 'madame' ? 'checked' : '' }}>
                                                    <label for="civ_madame{{ $clientVisite->id }}" class="civilite">Madame</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Nom</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="nom" value="{{ strtoupper($clientVisite->nom) }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Prenom</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="prenom" value="{{ strtoupper($clientVisite->prenom) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="">N° et nom de rue</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="rue" value="{{ strtoupper($clientVisite->rue) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Code Postal</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="code_postal" value="{{ strtoupper($clientVisite->codePostal) }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Ville</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="ville" value="{{ strtoupper($clientVisite->ville) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Numero telephone fixe</label>
                                                    <div class="">
                                                        <input type="text" class="form-control telephone_input" name="telephone_fixe" maxlength="14" value="{{ $clientVisite->telephone_fixe }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Numero telephone mobile</label>
                                                    <div class="">
                                                        <input type="text" class="form-control telephone_input" name="telephone_mobile" maxlength="14" value="{{ $clientVisite->telephone_mobile }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">2</span> - Situation :</h5>
                                            <div class="row m-b-20">
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-proprietaire{{ $clientVisite->id }}" value="proprietaire" {{ $clientVisite->type_bail == 'proprietaire' ? 'checked' : '' }} >
                                                    <label for="client-proprietaire{{ $clientVisite->id }}" class="type-bail-client">Propriétaire</label>
                                                </div>
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-locataire{{ $clientVisite->id }}" value="locataire" {{ $clientVisite->type_bail == 'locataire' ? 'checked' : '' }} >
                                                    <label for="client-locataire{{ $clientVisite->id }}" class="type-bail-client">Locataire</label>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">3</span> - Système de chauffage :</h5>
                                            <div class="row m-b-20 block-checkbox">
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-electrique{{ $clientVisite->id }}" value="Electrique" {{ $clientVisite->chauffage == 'Electique' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-electrique{{ $clientVisite->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-electricite2"></i><span>Electricité</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-gaz{{ $clientVisite->id }}" value="Gaz" {{ $clientVisite->chauffage == 'Gaz' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-gaz{{ $clientVisite->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-gaz2"></i><span>Gaz</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-bois{{ $clientVisite->id }}" value="Bois" {{ $clientVisite->chauffage == 'Bois' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-bois{{ $clientVisite->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-bois2"></i><span>Bois</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-fioul{{ $clientVisite->id }}" value="Fioul" {{ $clientVisite->chauffage == 'Fioul' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-fioul{{ $clientVisite->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-fioul"></i><span>Fioul</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-pompe{{ $clientVisite->id }}" value="Pompe à chaleur" {{ $clientVisite->chauffage == 'Pompe à chaleur' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-pompe{{ $clientVisite->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-pompe"></i><span>Pompe</span></label>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">4</span> - Types d'isolation :</h5>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_combles" id="type-isolation-combles{{ $clientVisite->id }}"  value="1" {{ $clientVisite->isolation_combles == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-combles{{ $clientVisite->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-combles-form"></i><span>Combles perdus</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="isolation_combles_surface" value="{{ $clientVisite->isolation_combles_surface }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="m-b-20">Accès aux combles :</h6>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles1{{ $clientVisite->id }}" value="trappe" name="isolation_combles_accee" {{ $clientVisite->isolation_combles_accee == 'trappe' ? 'checked' : '' }}>
                                                        <label for="accescombles1{{ $clientVisite->id }}">Trappe</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles2{{ $clientVisite->id }}" value="debaras" name="isolation_combles_accee" {{ $clientVisite->isolation_combles_accee == 'debaras' ? 'checked' : '' }}>
                                                        <label for="accescombles2{{ $clientVisite->id }}">Débaras</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles3{{ $clientVisite->id }}" value="detuilage" name="isolation_combles_accee" {{ $clientVisite->isolation_combles_accee == 'detuilage' ? 'checked' : '' }}>
                                                        <label for="accescombles3{{ $clientVisite->id }}">Détuilage</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 m-b-20">
                                                    <h6 class="m-b-20 m-t-20">Type d'isolant :</h6>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles1{{ $clientVisite->id }}" value="déroulé" name="isolation_combles_type" {{ $clientVisite->isolation_combles_type == 'déroulé' ? 'checked' : '' }}>
                                                        <label for="isolantcombles1{{ $clientVisite->id }}">Déroulé</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles2{{ $clientVisite->id }}" value="soufflé" name="isolation_combles_type" {{ $clientVisite->isolation_combles_type == 'soufflé' ? 'checked' : '' }}>
                                                        <label for="isolantcombles2{{ $clientVisite->id }}">Soufflé</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_garage" id="type-isolation-garage{{ $clientVisite->id }}" value="1" {{ $clientVisite->isolation_garage == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-garage{{ $clientVisite->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-garage-form"></i><span>Garage</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" name="isolation_garages_surface" class="form-control" value="{{ $clientVisite->isolation_garages_surface }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_caves" id="type-isolation-cave{{ $clientVisite->id }}" value="1" {{ $clientVisite->isolation_caves == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-cave{{ $clientVisite->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-cave-form"></i><span>Caves/sous-sols</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" name="isolation_caves_surface" class="form-control" value="{{ $clientVisite->isolation_caves_surface }}">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start justify-content-center">
                                                    <div class="col-md-6">
                                                        <h5>Cave voutée</h5>
                                                        <div class="switchery-demo">
                                                            <div class="">
                                                                <input type="checkbox" class="switch-caves" name="cave_voutee" value="1" {{ $clientVisite->cave_voutee == '1' ? 'checked' : '' }}>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="">Surface m2</label>
                                                        <div class="">
                                                            <input type="text" name="isolation_voutee_surface" class="form-control" value="{{ $clientVisite->isolation_voutee_surface }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">5</span> - E-mail:</h5>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="">E-mail</label>
                                                    <div class="">
                                                        <input type="email" class="form-control" name="email" value="{{ $clientVisite->email }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="text" class="form-control" name="isolation_source" value="lead-web" hidden>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="text" class="form-control" name="situation" value="{{ $clientVisite->situation_eligible }}" hidden>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange">Commentaires:</h5>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Commentaires</label>
                                                    <div class="">
                                                        <textarea class="form-control" rows="5" name="commentaires">{{ $clientVisite->commentaires }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row">
                                                <div class="col-md-12">
                                                <h5 class="m-b-20 text-center" data-color="orange">Rendez-vous pour une pré-visite:</h5>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-white">Jour</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker" placeholder="jour/mois/année" name="rdv_jour">
                                                            <span class="input-group-addon b-0" data-background-color="vert"><i class="md md-event-note text-dark"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="text-white">Heure</label>
                                                    <div>
                                                        <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                                            <input type="text" class="form-control" value="13:14" name="rdv_heure">
                                                            <span class="input-group-addon" data-background-color="vert"> <span class="md md-access-time" data-color="blanc"></span> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Actualiser</button>
                                                </div>
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-success waves-effect waves-light">Valider le chantier</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                @endforeach
            </div>
        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->
@endsection
@section('javascript')
    <script>
        @if(Session::has('success'))
        {{--$.Notification.notify('success','top center','Opération enregistré', '{{ Session::get('success') }}');--}}
            swal({
            position: 'top-end',
            type: 'success',
            title: '{{Session::get('success')}}',
            showConfirmButton: false,
            timer: 2000
        });
        @endif
        $(document).ready(function(){


            $('.datepicker').datepicker({
                format: "dd/mm/yyyy",
                weekStart: 1,
                todayBtn: true,
                language: "fr",
                daysOfWeekDisabled: "0,6",
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true,
            });

            //Clock Picker
            $('.clockpicker').clockpicker();
        });
    </script>
@endsection
