@extends('crm.layouts.main')
@section('navigation')
    @include('crm.layouts.navigation')
@endsection
@section('content')
    <div class="wrapper m-t-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="card-box">
                        <div class="contact-card">
                            <div class="" id="block-client">
                                <div class="card card-body">
                                    <form id="formLeadDemarchage" method="post"  action="{{ route('crm.previsite-accepter') }}">
                                        <h5 class="m-b-20" data-color="orange"><span class="">1</span> - Identité du client:</h5>
                                        <div class="row">
                                            <div class="col-6 type_civilite">
                                                <input type="radio" class="radio" name="civilite" id="civ_monsieur" value="monsieur" checked>
                                                <label for="civ_monsieur" class="civilite">Monsieur</label>
                                            </div>
                                            <div class="col-6 type_civilite">
                                                <input type="radio" class="radio" name="civilite" id="civ_madame" value="madame">
                                                <label for="civ_madame" class="civilite">Madame</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="">Nom</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="nom" value="">
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
                                                    <input type="text" class="form-control" name="rue" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="">Code Postal</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="code_postal" value="">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="">Ville</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="ville" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="">Numero telephone fixe</label>
                                                <div class="">
                                                    <input type="text" class="form-control telephone_input" name="telephone_fixe" maxlength="14" value="">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="">Numero telephone mobile</label>
                                                <div class="">
                                                    <input type="text" class="form-control telephone_input" name="telephone_mobile" maxlength="14" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="m-b-20" data-color="orange"><span class="">2</span> - Situation :</h5>
                                        <div class="row m-b-20">
                                            <div class="col-md-6 type_bail">
                                                <input type="radio" class="radio" name="type_bail" id="client-proprietaire" value="proprietaire" checked >
                                                <label for="client-proprietaire" class="type-bail-client">Propriétaire</label>
                                            </div>
                                            <div class="col-md-6 type_bail">
                                                <input type="radio" class="radio" name="type_bail" id="client-locataire" value="locataire" >
                                                <label for="client-locataire" class="type-bail-client">Locataire</label>
                                            </div>
                                        </div>
                                        <h5 class="m-b-20" data-color="orange"><span class="">3</span> - Système de chauffage :</h5>
                                        <div class="row m-b-20 block-checkbox">
                                            <div class="col block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-electrique" value="Electrique" >
                                                <label for="type-chauffage-electrique" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-electricite2"></i><span>Electricité</span></label>
                                            </div>
                                            <div class="col block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-gaz" value="Gaz" >
                                                <label for="type-chauffage-gaz" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-gaz2"></i><span>Gaz</span></label>
                                            </div>
                                            <div class="col block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-bois" value="Bois" >
                                                <label for="type-chauffage-bois" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-bois2"></i><span>Bois</span></label>
                                            </div>
                                            <div class="col block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-fioul" value="Fioul" >
                                                <label for="type-chauffage-fioul" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-fioul"></i><span>Fioul</span></label>
                                            </div>
                                            <div class="col block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-pompe" value="Pompe à chaleur" >
                                                <label for="type-chauffage-pompe" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-pompe"></i><span>Pompe</span></label>
                                            </div>
                                        </div>
                                        <h5 class="m-b-20" data-color="orange"><span class="">4</span> - Types d'isolation :</h5>
                                        <div class="row m-b-20 bordered-row align-items-end">
                                            <div class="col col-4 block-isolation">
                                                <input type="checkbox" class="checkbox" name="isolation_combles" id="type-isolation-combles"  value="1" >
                                                <label for="type-isolation-combles" class="type-isolation"><i class="icon-fantastic icon-isolation-combles-form"></i><span>Combles perdus</span></label>
                                            </div>
                                            <div class="form-group col-8">
                                                <label class="">Surface m2</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="isolation_combles_surface" value="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h6 class="m-b-20">Accès aux combles :</h6>
                                                <div class="radio radio-success form-check-inline">
                                                    <input type="radio" id="accescombles1" value="trappe" name="isolation_combles_accee" >
                                                    <label for="accescombles1">Trappe</label>
                                                </div>
                                                <div class="radio radio-success form-check-inline">
                                                    <input type="radio" id="accescombles2" value="debaras" name="isolation_combles_accee" >
                                                    <label for="accescombles2">Débaras</label>
                                                </div>
                                                <div class="radio radio-success form-check-inline">
                                                    <input type="radio" id="accescombles3" value="detuilage" name="isolation_combles_accee" >
                                                    <label for="accescombles3">Détuilage</label>
                                                </div>
                                            </div>
                                            <div class="col-12 m-b-20">
                                                <h6 class="m-b-20 m-t-20">Type d'isolant :</h6>
                                                <div class="radio radio-success form-check-inline">
                                                    <input type="radio" id="isolantcombles1" value="déroulé" name="isolation_combles_type" >
                                                    <label for="isolantcombles1">Déroulé</label>
                                                </div>
                                                <div class="radio radio-success form-check-inline">
                                                    <input type="radio" id="isolantcombles2" value="soufflé" name="isolation_combles_type" >
                                                    <label for="isolantcombles2">Soufflé</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-b-20 bordered-row align-items-end">
                                            <div class="col-4 block-isolation">
                                                <input type="checkbox" class="checkbox" name="isolation_garage" id="type-isolation-garage" value="1" >
                                                <label for="type-isolation-garage" class="type-isolation"><i class="icon-fantastic icon-isolation-garage-form"></i><span>Garage</span></label>
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
                                                <input type="checkbox" class="checkbox" name="isolation_caves" id="type-isolation-cave" value="1" >
                                                <label for="type-isolation-cave" class="type-isolation"><i class="icon-fantastic icon-isolation-cave-form"></i><span>Caves/sous-sols</span></label>
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
                                                        <div class="">
                                                            <input type="checkbox" class="switch-caves" name="cave_voutee" value="1" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" name="isolation_voutee_surface" class="form-control" value="">
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
                                                <input type="text" class="form-control" name="isolation_source" value="lead-demarchage" hidden>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" name="situation" value="" hidden>
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
            </div>
        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->
@endsection