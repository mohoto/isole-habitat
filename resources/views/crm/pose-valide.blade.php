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
                @foreach($poses as $pose)
                    <div class="col-sm-6 col-lg-6">
                        <div class="card-box">
                            <div class="contact-card">
                                <div class="member-info">
                                    <div class="departement">
                                        <a class="text-dark" href="{{ route('crm.chantier-valide', ['departement' => $pose->departement]) }}"> {{ $pose->departement }}</a>
                                    </div>
                                    <h5 class="">Posé le : {{ $pose->rdv_jour}} à {{ $pose->rdv_heure}}</h5>
                                    <h4 class="m-t-20 m-b-20">{{ ucfirst($pose->civilite) }}<b> {{ strtoupper($pose->nom) }} {{ ucfirst($pose->prenom) }}</b></h4>
                                    @if( $pose->situation_eligible == 'grand-précaire')
                                        <span class="label label-success">{{ $pose->situation_eligible}}</span>
                                    @elseif( $pose->situation_eligible == 'précaire')
                                        <span class="label label-warning">{{ $pose->situation_eligible}}</span>
                                    @elseif( $pose->situation_eligible == 'classique')
                                        <span class="label label-danger">{{ $pose->situation_eligible}}</span>
                                    @endif
                                    <h5 class="text-dark">{{ strtoupper($pose->codePostal) }} <a class="text-dark" href="{{ route('crm.previsite', ['ville' => $pose->ville]) }}"> {{ strtoupper($pose->ville) }}</a></h5>
                                    <h5 data-color="orange"><i class="fa fa-phone"></i> {{ $pose->telephone_fixe }}<span class="m-l-15">{{ $pose->telephone_mobile }}</span></h5>
                                    @if($pose->isolation_combles)
                                        <h5 class="text-dark"><i class="far fa-check-square m-r-5" data-color="vert"></i>101 : Isolation des combles</h5>
                                    @else
                                        <h5 class="text-dark"><i class="far fa-check-square m-r-5" style="color: transparent"></i>101 : Isolation des combles</h5>
                                    @endif
                                    @if($pose->isolation_garage)
                                        <h5 class="text-dark"><i class="far fa-check-square m-r-5" data-color="vert"></i>103 : Isolation du garage</h5>
                                    @else
                                        <h5 class="text-dark"><i class="far fa-check-square m-r-5" style="color: transparent"></i>103 : Isolation du garage</h5>
                                    @endif
                                    @if($pose->isolation_caves)
                                        <h5 class="text-dark"><i class="far fa-check-square m-r-5" data-color="vert"></i>103 : Isolation des caves</h5>
                                    @else
                                        <h5 class="text-dark"><i class="far fa-check-square m-r-5" style="color: transparent"></i>103 : Isolation des caves</h5>
                                    @endif
                                    <div class="contact-action">
                                        <a class="btn btn-success btn-sm" data-toggle="collapse" href="#collapse-{{ $pose->id }}" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="collapse-{{ $pose->id }}">
                                    <div class="card card-body">
                                        <form id="formLeadWeb{{ $pose->id }}">
                                            <h5 class="m-b-20" data-color="orange"><span class="">1</span> - Identité du client:</h5>
                                            <div class="row">
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_monsieur{{ $pose->id }}" value="monsieur" {{ $pose->civilite == 'monsieur' ? 'checked' : '' }}>
                                                    <label for="civ_monsieur{{ $pose->id }}" class="civilite">Monsieur</label>
                                                </div>
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_madame{{ $pose->id }}" value="madame" {{ $pose->civilite == 'madame' ? 'checked' : '' }}>
                                                    <label for="civ_madame{{ $pose->id }}" class="civilite">Madame</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Nom</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="nom" value="{{ strtoupper($pose->nom) }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Prenom</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="prenom" value="{{ strtoupper($pose->prenom) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="">N° et nom de rue</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="rue" value="{{ strtoupper($pose->rue) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Code Postal</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="code_postal" value="{{ strtoupper($pose->codePostal) }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Ville</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="ville" value="{{ strtoupper($pose->ville) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Numero telephone fixe</label>
                                                    <div class="">
                                                        <input type="text" class="form-control telephone_input" name="telephone_fixe" maxlength="14" value="{{ $pose->telephone_fixe }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Numero telephone mobile</label>
                                                    <div class="">
                                                        <input type="text" class="form-control telephone_input" name="telephone_mobile" maxlength="14" value="{{ $pose->telephone_mobile }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">2</span> - Situation :</h5>
                                            <div class="row m-b-20">
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-proprietaire{{ $pose->id }}" value="proprietaire" {{ $pose->type_bail == 'proprietaire' ? 'checked' : '' }} >
                                                    <label for="client-proprietaire{{ $pose->id }}" class="type-bail-client">Propriétaire</label>
                                                </div>
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-locataire{{ $pose->id }}" value="locataire" {{ $pose->type_bail == 'locataire' ? 'checked' : '' }} >
                                                    <label for="client-locataire{{ $pose->id }}" class="type-bail-client">Locataire</label>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">3</span> - Système de chauffage :</h5>
                                            <div class="row m-b-20 block-checkbox">
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-electrique{{ $pose->id }}" value="Electrique" {{ $pose->chauffage == 'Electique' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-electrique{{ $pose->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-electricite2"></i><span>Electricité</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-gaz{{ $pose->id }}" value="Gaz" {{ $pose->chauffage == 'Gaz' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-gaz{{ $pose->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-gaz2"></i><span>Gaz</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-bois{{ $pose->id }}" value="Bois" {{ $pose->chauffage == 'Bois' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-bois{{ $pose->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-bois2"></i><span>Bois</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-fioul{{ $pose->id }}" value="Fioul" {{ $pose->chauffage == 'Fioul' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-fioul{{ $pose->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-fioul"></i><span>Fioul</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-pompe{{ $pose->id }}" value="Pompe à chaleur" {{ $pose->chauffage == 'Pompe à chaleur' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-pompe{{ $pose->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-pompe"></i><span>Pompe</span></label>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">4</span> - Types d'isolation :</h5>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_combles" id="type-isolation-combles{{ $pose->id }}"  value="1" {{ $pose->isolation_combles == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-combles{{ $pose->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-combles-form"></i><span>Combles perdus</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="isolation_combles_surface" value="{{ $pose->isolation_combles_surface }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="m-b-20">Accès aux combles :</h6>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles1{{ $pose->id }}" value="trappe" name="isolation_combles_accee" {{ $pose->isolation_combles_accee == 'trappe' ? 'checked' : '' }}>
                                                        <label for="accescombles1{{ $pose->id }}">Trappe</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles2{{ $pose->id }}" value="debaras" name="isolation_combles_accee" {{ $pose->isolation_combles_accee == 'debaras' ? 'checked' : '' }}>
                                                        <label for="accescombles2{{ $pose->id }}">Débaras</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles3{{ $pose->id }}" value="detuilage" name="isolation_combles_accee" {{ $pose->isolation_combles_accee == 'detuilage' ? 'checked' : '' }}>
                                                        <label for="accescombles3{{ $pose->id }}">Détuilage</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 m-b-20">
                                                    <h6 class="m-b-20 m-t-20">Type d'isolant :</h6>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles1{{ $pose->id }}" value="déroulé" name="isolation_combles_type" {{ $pose->isolation_combles_type == 'déroulé' ? 'checked' : '' }}>
                                                        <label for="isolantcombles1{{ $pose->id }}">Déroulé</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles2{{ $pose->id }}" value="soufflé" name="isolation_combles_type" {{ $pose->isolation_combles_type == 'soufflé' ? 'checked' : '' }}>
                                                        <label for="isolantcombles2{{ $pose->id }}">Soufflé</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_garage" id="type-isolation-garage{{ $pose->id }}" value="1" {{ $pose->isolation_garage == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-garage{{ $pose->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-garage-form"></i><span>Garage</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" name="isolation_garages_surface" class="form-control" value="{{ $pose->isolation_garages_surface }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_caves" id="type-isolation-cave{{ $pose->id }}" value="1" {{ $pose->isolation_caves == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-cave{{ $pose->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-cave-form"></i><span>Caves/sous-sols</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" name="isolation_caves_surface" class="form-control" value="{{ $pose->isolation_caves_surface }}">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start justify-content-center">
                                                    <div class="col-md-6">
                                                        <h5>Cave voutée</h5>
                                                        <div class="switchery-demo">
                                                            <div class="">
                                                                <input type="checkbox" class="switch-caves" name="cave_voutee" value="1" {{ $pose->cave_voutee == '1' ? 'checked' : '' }}>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="">Surface m2</label>
                                                        <div class="">
                                                            <input type="text" name="isolation_voutee_surface" class="form-control" value="{{ $pose->isolation_voutee_surface }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">5</span> - E-mail:</h5>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="">E-mail</label>
                                                    <div class="">
                                                        <input type="email" class="form-control" name="email" value="{{ $pose->email }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange">Commentaires:</h5>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Commentaires</label>
                                                    <div class="">
                                                        <textarea class="form-control" rows="5" name="commentaires">{{ $pose->commentaires }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row">
                                                <div class="col-md-12">
                                                    <h5 class="m-b-20 text-center" data-color="orange">Rendez-vous pour la pose:</h5>
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
                                            <div class="row justify-content-center">
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Planifier le chantier</button>
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

