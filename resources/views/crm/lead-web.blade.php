@extends('crm.layouts.main')
@section('navigation')
    @include('crm.layouts.navigation')
@endsection
@section('content')
    <div class="wrapper m-t-40">
        <div class="container-fluid">
            <?php $villeRequest = Request::get('ville');?>
            @if($villeRequest)
                <h3 class="text-white m-b-30">Clients Formulaire Web à {{ $villeRequest }} :</h3>
            @endif
            <?php $departementRequest = Request::get('departement');?>
            @if($departementRequest)
                <h3 class="text-white m-b-30">Clients Formulaire Web dans le {{ $departementRequest }} :</h3>
            @endif
            <div class="row">
                @foreach($clientforms as $clientform)
                    @if(($clientform->abondonne !==1) && ($clientform->traite !==1))
                    <div class="col-sm-6 col-lg-6">
                        <div class="card-box">
                            <div class="contact-card">
                                <div class="member-info">
                                    <div class="departement">
                                        <a class="text-dark" href="{{ route('crm.lead-web', ['departement' => $clientform->departement]) }}"> {{ $clientform->departement }}</a>
                                    </div>
                                    <h4 class="m-t-20 m-b-20">{{ ucfirst($clientform->civilite) }}<b> {{ strtoupper($clientform->nom) }}</b></h4>
                                    @if( $clientform->situation == 'grand-précaire')
                                        <span class="label label-success">{{ $clientform->situation}}</span>
                                    @elseif( $clientform->situation == 'précaire')
                                        <span class="label label-warning">{{ $clientform->situation}}</span>
                                    @elseif( $clientform->situation == 'classique')
                                        <span class="label label-danger">{{ $clientform->situation}}</span>
                                    @endif
                                    <h5 class="text-dark">{{ strtoupper($clientform->codePostal) }} <a class="text-dark" href="{{ route('crm.lead-web', ['ville' => $clientform->ville]) }}"> {{ strtoupper($clientform->ville) }}</a></h5>
                                    <h5 data-color="orange"><i class="fa fa-phone"></i> {{ $clientform->telephone_fixe }} {{ $clientform->telephone_mobile }}</h5>
                                    @if($clientform->heure_rappel != null)
                                        <h6 data-color="orange">Demande de rappel entre : {{ $clientform->heure_rappel }}</h6>
                                    @else
                                        <h6 data-color="orange">Pas de demande de rappel</h6>
                                    @endif
                                    <p class="">{{ $clientform->dateFormatted()}}</p>
                                    @if($clientform->isolation_combles)
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" data-color="vert"></i>101 : Isolation des combles</h5>
                                    @else
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" style="color: transparent"></i>101 : Isolation des combles</h5>
                                    @endif
                                    @if($clientform->isolation_garage)
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" data-color="vert"></i>103 : Isolation du garage</h5>
                                    @else
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" style="color: transparent"></i>103 : Isolation du garage</h5>
                                    @endif
                                    @if($clientform->isolation_caves)
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" data-color="vert"></i>103 : Isolation des caves</h5>
                                    @else
                                        <h5 class="text-dark"><i class="fa fa-check-square-o m-r-5" style="color: transparent"></i>103 : Isolation des caves</h5>
                                    @endif
                                    <div class="contact-action">
                                        <a class="btn btn-success btn-sm" data-toggle="collapse" href="#collapse-{{ $clientform->id }}" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm lead-web-drop"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="collapse-{{ $clientform->id }}">
                                    <div class="card card-body">
                                        <form id="formLeadWeb{{ $clientform->id }}" method="post" action="{{ route('crm.previsite-accepter') }}">
                                            {{ csrf_field() }}
                                            <h5 class="m-b-20" data-color="orange"><span class="">1</span> - Identité du client:</h5>
                                            <div class="row">
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_monsieur{{ $clientform->id }}" value="monsieur" {{ $clientform->civilite == 'monsieur' ? 'checked' : '' }}>
                                                    <label for="civ_monsieur{{ $clientform->id }}" class="civilite">Monsieur</label>
                                                </div>
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_madame{{ $clientform->id }}" value="madame" {{ $clientform->civilite == 'madame' ? 'checked' : '' }}>
                                                    <label for="civ_madame{{ $clientform->id }}" class="civilite">Madame</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Nom</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="nom" value="{{ strtoupper($clientform->nom) }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Prenom</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="prenom" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="">N° et nom de rue</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="rue" value="{{ strtoupper($clientform->rue) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Code Postal</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="code_postal" value="{{ strtoupper($clientform->codePostal) }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Ville</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="ville" value="{{ strtoupper($clientform->ville) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Numero telephone fixe</label>
                                                    <div class="">
                                                        <input type="text" class="form-control telephone_input" name="telephone_fixe" maxlength="14" value="{{ $clientform->telephone_fixe }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Numero telephone mobile</label>
                                                    <div class="">
                                                        <input type="text" class="form-control telephone_input" name="telephone_mobile" maxlength="14" value="{{ $clientform->telephone_mobile }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">2</span> - Situation :</h5>
                                            <div class="row m-b-20">
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-proprietaire{{ $clientform->id }}" value="proprietaire" {{ $clientform->type_bail == 'proprietaire' ? 'checked' : '' }} >
                                                    <label for="client-proprietaire{{ $clientform->id }}" class="type-bail-client">Propriétaire</label>
                                                </div>
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-locataire{{ $clientform->id }}" value="locataire" {{ $clientform->type_bail == 'locataire' ? 'checked' : '' }} >
                                                    <label for="client-locataire{{ $clientform->id }}" class="type-bail-client">Locataire</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Revenu fiscal de référence</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="revenu_fiscal" value="{{ $clientform->revenu_fiscal }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Nombre dans le foyer</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="nombre_personne" value="{{ $clientform->nombre_personne }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">3</span> - Système de chauffage :</h5>
                                            <div class="row m-b-20 block-checkbox">
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-electrique{{ $clientform->id }}" value="Electrique" {{ $clientform->chauffage == 'Electique' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-electrique{{ $clientform->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-electricite2"></i><span>Electricité</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-gaz{{ $clientform->id }}" value="Gaz" {{ $clientform->chauffage == 'Gaz' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-gaz{{ $clientform->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-gaz2"></i><span>Gaz</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-bois{{ $clientform->id }}" value="Bois" {{ $clientform->chauffage == 'Bois' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-bois{{ $clientform->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-bois2"></i><span>Bois</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-fioul{{ $clientform->id }}" value="Fioul" {{ $clientform->chauffage == 'Fioul' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-fioul{{ $clientform->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-fioul"></i><span>Fioul</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-pompe{{ $clientform->id }}" value="Pompe à chaleur" {{ $clientform->chauffage == 'Pompe à chaleur' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-pompe{{ $clientform->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-pompe"></i><span>Pompe</span></label>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">4</span> - Types d'isolation :</h5>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_combles" id="type-isolation-combles{{ $clientform->id }}"  value="1" {{ $clientform->isolation_combles == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-combles{{ $clientform->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-combles-form"></i><span>Combles perdus</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="isolation_combles_surface" value="">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="text-center">Accès aux combles :</h6>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles1{{ $clientform->id }}" value="trappe" name="isolation_combles_accee">
                                                        <label for="accescombles1{{ $clientform->id }}">Trappe</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles2{{ $clientform->id }}" value="debaras" name="isolation_combles_accee">
                                                        <label for="accescombles2{{ $clientform->id }}">Débaras</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles3{{ $clientform->id }}" value="detuilage" name="isolation_combles_accee">
                                                        <label for="accescombles3{{ $clientform->id }}">Détuilage</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="text-center">Type d'isolant :</h6>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles1{{ $clientform->id }}" value="déroulé" name="isolation_combles_type">
                                                        <label for="isolantcombles1{{ $clientform->id }}">Déroulé</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles2{{ $clientform->id }}" value="soufflé" name="isolation_combles_type">
                                                        <label for="isolantcombles2{{ $clientform->id }}">Soufflé</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_garage" id="type-isolation-garage{{ $clientform->id }}" value="1" {{ $clientform->isolation_garage == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-garage{{ $clientform->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-garage-form"></i><span>Garage</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" name="isolation_garages_surface" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_caves" id="type-isolation-cave{{ $clientform->id }}" value="1" {{ $clientform->isolation_caves == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-cave{{ $clientform->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-cave-form"></i><span>Caves/sous-sols</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" name="isolation_caves_surface" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start justify-content-center">
                                                    <div class="col-md-6">
                                                        <h5>Cave voutée</h5>
                                                        <div class="switchery-demo">
                                                            <input type="checkbox" class="switch-caves" name="cave_voutee" value="1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="">Surface m2</label>
                                                        <div class="">
                                                            <input  class="isolation_voutee_surface" type="text" name="isolation_voutee_surface" class="form-control" value="" hidden>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">5</span> - E-mail:</h5>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label class="">E-mail</label>
                                                    <div class="">
                                                        <input type="email" class="form-control" name="email" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="text" class="form-control" name="source_isolation" value="lead-formulaire-web" hidden>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input type="text" class="form-control" name="situation" value="{{ $clientform->situation }}" hidden>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Commentaires</label>
                                                    <div class="">
                                                        <textarea class="form-control" rows="5" name="commentaires"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Pré-visite</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    @endif
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

    </script>
@endsection