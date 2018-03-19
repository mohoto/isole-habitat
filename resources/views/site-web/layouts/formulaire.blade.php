<section class="section pt-0 pb-0" id="section-formulaire" data-background-color="bleue-clair">
    <div class="container-fluid">
        {{--<p class="text-center text-muted">45% des foyers sont éligibles à l'isolation à 1 €</p>--}}
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 mb-20">
                <h4 class="text-center gras_500 mb-30 mt-30" data-color="orange">Une mauvaise isolation est l'un des facteurs les plus importants de la «précarité énergétique».</h4>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-7">
                <div id="block-form">
                    <div class="form-header text-center">
                        <h2 class="text-center text-white gras_500">Vous pouvez aussi profiter de cette aide.</h2>
                        <h4 class="" data-color="orange">Testez votre éligibilité</h4>
                        <p class="text-white">Réponse immédiate - Sans aucun engagement</p>
                    </div>
                    {{--<form id="eligibForm" role="form" method="post" action="formulaire-eligibilite">--}}
                    <form id="eligibForm">
                        <div class="form-body">
                            {{ csrf_field() }}
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab" id="info-maison-client">
                                <div class="info-block d-flex flex-column justify-content-around">
                                    <div>
                                        <p class="titre_input"><span>1-</span>Selectionnez votre système de chauffage :</p>
                                        <div class="row block-checkbox">
                                            <div class="col-md col-xs-12 block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-electrique" value="Electrique">
                                                <label for="type-chauffage-electrique" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-electricite2"></i><span>Electricité</span></label>
                                            </div>
                                            <div class="col-md col-xs-12 block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-gaz" value="Gaz">
                                                <label for="type-chauffage-gaz" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-gaz2"></i><span>Gaz</span></label>
                                            </div>
                                            <div class="col-md col-xs-12 block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-bois" value="Bois">
                                                <label for="type-chauffage-bois" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-bois2"></i><span>Bois</span></label>
                                            </div>
                                            <div class="col-md col-xs-12 block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-fioul" value="Fioul">
                                                <label for="type-chauffage-fioul" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-fioul"></i><span>Fioul</span></label>
                                            </div>
                                            <div class="col-md col-xs-12 block-chauffage">
                                                <input type="radio" class="radio" name="type_chauffage" id="type-chauffage-pompe" value="Pompe à chaleur">
                                                <label for="type-chauffage-pompe" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-pompe"></i><span>Pompe</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="titre_input"><span>2-</span>La surface au sol de votre maison :</p>
                                        <div class="row">
                                            <div class="col-md col-xs-12 block-surface">
                                                <input type="radio" class="radio" name="type_surface" id="type-surface-1" value="Moins de 70m2" checked>
                                                <label for="type-surface-1" class="type-surface"><i class="icon-fantastic icon-icon-surface4"></i><span>Moins de 70m2</span></label>
                                            </div>
                                            <div class="col-md col-xs-12 block-surface">
                                                <input type="radio" class="radio" name="type_surface" id="type-surface-2" value="Entre 70 et 100m2">
                                                <label for="type-surface-2" class="type-surface"><i class="icon-fantastic icon-icon-surface4"></i><span>Entre 70 et 100m2</span></label>
                                            </div>
                                            <div class="col-md col-xs-12 block-surface">
                                                <input type="radio" class="radio" name="type_surface" id="type-surface-3" value="Plus de 100m2">
                                                <label for="type-surface-3" class="type-surface"><i class="icon-fantastic icon-icon-surface4"></i><span>Plus de 100m2</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="titre_input"><span>3-</span>Les isolations à faire dans votre maison :</p>
                                        <div class="row block-checkbox">
                                            <div class="col-4 block-isolation">
                                                <input type="checkbox" class="checkbox" name="isolation_combles" id="type-isolation-combles" value="1">
                                                <label for="type-isolation-combles" class="type-isolation"><i class="icon-fantastic icon-isolation-combles-form"></i><span>Combles</br>perdus</span></label>
                                            </div>
                                            {{--<div class="col block-isolation">
                                                <input type="checkbox" class="checkbox" name="type_isolation" id="type-isolation-mur" required="required" value="Mme">
                                                <label for="type-isolation-mur" class="type-isolation"><i class="icon-fantastic icon-isolation-mur-form"></i><span>Garage</br>mitoyen</span></label>
                                            </div>--}}
                                            <div class="col-4 block-isolation">
                                                <input type="checkbox" class="checkbox" name="isolation_garage" id="type-isolation-garage" value="1">
                                                <label for="type-isolation-garage" class="type-isolation"><i class="icon-fantastic icon-isolation-garage-form"></i><span>Garage</br>atelier</span></label>
                                            </div>
                                            <div class="col-4 block-isolation">
                                                <input type="checkbox" class="checkbox" name="isolation_caves" id="type-isolation-cave" value="1">
                                                <label for="type-isolation-cave" class="type-isolation"><i class="icon-fantastic icon-isolation-cave-form"></i><span>Caves</br>sous-sols</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="info-situation-client">
                                <div class="info-block d-flex flex-column justify-content-around">
                                    <div>
                                        <p class="titre_input"><span>4-</span>Vous êtes :</p>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <input type="radio" class="radio" name="type_bail" id="client-proprietaire" value="proprietaire" checked>
                                                <label for="client-proprietaire" class="type-bail-client">Propriétaire</label>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <input type="radio" class="radio" name="type_bail" id="client-locataire" value="locataire">
                                                <label for="client-locataire" class="type-bail-client">Locataire</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="titre_input"><span>5-</span>Nombre de personnes dans le foyer <a href="#" class="info-foyer"><i class="ion-ios7-help-outline" data-color="orange"></i></a>:</p>
                                        <div class="row">
                                            <div class="col-4 block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-1" value="1" checked>
                                                <label for="nombre-personne-1" class="nombre-personne">1</label>
                                            </div>
                                            <div class="col-4 block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-2" value="2">
                                                <label for="nombre-personne-2" class="nombre-personne">2</label>
                                            </div>
                                            <div class="col-4 block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-3" value="3">
                                                <label for="nombre-personne-3" class="nombre-personne">3</label>
                                            </div>
                                            <div class="col-4 block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-4" value="4">
                                                <label for="nombre-personne-4" class="nombre-personne">4</label>
                                            </div>
                                            <div class="col-4 block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-5" value="5">
                                                <label for="nombre-personne-5" class="nombre-personne">5</label>
                                            </div>
                                            <div class="col-4 block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-6" value="6">
                                                <label for="nombre-personne-6" class="nombre-personne">6</label>
                                            </div>
                                            <div class="col-4 block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-7" value="7">
                                                <label for="nombre-personne-7" class="nombre-personne">7</label>
                                            </div>
                                            <div class="col-4 block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-8" value="8">
                                                <label for="nombre-personne-8" class="nombre-personne">8</label>
                                            </div>
                                            <div class="col-4 block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-9" value="9">
                                                <label for="nombre-personne-9" class="nombre-personne">9</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <p class="titre_input"><span>6-</span>Votre revenu fiscal de référence <a href="#" class="info-revenu"><i class="ion-ios7-help-outline" data-color="orange"></i></a> :</p>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="revenus_reference" name="revenus_reference" maxlength="6" Placeholder="19 650€">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <p class="titre_input"><span>7-</span>Votre code postal:</p>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="code_postal" maxlength="5" Placeholder="Code postal">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="info-client">
                                <div class="info-block d-flex flex-column justify-content-around">
                                    <p>Pour savoir si vous pouvez bénéficier de l'isolation de votre maison pour 1€, merci de compléter les informations ci-dessous.</p>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <input type="radio" class="radio" name="civilite" id="civ_monsieur" value="monsieur" checked>
                                                <label for="civ_monsieur" class="civilite">Monsieur</label>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <input type="radio" class="radio" name="civilite" id="civ_madame" value="madame">
                                                <label for="civ_madame" class="civilite">Madame</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nom" Placeholder="Nom">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control telephone_input" name="telephone" maxlength="14" Placeholder="N° Mobile ou Fixe">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="rue" Placeholder="N°, rue, av, bd ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="phoneForm">
                                <div class="info-resultat" id="info-resultat-ok">
                                    <div class="info-block d-flex flex-column justify-content-around">
                                        <div>
                                            <svg id="eligible-ok" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                <circle class="path circle" fill="none" stroke="#8ab326" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                <polyline class="path check" fill="none" stroke="#8ab326" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                            </svg>
                                            <h5>Vous êtes éligible au programme d'isolation pour 1€</h5>
                                        </div>
                                        <div>
                                            <div class="d-flex flex-column align-items-center align-items-md-start flex-md-row">
                                                <div>
                                                    <img src="{{ asset('images/assistance-telephonique.jpg') }}" class="assistace_phone_img rounded-circle" alt="Demande assistace telephonique isole habitat">
                                                </div>
                                                <div class="ml-20">
                                                    <p class="descrip_ok">Profitez de conseils d'experts pour l'isolation de votre maison et bénéficier de notre programme.</p>
                                                    <h6 class="" data-color="orange"><i class="ion-ios7-telephone mr-10"></i>Nous vous rappelons<span class="text-muted"> en moins de 24 heures</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-resultat" id="info-resultat-none">
                                    <div class="info-block d-flex flex-column justify-content-around">
                                        <div>
                                            <svg id="eligible-none" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                <circle class="path circle" fill="none" stroke="#ee7626" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                <line class="path line" fill="none" stroke="#ee7626" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
                                                <line class="path line" fill="none" stroke="#ee7626" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
                                            </svg>
                                            <h5>Vous n'êtes pas éligible au programme d'isolation pour 1€</h5>
                                            <P>Vos revenus dépassent le plafond de revenus définit par l'ADEME. <span class="gras_500">Vous pouvez cependant bénéficier</span> de la <span class="gras_500" data-color="orange">Prime Energie</span>, déduite directement sur votre facture, pour vos travaux d'isolation.</P>
                                        </div>
                                        <div>
                                            <div class="d-flex flex-column align-items-center align-items-md-start flex-md-row">
                                                <div>
                                                    <img src="{{ asset('images/assistance-telephonique.jpg') }}" class="assistace_phone_img rounded-circle" alt="Demande assistace telephonique isole habitat">
                                                </div>
                                                <div class="ml-20">
                                                    <p class="descrip_none">Profitez de <span class="gras_500">conseils d'experts</span> pour l'isolation de votre maison. Nous nous engageons à vous établir <span class="gras_700" data-color="orange">un devis gratuitement</span>  et <span class="gras_700" data-color="orange">sans aucun engagement</span>.</p>
                                                    <h6 data-color="orange"><i class="ion-ios7-telephone mr-10"></i>Nous vous rappelons</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div id="eligibRappel" role="form">
                                            {{ csrf_field() }}
                                            <p class="text-center">Selectionnez vos disponibilités:</p>
                                            <div class="row mt-20">
                                                <div class="col-6 col-md-3 block-heure">
                                                    <input type="radio" class="radio" name="heure_rappel" id="type_heure-1" value="9h-12h" checked>
                                                    <label for="type_heure-1" class="type-heure">9h-12h</label>
                                                </div>
                                                <div class="col-6 col-md-3 block-heure">
                                                    <input type="radio" class="radio" name="heure_rappel" id="type_heure-2" value="12h-14h">
                                                    <label for="type_heure-2" class="type-heure">12h-14h</label>
                                                </div>
                                                <div class="col-6 col-md-3 block-heure">
                                                    <input type="radio" class="radio" name="heure_rappel" id="type_heure-3" value="14h-18h">
                                                    <label for="type_heure-3" class="type-heure">14h-18h</label>
                                                </div>
                                                <div class="col-6 col-md-3 block-heure">
                                                    <input type="radio" class="radio" name="heure_rappel" id="type_heure-4" value="18-20h">
                                                    <label for="type_heure-4" class="type-heure">18h-20h</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-20 justify-content-center">
                                <div class="tab-block-btn col-xs-12 col-md-6 order-2 order-md-1" id="tab-block-prev">
                                    <button type="button" id="prevBtn" class="btn btn-rounded btn-formulaire btn-default2">Précédent</button>
                                </div>
                                <div class="tab-block-btn col-xs-12 col-md-6 order-md-2" id="tab-block-next">
                                    <button type="button" id="nextBtn" class="btn btn-rounded btn-formulaire btn-vert" data-id="">Suivant</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{--<div class="spinner-form">
                        <i class="fa fa-spin fa-circle-o-notch"></i>
                    </div>--}}
                    <div id="loaderEligible" class="loader"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-fonctionnement" data-background-color="bleue-clair">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="steps-timeline d-flex">
                    <div class="block-step" id="block-step1">
                        <div class="circle-block-step" id="circle1">
                            <i class="ion-checkmark-round"></i>
                        </div>
                        <h3 class="steps-name">Testez votre éligibilité</br>Réponse immédiate</h3>
                    </div>
                    <div class="block-step" id="block-step2">
                        <div class="circle-block-step" id="circle2">
                            <i class="ion-ios7-telephone"></i>
                        </div>
                        <h3 class="steps-name">On vous rapelle</br>sous 24 heures</h3>
                    </div>
                    <div class="block-step" id="block-step3">
                        <div class="circle-block-step" id="circle3">
                            <i class="ion-ios7-person"></i>
                        </div>
                        <h3 class="steps-name">On se déplace</br>pour une visite technique</h3>
                    </div>
                    <div class="block-step" id="block-step4">
                        <div class="circle-block-step" id="circle4">
                            <i class="ion-hammer"></i>
                        </div>
                        <h3 class="steps-name">Travaux sous 7 jours</br>En moins de 4 heures</h3>
                    </div>
                    <div class="block-step" id="block-step5">
                        <div class="circle-block-step" id="circle5">
                            <i class="ion-home"></i>
                        </div>
                        <h3 class="steps-name">Votre maison est isolée</br>Commencez à économiser</h3>
                    </div>
                </div><!-- /.steps-timeline -->
            </div>
        </div>
    </div>
</section>

@section('javascript')
    <script>
        function checkRadioBox(){
            var valid = true;
            var heure_eligible = document.forms['eligibleForm'].elements['heure_rappel'];
            for(var i=0; i<heure_eligible.length; i++){
                if (heure_eligible[i].checked){
                    val = heure_eligible[i].value;
                    break;
                }else{
                    alert('selectionnez un système de chauffage');
                    valid = false;
                }
            }
            return valid;
        }
        /*****Wizard function*******/
        var currentTab = 0;
        var prevButton = document.querySelector('#prevBtn');
        var nextButton = document.querySelector('#nextBtn');
        var tabBlockNext = document.querySelector('#tab-block-next');
        var tabBlockPrev = document.querySelector('#tab-block-prev');
        function initTab(){
            currentTab = 0;
            //tabBlock.style.width = "100%";
            tabBlockPrev.style.display = "none";
            //nextButton.style.width = "50%";
            //prevButton.style.display = "none";
            nextButton.classList.remove('btn-orange');
            nextButton.classList.add('btn-vert');
            nextButton.innerHTML = "Suivant";

        }
        showTab(currentTab);
        function showTab(n){
            var x = document.querySelectorAll('.tab');
            x[n].style.display = "block";
            if(n == 0) {
                initTab();
            }
            else if(n == (x.length-2)) {
                tabBlockPrev.style.display = "block";
                nextButton.innerHTML = "Tester maintenant";
//nextButton.addEventListener('click', testEligibilite);
            }
            else if(n == (x.length-1)) {
                tabBlockPrev.style.display = "none";
                nextButton.classList.remove('btn-vert');
                nextButton.classList.add('btn-orange');
                nextButton.innerHTML = "Me rappeler";
             }
            else {
                tabBlockPrev.style.display = "block";
                nextButton.innerHTML = "Suivant";
                //tabBlock.style.width = "50%";
                //nextButton.style.width = "100%";
                //prevButton.style.display = "block";
            }

        }
        var prev = document.querySelector('#prevBtn');
        prev.addEventListener('click', function(){
            var x = document.querySelectorAll('.tab');
            x[currentTab].style.display =  "none";
            currentTab -= 1;
            showTab(currentTab);
        });

        var next = document.getElementById('nextBtn');
        next.addEventListener('click', function() {
            var x = document.querySelectorAll('.tab');
            if(currentTab == 0){
                /*if(checkRadioBox() && checkCheckBox()){

                }*/
                x[currentTab].style.display = "none";
                currentTab += 1;
                showTab(currentTab);
            }
            else if(currentTab == x.length - 2){
                 var data = $('#eligibForm').serializeArray();
                 $.ajaxSetup({
                     headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                 });
                 $.ajax({
                     type: 'post',
                     url: '{{ route('site-web.formulaire-eligibilite') }}',
                     data: data,
                     dataType: 'JSON',
                     success: function(response){
                         x[currentTab].style.display =  "none";
                         currentTab += 1;
                         showTab(currentTab);
                         $('.info-resultat').css('opacity', '0');
                         $('.tab-block-btn').css('opacity', '0');
                         $('#eligibRappel').css('opacity', '0');
                         $('#loaderEligible').css('display', 'block');
                         setTimeout(function(){
                             $('#loaderEligible').fadeOut(500);
                             $('.info-resultat').css('opacity', '1');
                             $('.tab-block-btn').css('opacity', '1');
                             $('#eligibRappel').css('opacity', '1');
                             if(response.situation == 'grand-précaire'){
                                 $('#info-resultat-ok').css('display', 'block');
                                 nextButton.setAttribute('data-id', response.id);
                             }else{
                                 $('#info-resultat-none').css('display', 'block');
                             }
                         },2000)
                     }
                });
             }
            else if (currentTab == x.length - 1) {
                //x[currentTab].style.display = "none";
                //currentTab = 0;
                //showTab(currentTab);
                //document.querySelector('#info-resultat-ok').style.display = "none";
                //document.querySelector('#info-resultat-none').style.display = "none";
                 function getHourValEligible(){
                     var val;
                     var heure_eligible = $('input[name= "heure_rappel"]');
                     for(var i=0; i<heure_eligible.length; i++){
                         if (heure_eligible[i].checked){
                             val = heure_eligible[i].value;
                             break;
                         }
                     }
                     return val;
                 }
                 var heure_rappel = getHourValEligible();
                 var idUrl = nextButton.getAttribute('data-id');
                 $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                 });
                 $.ajax({
                     type: 'post',
                     url: "formulaire-eligibilite-rappel/" + idUrl,
                     data: {heure_rappel: heure_rappel},
                     dataType: 'JSON',
                     success: function(response){
                         swal({
                             text: "<h4 class='mt-20 mb-20' data-color='orange'>Votre demande a été prise en compte</h4><p>Un conseiller isolation vous rappellera rapidement</p><p><strong data-color='orange'>Entre " + response.heureRappel + "</strong></p>",
                             timer: 3000,
                             showConfirmButton: false
                         });
                     }
                 });
            }
             else{
                x[currentTab].style.display = "none";
                currentTab += 1;
                showTab(currentTab);
             }
        });
    </script>
@endsection

