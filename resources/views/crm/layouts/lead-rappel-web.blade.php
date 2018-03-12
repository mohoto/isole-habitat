@extends('layouts.main')
@section('content')
    <div class="wrapper m-t-40">
        <div class="container-fluid">
            <div class="row">
                @foreach($clientRappels as $clientRappel)
                    <div class="col-sm-6 col-lg-6">
                        <div class="card-box">
                            <div class="contact-card">
                                <div class="member-info">
                                    <h4 class="m-t-10 m-b-5">{{ ucfirst($clientRappel->civilite) }}<b> {{ strtoupper($clientRappel->nom) }}</b></h4>
                                    <h5 data-color="orange"><i class="fa fa-phone"></i> {{ $clientRappel->telephone }}</h5>
                                    <p class="text-dark"><i class="md md-business m-r-10"></i><small>ABC company Pvt Ltd.</small></p>
                                    <h5 data-color="orange">Rappeler entre : {{ $clientRappel->heure_rappel }}</h5>
                                    <span class="label label-warning">{{ $clientRappel->dateFormatted()}}</span>
                                    <div class="contact-action">
                                        <a class="btn btn-success btn-sm" data-toggle="collapse" href="#collapse-{{ $clientRappel->id }}" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="collapse-{{ $clientRappel->id }}">
                                    <div class="card card-body">
                                        <form id="formulairLead">
                                            <h5 class="m-b-20" data-color="orange"><span class="">1</span> - Identité du client:</h5>
                                            <div class="row">
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_M" required="required" value="monsieur">
                                                    <label for="civ_M" class="civilite">Monsieur</label>
                                                </div>
                                                <div class="col-6 type_civilite">
                                                    <input type="radio" class="radio" name="civilite" id="civ_Mme" required="required" value="madame">
                                                    <label for="civ_Mme" class="civilite">Madame</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="">Nom</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" value="{{ strtoupper($clientRappel->nom) }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Prenom</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="nom" value="">
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
                                                        <input type="text" class="form-control" name="tel_fixe" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="">Numero telephone mobile</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="tel_mobile" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">2</span> - Situation :</h5>
                                            <div class="row m-b-20">
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-proprietaire" value="proprietaire">
                                                    <label for="client-proprietaire" class="type-bail-client">Propriétaire</label>
                                                </div>
                                                <div class="col-md-6 type_bail">
                                                    <input type="radio" class="radio" name="type_bail" id="client-locataire" value="locataire">
                                                    <label for="client-locataire" class="type-bail-client">Locataire</label>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">3</span> - Système de chauffage :</h5>
                                            <div class="row m-b-20 block-checkbox">
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-electrique" value="Electrique">
                                                    <label for="type-chauffage-electrique" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-electricite2"></i><span>Electricité</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-gaz" value="Gaz">
                                                    <label for="type-chauffage-gaz" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-gaz2"></i><span>Gaz</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-bois" value="Bois">
                                                    <label for="type-chauffage-bois" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-bois2"></i><span>Bois</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-fioul" value="fioul">
                                                    <label for="type-chauffage-fioul" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-fioul"></i><span>Fioul</span></label>
                                                </div>
                                                <div class="col block-chauffage">
                                                    <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-pompe" value="Pompe à chaleur">
                                                    <label for="type-chauffage-pompe" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-pompe"></i><span>Pompe</span></label>
                                                </div>
                                            </div>
                                            <h5 class="m-b-20" data-color="orange"><span class="">4</span> - Types d'isolation :</h5>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_combles" id="type-isolation-combles"  value="1">
                                                    <label for="type-isolation-combles" class="type-isolation"><i class="icon-fantastic icon-isolation-combles-form"></i><span>Combles perdus</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="text-center">Accès aux combles :</h6>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles1" value="trappe" name="accescombles">
                                                        <label for="accescombles1">Trappe</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles2" value="debaras" name="accescombles">
                                                        <label for="accescombles2">Débaras</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="accescombles3" value="detuilage" name="accescombles">
                                                        <label for="accescombles3">Détuilage</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h6 class="text-center">Type d'isolant :</h6>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles1" value="option1" name="isolantcombles">
                                                        <label for="isolantcombles1">Déroulé</label>
                                                    </div>
                                                    <div class="radio radio-success form-check-inline">
                                                        <input type="radio" id="isolantcombles2" value="option1" name="isolantcombles">
                                                        <label for="isolantcombles2">Soufflé</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_garage" id="type-isolation-garage" value="1">
                                                    <label for="type-isolation-garage" class="type-isolation"><i class="icon-fantastic icon-isolation-garage-form"></i><span>Garage</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" name="isolation_garage_surface" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-b-20 bordered-row align-items-end">
                                                <div class="col-4 block-isolation">
                                                    <input type="checkbox" class="checkbox" name="isolation_caves" id="type-isolation-cave" value="1">
                                                    <label for="type-isolation-cave" class="type-isolation"><i class="icon-fantastic icon-isolation-cave-form"></i><span>Caves/sous-sols</span></label>
                                                </div>
                                                <div class="form-group col-8">
                                                    <label class="">Surface m2</label>
                                                    <div class="">
                                                        <input type="text" name="isolation_caves_surface" class="form-control" value="">
                                                    </div>
                                                </div>
                                                <div class="switchery-demo">
                                                    <div class="">
                                                        <input type="checkbox" class="js-switch">
                                                        {{--<input type="checkbox" class="js-switch" checked="" data-plugin="switchery" data-color="#ffbd4a" data-size="large" data-switchery="true" style="display: none;">--}}
                                                    </div>
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

    <!-- Modal -->
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Add Contact</h4>
        <div class="custom-modal-text text-left">
            <form role="form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" id="position" placeholder="Enter position">
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" placeholder="Enter company">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
                <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
            </form>
        </div>
    </div>
@endsection