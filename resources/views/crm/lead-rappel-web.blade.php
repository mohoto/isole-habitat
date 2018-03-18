@extends('crm.layouts.main')
@section('content')
    <div class="wrapper m-t-40">
        <div class="container-fluid">
            <div class="row">
                @foreach($clientRappels as $clientRappel)
                    <div class="col-sm-6 col-lg-6">
                        <div class="card-box">
                            <div class="contact-card">
                                <div class="member-info">
                                    <h4 class="m-t-20 m-b-20">{{ ucfirst($clientRappel->civilite) }}<b> {{ strtoupper($clientRappel->nom) }}</b></h4>
                                    @if( $clientRappel->situation == 'grand-précaire')
                                        <span class="label label-success">{{ $clientRappel->situation}}</span>
                                    @elseif( $clientRappel->situation == 'précaire')
                                        <span class="label label-warning">{{ $clientRappel->situation}}</span>
                                    @elseif( $clientRappel->situation == 'classique')
                                        <span class="label label-danger">{{ $clientRappel->situation}}</span>
                                    @endif
                                    <h5 class="text-dark">{{ strtoupper($clientRappel->codePostal) }} {{ strtoupper($clientRappel->ville) }}</h5>
                                    <h5 data-color="orange"><i class="fa fa-phone"></i> {{ $clientRappel->telephone_fixe }} {{ $clientRappel->telephone_mobile }}</h5>
                                    @if($clientRappel->heure_rappel != null)
                                        <h6 data-color="orange">Demande de rappel entre : {{ $clientRappel->heure_rappel }}</h6>
                                    @else
                                        <h6 data-color="orange">Pas de demande de rappel</h6>
                                    @endif
                                    <p class="">{{ $clientRappel->dateFormatted()}}</p>
                                    <div class="contact-action">
                                        <a class="btn btn-success btn-sm" data-toggle="collapse" href="#collapse-{{ $clientRappel->id }}" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="collapse-{{ $clientRappel->id }}">
                                    <div class="card card-body">
                                        <form id="formLeadWeb{{ $clientRappel->id }}" method="post" action="{{ route('crm.previsite-accepter') }}">
                                            {{ csrf_field() }}
                                            <h5 class="m-b-20" data-color="orange"><span class="">1</span> - Identité du client:</h5>
                                            <div class="row">
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_monsieur{{ $clientRappel->id }}" value="monsieur" {{ $clientRappel->civilite == 'monsieur' ? 'checked' : '' }}>
                                                    <label for="civ_monsieur{{ $clientRappel->id }}" class="civilite">Monsieur</label>
                                                </div>
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_madame{{ $clientRappel->id }}" value="madame" {{ $clientRappel->civilite == 'madame' ? 'checked' : '' }}>
                                                    <label for="civ_madame{{ $clientRappel->id }}" class="civilite">Madame</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Nom</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="nom" value="{{ strtoupper($clientRappel->nom) }}">
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
                                                        <input type="text" class="form-control" name="rue" value="{{ strtoupper($clientRappel->rue) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Code Postal</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="code_postal" value="{{ strtoupper($clientRappel->codePostal) }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Ville</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="ville" value="{{ strtoupper($clientRappel->ville) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Numero telephone fixe</label>
                                                    <div class="">
                                                        <input type="text" class="form-control telephone_input" name="telephone_fixe" maxlength="14" value="{{ $clientRappel->telephone_fixe }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Numero telephone mobile</label>
                                                    <div class="">
                                                        <input type="text" class="form-control telephone_input" name="telephone_mobile" maxlength="14" value="{{ $clientRappel->telephone_mobile }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">2</span> - Situation :</h5>
                                            <div class="row m-b-20">
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-proprietaire{{ $clientRappel->id }}" value="proprietaire" {{ $clientRappel->type_bail == 'proprietaire' ? 'checked' : '' }} >
                                                    <label for="client-proprietaire{{ $clientRappel->id }}" class="type-bail-client">Propriétaire</label>
                                                </div>
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-locataire{{ $clientRappel->id }}" value="locataire" {{ $clientRappel->type_bail == 'locataire' ? 'checked' : '' }} >
                                                    <label for="client-locataire{{ $clientRappel->id }}" class="type-bail-client">Locataire</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Revenu fiscal de référence</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="revenu_fiscal" value="{{ $clientRappel->revenu_fiscal }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Nombre dans le foyer</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="nombre_personne" value="{{ $clientRappel->nombre_personne }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">3</span> - Système de chauffage :</h5>
                                            <div class="row m-b-20 block-checkbox">
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-electrique{{ $clientRappel->id }}" value="Electrique" {{ $clientRappel->chauffage == 'Electique' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-electrique{{ $clientRappel->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-electricite2"></i><span>Electricité</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-gaz{{ $clientRappel->id }}" value="Gaz" {{ $clientRappel->chauffage == 'Gaz' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-gaz{{ $clientRappel->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-gaz2"></i><span>Gaz</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-bois{{ $clientRappel->id }}" value="Bois" {{ $clientRappel->chauffage == 'Bois' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-bois{{ $clientRappel->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-bois2"></i><span>Bois</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-fioul{{ $clientRappel->id }}" value="Fioul" {{ $clientRappel->chauffage == 'Fioul' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-fioul{{ $clientRappel->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-fioul"></i><span>Fioul</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-pompe{{ $clientRappel->id }}" value="Pompe à chaleur" {{ $clientRappel->chauffage == 'Pompe à chaleur' ? 'checked' : '' }}>
                                                    <label for="type-chauffage-pompe{{ $clientRappel->id }}" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-pompe"></i><span>Pompe</span></label>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">4</span> - Types d'isolation :</h5>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_combles" id="type-isolation-combles{{ $clientRappel->id }}"  value="1" {{ $clientRappel->isolation_combles == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-combles{{ $clientRappel->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-combles-form"></i><span>Combles perdus</span></label>
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
                                                        <input type="radio" id="accescombles1{{ $clientRappel->id }}" value="trappe" name="isolation_combles_accee">
                                                        <label for="accescombles1{{ $clientRappel->id }}">Trappe</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles2{{ $clientRappel->id }}" value="debaras" name="isolation_combles_accee">
                                                        <label for="accescombles2{{ $clientRappel->id }}">Débaras</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles3{{ $clientRappel->id }}" value="detuilage" name="isolation_combles_accee">
                                                        <label for="accescombles3{{ $clientRappel->id }}">Détuilage</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="text-center">Type d'isolant :</h6>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles1{{ $clientRappel->id }}" value="déroulé" name="isolation_combles_type">
                                                        <label for="isolantcombles1{{ $clientRappel->id }}">Déroulé</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles2{{ $clientRappel->id }}" value="soufflé" name="isolation_combles_type">
                                                        <label for="isolantcombles2{{ $clientRappel->id }}">Soufflé</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_garage" id="type-isolation-garage{{ $clientRappel->id }}" value="1" {{ $clientRappel->isolation_garage == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-garage{{ $clientRappel->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-garage-form"></i><span>Garage</span></label>
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
                                                    <input type="checkbox" class="checkbox" name="isolation_caves" id="type-isolation-cave{{ $clientRappel->id }}" value="1" {{ $clientRappel->isolation_caves == '1' ? 'checked' : '' }}>
                                                    <label for="type-isolation-cave{{ $clientRappel->id }}" class="type-isolation"><i class="icon-fantastic icon-isolation-cave-form"></i><span>Caves/sous-sols</span></label>
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
                @endforeach
            </div>
        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->
@endsection
@section('javascript')
    <script>
        @if(Session::has('success'))
        $.Notification.notify('success','top center','Opération enregistré', '{{ Session::get('success') }}');
        @endif
    </script>
@endsection