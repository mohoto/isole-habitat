<!--Formulaire éligibilité overlay-->
<div id="section-overlay" class="section-overlay">
    <div class="section-overlay-bg">
        <div class="bg-overlay">
            <a href="" id="close-overlay"><i class="far fa-times-circle"></i></a>
            <div class="container-fluid wizard-container">
                <h2 class="text-center text-white mb-30 titre">300 000 foyers ont déjà profité de l'isolation à 1€</h2>
                <div class="row justify-content-center mb-30">
                    <div class="card wizard-card" id="wizard-card-test" data-color="vert">
                        <form id="eligibForm">
                            {{ csrf_field() }}
                            <div class="wizard-header">
                                <h3 class="wizard-title">Testez votre éligibilité</h3>
                                <p class="mb-0">Sans engagement - Réponse immédiate</p>
                                <p class="mb-0" data-color="vert">Dispositif CEE mis en place par l'Etat</p>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#habitation" data-toggle="tab">Habitation</a></li>
                                    <li><a href="#energie" data-toggle="tab">Energie</a></li>
                                    <li><a href="#isolation" data-toggle="tab">Isolation</a></li>
                                    <li><a href="#situation" data-toggle="tab">Situation</a></li>
                                    <li><a href="#revenu" data-toggle="tab">Revenu</a></li>
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
                                    <div class="row justify-content-md-center row_type_habitation mt-md-40">
                                        <div class="col-xs-12 col-md-4">
                                            <div class="choice type_habitation" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" class="type_habitation" name="type_habitation" value="maison">
                                                <div class="icon">
                                                    <i class="icon-fantastic icon-icon-house"></i>
                                                </div>
                                                <h6>Maison</h6>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <div class="choice type_habitation" id="btn-maison" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" class="type_habitation" name="type_habitation" value="appartement">
                                                <div class="icon">
                                                    <i class="icon-fantastic icon-icon-appartement"></i>
                                                </div>
                                                <h6>Appartement</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="energie">
                                    <div class="row justify-content-center">
                                        <div class="">
                                            <h4 class="info-text mb-10">Quel est votre système de chauffage?</h4>
                                            <p class="text-center info-bois" data-color="bleue-site">Selectionnez "Bois" si vous utilisez une cheminée pour vous chauffer.</p>
                                        </div>
                                    </div>
                                    <div class="row block-chauffage-row justify-content-md-center">
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="type_chauffage" id="type-chauffage-electrique" value="electrique">
                                                <div class="icon">
                                                    <i class="icon-fantastic icon-icon-chauffage-electricite2"></i>
                                                </div>
                                                <h6>Electricité</h6>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="type_chauffage" id="type-chauffage-gaz" value="gaz">
                                                <div class="icon">
                                                    <i class="icon-fantastic icon-icon-chauffage-gaz2"></i>
                                                </div>
                                                <h6>Gaz</h6>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="type_chauffage" id="type-chauffage-bois" value="bois">
                                                <div class="icon">
                                                    <i class="icon-fantastic icon-icon-chauffage-bois2"></i>
                                                </div>
                                                <h6>Bois</h6>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="type_chauffage" id="type-chauffage-fioul" value="fioul">
                                                <div class="icon">
                                                    <i class="icon-fantastic icon-icon-chauffage-fioul"></i>
                                                </div>
                                                <h6>Fioul</h6>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio"  name="type_chauffage" id="type-chauffage-pompe" value="pompe à chaleur">
                                                <div class="icon">
                                                    <i class="icon-fantastic icon-icon-chauffage-pompe"></i>
                                                </div>
                                                <h6>Pompe</h6>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type-chauffage" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio"  name="type_chauffage" id="type-chauffage-autre" value="autres">
                                                <div class="icon">
                                                    <i class="fas fa-question"></i>
                                                </div>
                                                <h6>Autres</h6>
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
                                    <div class="row justify-content-around col-xs-mt-30">
                                        <div class="col-4">
                                            <div class="choice type_isolation" data-toggle="wizard-checkbox">
                                                <input type="checkbox" class="checkbox" name="isolation_combles" value="1">
                                                <div class="card card-checkboxes card-hover-effect">
                                                    <i class="icon-fantastic icon-isolation-combles-form"></i>
                                                    <p>Combles</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type_isolation" data-toggle="wizard-checkbox">
                                                <input type="checkbox" class="checkbox" name="isolation_garage" value="1">
                                                <div class="card card-checkboxes card-hover-effect">
                                                    <i class="icon-fantastic icon-isolation-garage-form"></i>
                                                    <p>Garages</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="choice type_isolation" data-toggle="wizard-checkbox">
                                                <input type="checkbox" class="checkbox" name="isolation_caves" value="1">
                                                <div class="card card-checkboxes card-hover-effect">
                                                    <i class="icon-fantastic icon-isolation-cave-form"></i>
                                                    <p>Caves<span class="text-suppl">/sous-sols</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="situation">
                                    <div class="row justify-content-center">
                                        <h4 class="info-text">Nombre total de personnes dans votre foyer?</h4>
                                    </div>
                                    <div class="row row-block-personne justify-content-center">
                                        <div class="item_nb_personne col-3 col-md">
                                            <div class="choice nombre-personne" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="nombre_personne" value="1">
                                                <div class="icon">
                                                    <h6>1</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item_nb_personne col-3">
                                            <div class="choice nombre-personne" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="nombre_personne" value="2">
                                                <div class="icon">
                                                    <h6>2</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item_nb_personne col-3">
                                            <div class="choice nombre-personne" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="nombre_personne" value="3">
                                                <div class="icon">
                                                    <h6>3</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item_nb_personne col-3">
                                            <div class="choice nombre-personne" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="nombre_personne" value="4">
                                                <div class="icon">
                                                    <h6>4</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item_nb_personne col-3">
                                            <div class="choice nombre-personne" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="nombre_personne" value="5">
                                                <div class="icon">
                                                    <h6>5</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item_nb_personne col-3">
                                            <div class="choice nombre-personne" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="nombre_personne" value="6">
                                                <div class="icon">
                                                    <h6>6</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item_nb_personne col-3">
                                            <div class="choice nombre-personne" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="nombre_personne" value="7">
                                                <div class="icon">
                                                    <h6>7</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item_nb_personne col-3">
                                            <div class="choice nombre-personne" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="nombre_personne" value="8">
                                                <div class="icon">
                                                    <h6>8</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xs-12">
                                            <h4 class="info-text">Quel est votre code postal?</h4>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Code postal</label>
                                                <input type="text" class="form-control" id="code_postal" minlength="5" maxlength="5" name="code_postal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="revenu">
                                    <div class="row justify-content-center">
                                        <div class="">
                                            <h4 class="info-text">Quel est votre revenu fiscal de référence?</h4>
                                            <p class="text-center info-revenu-text mb-0" data-color="bleue-site">Comment connaître votre revenu fiscal de référence</p>
                                            <p class="text-center"><a href="#" class="info-revenu"><i class="ion-ios7-help-outline" data-color="vert"></i></a></p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mt-0">
                                        <div class="col-xs-8 col-md-4">
                                            <div class="choice revenus_reference" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" id="revenus_reference_moins" name="revenus_reference" value="">
                                                <div class="icon">
                                                    <h6>Moins de <br /><span class="revenu_fiscal"></span></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-md-4">
                                            <div class="choice revenus_reference" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" id="revenus_reference_plus" name="revenus_reference" value="">
                                                <div class="icon">
                                                    <h6>Plus de <br /><span class="revenu_fiscal"></span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="informations">
                                    <div class="row justify-content-around justify-content-md-center mt-md-30">
                                        <div class="col-6">
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
                                        </div>
                                    </div>
                                    <div class="row justify-content-around justify-content-md-center mt-md-10 mb-md-10">
                                        <div class="col-6">
                                            <div class="choice type_bail" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="type_bail" value="propriétaire">
                                                        Propriétaire
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
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
                                        <div class="info-resultat mt-20" id="info-resultat-ok">
                                            <div id="info-block-ok" class="info-block d-flex flex-column align-items-center mb-10">
                                                <svg id="eligible-ok" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                    <circle class="path circle" fill="none" stroke="#8ab326" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                    <polyline class="path check" fill="none" stroke="#8ab326" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                                </svg>
                                                <h4 class="mt-20 text-center">Vous êtes éligible au programme d'isolation pour 1€</h4>
                                                <h5 class="text-center mt-10" data-color="orange"><i class="ion-ios7-telephone" data-color="orange"></i> Nous vous rappelons<span class="text-muted"> en moins de 24 heures</span></h5>
                                                <form id="eligibRappel" role="form">
                                                    {{ csrf_field() }}
                                                    <h6 class="text-center text-muted mt-0">Selectionnez vos disponibilités:</h6>
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
                                                <h5 class="text-center mt-20" data-color="vert">Partagez notre programme</h5>
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
                                        <input type='button' class='btn btn-next btn-fill btn-vert btn-wd' name='next' value='Suivant' />
                                        <input type='button' id="btn-finish-test" class='btn btn-finish btn-fill btn-vert btn-wd' name='finish' value='Tester' />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
            <div class="container benefit-overlay">
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
            </div>
            <!-- Testimonials section -->
            <div class="container testimonials-overlay">
                <h2 class="mb-40 text-center" data-color="bleue-clair">Ils ont profité de l'isolation à 1€ en Mai avec <span data-color="vert">Isole </span><span class="text-habitat" data-color="orange">HABITAT </span></h2>
                <div class="row mb-40">
                    <div class="card-deck">
                        <div class="card">
                            <!-- Card content -->
                            <div class="card-body white-text rounded-bottom">
                                <!-- Text -->
                                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="vert"></i>
                                <p class="testimonial-content">J’ai isolé mes combles début mai pendant les jours de grandes chaleurs. Agréablement surprise de sentir <span class="gras_500">l’air beaucoup plus frais et respirable à l’intérieur</span> de la maison. <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                                <div class="info-testimonial d-flex align-items-end">
                                    <div>
                                        <img src="{{ asset('images/photo-temoignage4.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                                    </div>
                                    <div class="info-testimonial-client ml-10">
                                        <p class="testimonial-name">Laurence</p>
                                        <p class="testimonial-dept">Lognes(77)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-xs-mt-30">
                            <!-- Card content -->
                            <div class="card-body white-text rounded-bottom">
                                <!-- Text -->
                                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="vert"></i>
                                <p class="testimonial-content">Je ne connaissais pas du tout et j'avoue que j'étais un peu sceptique au départ, mais c’est réel et sans arnaque. <span class="gras_500">J’ai donné une pièce de 1€ une fois la pose finie</span>. <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                                <div class="info-testimonial d-flex align-items-end">
                                    <div>
                                        <img src="{{ asset('images/photo-temoignage5.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                                    </div>
                                    <div class="info-testimonial-client ml-10">
                                        <p class="testimonial-name">Salah</p>
                                        <p class="testimonial-dept">Stains(93)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-xs-mt-30">
                            <!-- Card content -->
                            <div class="card-body white-text rounded-bottom">
                                <!-- Text -->
                                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="vert"></i>
                                <p class="testimonial-content">Une pose rapide et le service en plus. <span class="gras_500">Avoir une isolation sans rien payer, pourquoi ne pas en profiter!</span> Je recommande vraiment. <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                                <div class="info-testimonial d-flex align-items-end">
                                    <div>
                                    <img src="{{ asset('images/photo-temoignage6.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                                    </div>
                                    <div class="info-testimonial-client ml-10">
                                        <p class="testimonial-name">Yves</p>
                                        <p class="testimonial-dept">Brunoy(91)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('javascript')
    <script>

    </script>
@endsection



