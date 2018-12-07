<!--Formulaire éligibilité overlay-->
<div id="section-overlay2" class="section-overlay">
    <div class="section-overlay-bg">
        <div class="bg-overlay">
            <a href="" id="close-overlay"><i class="far fa-times-circle"></i></a>
            <div class="container-fluid wizard-container">
                <h3 class="wizard-title text-white text-center mt-10">Profitez de l'isolation des garages, caves et vide-sanitaire pour 1€</h3>
                <div class="row justify-content-center mb-30">
                    <div class="card wizard-card wizard-card-sol" id="wizard-card-test" data-color="vert">
                        <form id="eligibFormSol" role="form">
                            {{ csrf_field() }}
                            <div class="wizard-header">
                                <p class="wizard-sub-title mb-15">On vous rappelle sous 48 heures</p>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#habitation" data-toggle="tab">Habitation</a></li>
                                    <li><a href="#energie" data-toggle="tab">Energie</a></li>
                                    <li><a href="#isolation" data-toggle="tab">Isolation</a></li>
                                    <li><a href="#situation" data-toggle="tab">Situation</a></li>
                                    <li><a href="#informations" data-toggle="tab">Infos</a></li>
                                </ul>
                            </div>
                            <div id="bar" class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="habitation">
                                    <div class="row justify-content-center">
                                        <h4 class="info-text">Quelle est votre type d'habitation?</h4>
                                    </div>
                                    <div class="row justify-content-md-center row_type_habitation mt-30">
                                        <div class="col-6 col-md-4">
                                            <div class="choice type_habitation" data-toggle="wizard-radio" rel="tooltip" title="Selectionnez cette option si vous habitez une maison.">
                                                <input type="radio" class="type_habitation" name="type_habitation" value="maison">
                                                {{--<div class="icon">
                                                    <i class="icon-fantastic icon-icon-house"></i>
                                                </div>
                                                <h6>Maison</h6>--}}
                                                <div class="card card-radio card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-icon-house"></i>
                                                        <h6>Maison</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="choice type_habitation" data-toggle="wizard-radio" rel="tooltip" title="Selectionnez cette option si vous habitez un appartement">
                                                <input type="radio" class="type_habitation" name="type_habitation" value="appartement">
                                                {{--<div class="icon">
                                                    <i class="icon-fantastic icon-icon-appartement"></i>
                                                </div>
                                                <h6>Appartement</h6>--}}
                                                <div class="card card-radio card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-icon-appartement"></i>
                                                        <h6>Appartement</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div>
                                            <input type="radio" id="huey" name="drone" value="maison"
                                                   checked>
                                            <label for="huey">maison</label>
                                        </div>

                                        <div>
                                            <input type="radio" id="dewey" name="drone" value="appartement">
                                            <label for="dewey">Appartement</label>
                                        </div>--}}
                                    </div>
                                </div>
                                <div class="tab-pane" id="energie">
                                    <div class="row justify-content-center">
                                        <div class="">
                                            <h4 class="info-text mb-10">Quel est votre système de chauffage?</h4>
                                            <p class="text-center info-bois" data-color="bleue-clair">Selectionnez "Bois" si vous utilisez une cheminée pour vous chauffer.</p>
                                        </div>
                                    </div>
                                    <div class="row block-chauffage-row justify-content-md-center">
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="type_chauffage" value="electrique">
                                                {{--<div class="icon">
                                                    <i class="icon-fantastic icon-icon-chauffage-electricite2"></i>
                                                </div>
                                                <h6>Electricité</h6>--}}
                                                <div class="card card-radio card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-icon-chauffage-electricite2"></i>
                                                        <h6>Electricité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="type_chauffage" value="gaz">
                                                <div class="card card-radio card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-icon-chauffage-gaz2"></i>
                                                        <h6>Gaz</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="type_chauffage" value="bois">
                                                <div class="card card-radio card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-icon-chauffage-bois2"></i>
                                                        <h6>Bois</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="type_chauffage" value="fioul">
                                                <div class="card card-radio card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-icon-chauffage-fioul"></i>
                                                        <h6>Fioul</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio"  name="type_chauffage" value="pompe à chaleur">
                                                <div class="card card-radio card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-icon-chauffage-pompe"></i>
                                                        <h6>Pompe</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio"  name="type_chauffage" value="autres">
                                                <div class="card card-radio card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-icon-chauffage-electricite2"></i>
                                                        <h6>Autre</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="isolation">
                                    <div class="row justify-content-center">
                                        <div>
                                            <h4 class="info-text mb-10">Quelles sont les isolations à faire chez vous?</h4>
                                            <p class="text-center sub-title">Vous pouvez choisir plusieurs types d'isolation.</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center col-xs-mt-30">
                                        <div class="col-6 col-md-4">
                                            <div class="choice type_isolation" data-toggle="wizard-checkbox">
                                                <input type="checkbox" class="checkbox" name="isolation_garage" value="1">
                                                <div class="card card-checkboxes card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-isolation-garage-form"></i>
                                                        <h6>Garages en Rdc/sous-sol</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="choice type_isolation" data-toggle="wizard-checkbox">
                                                <input type="checkbox" class="checkbox" name="isolation_caves" value="1">
                                                <div class="card card-checkboxes card-hover-effect">
                                                    <div class="icon">
                                                        <i class="icon-fantastic icon-isolation-cave-form"></i>
                                                        <h6>Caves / vide-sanitaire</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="situation">
                                    <div class="row justify-content-center">
                                        <h4 class="info-text">Préciser la surface totale à isoler.</h4>
                                    </div>
                                    <div class="row row-block-personne justify-content-center mt-30">
                                        <div class="col-12 col-sm-6">
                                            <select class="selectpicker" name="surface">
                                                <option value="moins de 40m2">Moins de 40m2</option>
                                                <option value="Entre 40 et 60m2">Entre 40 et 60m2</option>
                                                <option value="Entre 60 et 80m2">Entre 60 et 80m2</option>
                                                <option value="Entre 80 et 100m2">Entre 80 et 100m2</option>
                                                <option value="Plus de 100m2<">Plus de 100m2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mt-30">
                                        <div class="col-xs-12">
                                            <h4 class="info-text">Quel est votre code postal?</h4>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group code-postal label-floating">
                                                {{--<label class="control-label">Code postal</label>--}}
                                                <input type="text" class="form-control" id="code_postal" minlength="5" maxlength="5" name="code_postal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="informations">
                                    <div class="row justify-content-around mt-md-30">
                                        {{--<div class="col-6">
                                            <div class="choice civilite" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="civilite" value="madame">
                                                <div class="icon">
                                                    <i class="icon-fantastic icon-icon-woman"></i>
                                                </div>
                                                <h6>Madame</h6>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="choice civilite" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="civilite" value="monsieur">
                                                <div class="icon">
                                                    <i class="icon-fantastic icon-icon-man"></i>
                                                </div>
                                                <h6>Monsieur</h6>
                                            </div>
                                        </div>--}}
                                        <div class="col-6 col-sm-5">
                                            <div class="choice civilite" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="civilite" value="monsieur">
                                                        Madame
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-5">
                                            <div class="choice civilite" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="civilite" value="monsieur">
                                                        Monsieur
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around mt-md-10 mb-md-10">
                                        <div class="col-6 col-sm-5">
                                            <div class="choice type_bail" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type_bail" value="propriétaire">
                                                        Propriétaire
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-5">
                                            <div class="choice type_bail" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type_bail" value="locataire">
                                                        Locataire
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around">
                                        <div class="col-xs-12 col-md-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Nom</label>
                                                <input type="text" class="form-control" name="nom">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Telephone</label>
                                                <input type="text" class="form-control telephone_input" name="telephone" minlength="14" maxlength="14">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="phoneForm">
                                    <div class="phoneForm-block">
                                        <div class="row spinner-block justify-content-center">
                                            <svg class="spinner" width="150px" height="150px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
                                            </svg>
                                        </div>
                                        <div class="info-resultat mt-40" id="info-resultat-ok">
                                            <div id="info-block-ok" class="info-block d-flex flex-column align-items-center mb-10">
                                                <svg id="eligible-ok" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                    <circle class="path circle" fill="none" stroke="#8ab326" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                    <polyline class="path check" fill="none" stroke="#8ab326" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                                </svg>
                                                <h4 class="mt-20 text-center">Votre inscription a été pris en compte</h4>
                                                <h5 class="text-center mt-10" data-color="orange"><i class="ion-ios7-telephone" data-color="orange"></i> Nous vous rappelons en moins de 48 heures</h5>
                                                <form id="eligibRappel"role="form">
                                                    {{ csrf_field() }}
                                                    <h6 id="text-disponibilite" class="text-center mt-0">Selectionnez vos disponibilités:</h6>
                                                    <div class="block-eligibRappel">
                                                        <div class="row justify-content-between">
                                                            <div class="col-3">
                                                                <div class="choice type_heure_rappel" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                                    <input type="radio" name="heure_rappel" id="type_heure-1" value="9h-12h">
                                                                    <div class="">
                                                                        <i class="icon-fantastic icon-icon-matin"></i>
                                                                    </div>
                                                                    <p class="text-heure">9h-12h</p>
                                                                    <h6>Matin</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="choice type_heure_rappel" id="btn-maison" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                                    <input type="radio" name="heure_rappel" id="type_heure-2" value="12h-14h">
                                                                    <div class="">
                                                                        <i class="icon-fantastic icon-icon-midi"></i>
                                                                    </div>
                                                                    <p class="text-heure">12h-15h</p>
                                                                    <h6>Midi</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="choice type_heure_rappel" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                                    <input type="radio" name="heure_rappel" id="type_heure-3" value="14h-18h">
                                                                    <div class="">
                                                                        <i class="icon-fantastic icon-icon-apres-midi"></i>
                                                                    </div>
                                                                    <p class="text-heure">15h-18h</p>
                                                                    <h6>Après-midi</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="choice type_heure_rappel" id="btn-maison" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                                    <input type="radio" name="heure_rappel" id="type_heure-4" value="16h-1!h">
                                                                    <div class="">
                                                                        <i class="icon-fantastic icon-icon-soir"></i>
                                                                    </div>
                                                                    <p class="text-heure">18h-21h</p>
                                                                    <h6>Soir</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="info-resultat mt-20" id="info-phone-ok">
                                            <div class="info-block d-flex flex-column align-items-center mb-10">
                                                <h3 class=" text-center mt-40">Votre demande a été prise en compte.</h3>
                                                <p class=" text-center">Nous vous rappellerons très rapidement.</p>
                                                <h4 class="text-center mt-20 mb-30" data-color="vert">Participez à l'amélioration des habitats</h4>
                                                <h5 class="text-center text-partage gras_500" >Faîtes profiter votre famille et vos amis de l'isolation à 1€, ils vous remercieront!</h5>
                                                <h5 class="text-center mt-20" data-color="bleue-clair">Partagez notre programme</h5>
                                                <button type="button" role="button" target="_blank" id="share_facebook2" class="btn btn-facebook waves-effect waves-light share_facebook">
                                                    <i class="fa fa-facebook m-r-5"></i> Facebook
                                                </button>
                                            </div>
                                        </div>
                                        <div class="info-resultat" id="info-resultat-none">
                                            <div class="info-block d-flex flex-column align-items-center mb-10">
                                                <svg id="eligible-none" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                    <circle class="path circle" fill="none" stroke="#ee7626" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                    <line class="path line" fill="none" stroke="#ee7626" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
                                                    <line class="path line" fill="none" stroke="#ee7626" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
                                                </svg>
                                                <h4 class="text-center mt-20">Vous n'êtes pas éligible au programme d'isolation pour 1€</h4>
                                                <h5 class="text-center mt-20" id="text-cause-none" data-color="orange"></h5>
                                                <h5 class="text-center text-partage gras_500 mt-40" data-color="vert">Faîtes quand même profiter votre famille et vos amis de l'isolation à 1€, ils vous remercieront!</h5>
                                                <h5 class="text-center mt-20">Partagez notre programme</h5>
                                                <button type="button" role="button" target="_blank" id="share_facebook3" class="btn btn-facebook waves-effect waves-light share_facebook">
                                                    <i class="fa fa-facebook m-r-5"></i> Facebook
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="block-button row justify-content-between">
                                    <div class="">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Précédent' />
                                    </div>
                                    <div class="">
                                        <input type='button' id="btn-phone-test" class='btn btn-finish-phone btn-fill btn-orange btn-wd' value='Envoyer' />
                                    </div>
                                    <div class="">
                                        <input type='button' class='btn btn-next btn-fill btn-orange btn-wd' name='next' value='Suivant' />
                                        <input type='button' id="btn-finish-test" class='btn btn-finish btn-fill btn-orange btn-wd' name='finish' value="S'inscrire" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
            {{--<div class="container benefit-overlay">
                <div class="row justify-content center d-flex flex-md-row flex-column">
                    <div class="benefit-block d-flex flex-column align-items-center">
                        <h3 class="text-white mb-40"><i class="far fa-sun mr-10" data-color="orange"></i>L'été</h3>
                        <p class="mb-30">Cette isolation se révélera efficace en été en ralentissant l’impact du rayonnement solaire et donc de la chaleur vers l’intérieur de l’habitation.</p>
                        <p data-color="orange">Vous consommez moins d'énergie pour rafraîchir l'intérieur de votre maison.</p>
                    </div>
                    <div class="benefit-block d-flex flex-column align-items-center">
                        <h3 class="text-white mb-40"><i class="far fa-snowflake mr-10" data-color="bleue"></i>L'hiver</h3>
                        <p class="mb-30">Cette isolation se révélera efficace en empêchant l'air chauffé à l'intérieur de votre habitation de s'échapper vers l'extérieur de la maison.</p>
                        <p class="gras_500" data-color="bleue">Vous consommez moins pour vous chauffer et vous économisez sur vos factures de chauffage.</p>
                    </div>
                </div>
            </div>--}}
            <!-- Testimonials section -->
        </div>
    </div>
</div>

@section('javascript')
    <script>

    </script>
@endsection



