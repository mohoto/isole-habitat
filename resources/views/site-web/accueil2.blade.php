@extends('site-web.layouts.main')
@section('pageTitle', 'isolez votre maison pour 1 euro')
@section('pageClass', 'page_accueil')
@section('content')
<!-- HOME -->
<section class="" id="home">
    <div class="container">
        <div class="row hero mt-50 mb-40 justify-content-center align-items-center">
            <div class="col-sm-12 col-md-6">
                <img class="img-fluid block-center mb-30" src="{{ asset('images/isolation-1euro-5.jpg') }}" alt="illustration reportage sur l'isolation à 1€ sur M6" style="width: 400px;" />
                <div class="part2 text-center mb-0">
                    <h1 class="mb-20" data-color="vert">ISOLEZ VOTRE MAISON POUR 1€</h1>
                    <h2 class=" sub-title mt-10" data-color="">Un programme pour lutter contre la précarité énergétique</h2>
                    <h3 class="text-center mt-0" data-color="orange">Dispositif CEE mis en place par l'Etat.</h3>
                    {{--<a href="#" class="btn btn-rounded btn-vert btn-formulaire">Tester votre éligibilité</a>--}}
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <!--   Big container   -->
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="vert" id="wizard">
                        <form action="" method="">
                            <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->
                            <div class="wizard-header">
                                <h3 class="wizard-title">Tester votre éligibilité</h3>
                                <p class="">Dispositif CEE mis en place par l'Etat</p>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#location" data-toggle="tab">Location</a></li>
                                    <li><a href="#type" data-toggle="tab">Type</a></li>
                                    <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
                                    <li><a href="#description" data-toggle="tab">Description</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="location">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Let's start with the basic details</h4>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">City</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Country</label>
                                                <select name="country" class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option value="Afghanistan"> Afghanistan </option>
                                                    <option value="Albania"> Albania </option>
                                                    <option value="Algeria"> Algeria </option>
                                                    <option value="American Samoa"> American Samoa </option>
                                                    <option value="Andorra"> Andorra </option>
                                                    <option value="Angola"> Angola </option>
                                                    <option value="Anguilla"> Anguilla </option>
                                                    <option value="Antarctica"> Antarctica </option>
                                                    <option value="...">...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Accommodates</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>1 Person</option>
                                                    <option>2 Persons </option>
                                                    <option>3 Persons</option>
                                                    <option>4 Persons</option>
                                                    <option>5 Persons</option>
                                                    <option>6+ Persons</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Rent price</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-addon">$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="type">
                                    <h4 class="info-text">What type of location do you have? </h4>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="type" value="House">
                                                <div class="icon">
                                                    <i class="material-icons">home</i>
                                                </div>
                                                <h6>House</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="type" value="Appartment">
                                                <div class="icon">
                                                    <i class="material-icons">hotel</i>
                                                </div>
                                                <h6>Appartment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="facilities">
                                    <h4 class="info-text">Tell us more about facilities. </h4>
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Your place is good for</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>Business</option>
                                                    <option>Vacation </option>
                                                    <option>Work</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Is air conditioning included ?</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Does your place have wi-fi?</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Is breakfast included?</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="description">
                                    <div class="row">
                                        <h4 class="info-text"> Drop us a small description. </h4>
                                        <div class="col-sm-6 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Place description</label>
                                                <textarea class="form-control" placeholder="" rows="9"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Example</label>
                                                <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-vert btn-wd' name='next' value='Suivant' />
                                    <input type='button' class='btn btn-finish btn-fill btn-vert btn-wd' name='finish' value='Tester' />
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Précédent' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->
<!-- Features -->
<section class="section" id="features">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-1-euro-1"></i>
                    <p class="">Aucun frais à avancer, 1€ seulement</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-surface4"></i>
                    <p class="">Surface illimitée pour votre isolation</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-percent"></i>
                    <p class="">Economie sur votre facture de chauffage</p>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end Features -->
<section class="section pt-20" id="section-presentation1" data-background-color="bleue-clair">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mb-40">
                    <!-- Card image -->
                    <div class="view overlay">
                        <div class="block-video">
                            <img src="{{ asset('images/temoignage-video-isolation-1-euro.jpg') }}" alt="illustration reportage sur l'isolation à 1€ sur M6" />
                        </div>
                    </div>
                    <!-- Card content -->
                    <div class="card-body white-text rounded-bottom  d-flex justify-content-center align-items-center">
                        <p class="text-center">L'isolation à 1 euro : une réalité peu connue</p>
                        <a id="video-btn-digital2" class="video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/AD2uWiN3LFY" data-target="#myModal"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Vous êtes propriétaire ou locataire d'une maison individuelle, </span><span class="gras_500" data-color="orange">vous pouvez vous aussi profiter de lisolation à 1 euro</span> : <span class="gras_500">Une aide</span> mise en place pour soutenir <span class="gras_500">les foyers mal isolés</span>*.</h2>
                <p class="text-center">*Sous conditions d'éligibilité.</p>
            </div>
        </div>
    </div>
</section>
<!-- Section-formulaire -->
{{--@include('site-web.layouts.formulaire')--}}
<!-- end section-formulaire -->
<section class="section" id="section-explication" data-background-color="bleue-clair">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center gras_500 mt-40 mb-50"><span data-color="vert">L'isolation de votre maison : </span>Des avantages en toutes saisons.</h2>
                <div class="d-flex mt-50">
                    <div class="block-explication">
                        <h3 class="text-center">Votre maison <span class="gras_500" data-color="rouge">sans</span> isolation</h3>
                        <img src="{{ asset('images/maison-sans-isolation.png') }}" alt="illustraion d'une maison sans l'isolation thermique">
                        <ul class="list-non-benefit">
                            <li><i class="far fa-times-circle"></i><span class="gras_500">En été :</span> La chaleur extérieur rentre dans votre habitation</li>
                            <li><i class="far fa-times-circle"></i><span class="gras_500">En été :</span> L’air frais s’échappe vers l’extérieur</li>
                            <li class="mt-20"><i class="far fa-times-circle"></i><span class="gras_500">En hiver :</span> La chaleur s’échappe par la toiture et le sol</li>
                            <li><i class="far fa-times-circle"></i><span class="gras_500">En hiver :</span> Vous consommez plus d’énergie pour vous chauffer</li>
                        </ul>
                    </div>
                    <div class="block-explication">
                        <h3 class="text-center">Votre maison <span class="gras_500" data-color="vert">avec</span> isolation</h3>
                        <img src="{{ asset('images/maison-avec-isolation.png') }}" alt="illustraion d'une maison avec l'isolation thermique">
                        <ul class="list-benefit">
                            <li><i class="fas fa-check"></i><span class="gras_500">En été :</span> Empêche la chaleur de rentrer à l’intérieur</li>
                            <li><i class="fas fa-check"></i><span class="gras_500">En été :</span> Garde la fraîcheur à l’intérieur de votre maison</li>
                            <li class="mt-20"><i class="fas fa-check"></i><span class="gras_500">En hiver :</span> Garde la chaleur à l’intérieur de votre maison</li>
                            <li><i class="fas fa-check"></i><span class="gras_500">En hiver :</span> Vous consommez moins d’énergie pour vous chauffer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-50">
            <div class="col-md-12">
                <h3 class="text-center  mb-30"><span class="gras_500" data-color="vert">Testez votre éligibilité</span> et profitez de l'isolation de votre maison pour 1€</h3>
                <div class="d-flex justify-content-center">
                    <ul class="list-benefit-total">
                        <li><i class="fas fa-arrow-right"></i>Test sans aucun engagement</li>
                        <li><i class="fas fa-arrow-right"></i>Une réponse immédiate</li>
                        <li><i class="fas fa-arrow-right"></i>Aucun frais à avancer pour votre isolation</li>
                        <li><i class="fas fa-arrow-right"></i>Pour 1€ symbolique</li>
                        <li><i class="fas fa-arrow-right"></i>Dispositif CEE validé par l'Etat</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-questions mt-40" id="section-questions1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mb-40">
                <img src="{{ asset('images/mascotte.jpg') }}" class="mascotte-isole-habitat block-center mb-10" alt="illustration mascotte isole habitat ">
                <h2 class="text-center gras_500" data-color="vert">Isoler ma maison pour 1€ : Comment est-ce possible?</h2>
            </div>
        </div>
        <div class="row justify-content-around mb-40 mt-30">
            <div class="col-md-5 col-sm-12 block-question-title">
                <h3 class="">Pourquoi est-il nécessaire d'isoler ma maison ?</h3>
                <p><span class="gras_500" data-color="orange">Plus de 30% des logements français sont en précarité énergétique</span>. Les ménages qui vivent dans ces logements ont des consommations d’énergie importantes.</p>
                <p>Les parois mal isolées laissent passer <span class="gras_500" data-color="orange">le froid en hiver</span> et <span class="gras_500" data-color="orange">la chaleur en été</span>. 30% de l'air ambiant de votre maison s'échappe par la toiture, 25% par les murs et 10% par le sol.</p>
                <p class="">En isolant votre maison, vous <span class="gras_500" data-color="orange">consommez moins d'énergie</span> pour vous chauffer <span class="gras_500" data-color="orange">en hiver</span> et vous évitez la <span class="gras_500" data-color="orange">chaleur inconfortable</span> l'été.</p>
                <p>En consommant moins d'énergie, vous <span class="gras_500" data-color="orange">économisez sur votre facture</span> de chauffage.</p>
            </div>
            <div class="col-md-5 col-sm-12 block-question-title">
                <h3 class="">Qui paye pour mes travaux d'isolation ?</h3>
                <p><span class="gras_500" data-color="orange">Ce sont les fourniseurs d'énergie</span> : Total, Elf, EDF, Poweo.., qui financent vos travaux d'isolation.</p>
                <p><span class="gras_500" data-color="orange">L'État</span>, par le biais de la loi "POPE" (Loi n° 2005-781 du 13 juillet 2005, loi de Programmation fixant les Orientations de la Politique Energétique), <span class="gras_500" data-color="orange">oblige ces fournisseurs d'énergie à financer certains travaux d'isolation, à travers le dispositif des certificats d’économies d’énergie (CEE)</span>, dans les foyers en précarité énergétique, sous peine d'amendes.</p>
                <p><span class="gras_500" data-color="orange">Les travaux réalisés</span> avec le programme d'isolation à 1€ rentrent dans ce dispositif et <span class="gras_500" data-color="orange">sont intégralement financés</span> et sans <span class="gras_500" data-color="orange">aucun frais à avancer</span>.</p>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-questions-cee">
    <div class="row justify-content-center" style="position: relative">
        <div class="col-lg-8 block-cee">
            <h4 class="text-center mb-20" data-color="vert">Un programme en accord avec le dispositif des certificats d’économie d’énergie (CEE) mis en place par le <span class="gras_500">Ministère de la Transition Écologique et Solidaire</span>.</h4>
            {{--<p>Le dispositif des certificats d’économies d’énergie (CEE) constitue l'un des principaux instruments de la politique de maîtrise de la demande énergétique.</p>--}}
            <p>Le dispositif des certificats d’économies d’énergie (CEE), créé en 2006 repose sur <span class="gras_500">une obligation de réalisation d’économies d’énergie imposée par les pouvoirs publics aux vendeurs d’énergie</span>. Ceux-ci doivent ainsi promouvoir activement l’efficacité énergétique auprès des consommateurs d’énergie : ménages, collectivités territoriales ou professionnels. Le 1er janvier 2018, le dispositif est entré dans sa 4ème période d’obligation.</p>
            <p class="text-muted text-source">source : Ministère de la Transition écologique et solidaire - </p>
            <a href="https://www.ecologique-solidaire.gouv.fr/dispositif-des-certificats-deconomies-denergie" target="_blank">https://www.ecologique-solidaire.gouv.fr/dispositif-des-certificats-deconomies-denergie</a>
            <img src="{{ asset('images/mascotte-cee.png') }}" class="mascotte-cee" alt="illustration des certificats d'économie d'énergie">
        </div>
    </div>
</section>
<section class="section section-questions" id="section-questions2">
    <div class="container">
        <div class="row justify-content-around mt-40">
            <div class="col-md-5 col-sm-12 block-question-title">
                <h3 class="">Je suis locataire : est-ce que je peux en bénéficier ?</h3>
                <p>Bien sûr, ce dispositif permet <span class="gras_500" data-color="orange">aux locataires et aux propriétaires</span> d'isoler leur maison. Même si vous avez déjà profité d'autres subventions de l'État (crédit d'impôt, aides de l'Anah, prime rénovation...), vous pouvez prétendre à l'isolation à 1 euro. <span class="gras_500" data-color="orange">Cette aide est cumulable avec tous les autres travaux d’aménagement</span> pour réduire la consomation énergétique.</p>
            </div>
            <div class="col-md-5 col-sm-12 block-question-title">
                <h3 class="">Comment je peux profiter de cette aide ?</h3>
                <p class="gras_500" data-color="orange">Seulement 2 conditions sont nécessaires pour être éligible au programme d'isolation à 1 euro :</p>
                <p><i class="fa fa-check mr-10" aria-hidden="true" data-color="vert"></i>Ne pas se chauffer uniquement à l'éléctricité</p>
                <p><i class="fa fa-check mr-10" aria-hidden="true" data-color="vert"></i>Ne pas dépasser le plafond de revenus définit par l'ADEME*</p>
            </div>
        </div>
        <div class="row justify-content-center mt-40 table-desktop">
            <div class="col-xs-12 col-md-9">
                <table class="table table-bordered">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Nombre de personnes</br>dans le foyer</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>Par personne</br> suppl.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Vous habitez :</th>
                        <td colspan="6">Plafond de Revenu fiscal de référence <a href="#" class="info-revenu"><i class="ion-ios7-help-outline" data-color="orange"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">En Ile-de-france</th>
                        <td>19 803 €</td>
                        <td>29 066 €</td>
                        <td>34 906 €</td>
                        <td>40 758 €</td>
                        <td>46 630 €</td>
                        <td>+ 5860 €</td>
                    </tr>
                    <tr>
                        <th scope="row">Dans les autres régions</th>
                        <td>14 308 €</td>
                        <td>20 925 €</td>
                        <td>25 166 €</td>
                        <td>29 400 €</td>
                        <td>33 642 €</td>
                        <td>+ 4241 €</td>
                    </tr>
                    </tbody>
                </table>
                <p class="text-muted text-center">*Agence De l'Environnement et de la Maitrise de l'Energie</p>
            </div>
        </div>
        <div class="row justify-content-center mt-40 table-phone">
            <div class="col-12 hidden-md-up">
                <table class="table table-bordered table-responsive">
                    <thead class="">
                    <tr>
                        <th>Nombre de personnes</br>dans le foyer</th>
                        <th colspan="2">Plafond de Revenu fiscal de référence <a href="#" class="info-revenu"><i class="ion-ios7-help-outline" data-color="orange"></i></a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>En Ile-de-France</td>
                        <td>Dans les autres régions</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>19 803 €</td>
                        <td>14 308 €</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>29 066 €</td>
                        <td>20 925 €</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>34 906 €</td>
                        <td>25 166 €</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>40 758 €</td>
                        <td>29 400 €</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>46 630 €</td>
                        <td>33 642 €</td>
                    </tr>
                    <tr>
                        <th scope="row">Par personne suppl.</th>
                        <td>+ 5860 €</td>
                        <td>+ 4241 €</td>
                    </tr>
                    </tbody>
                </table>
                <p class="text-muted text-center">*Agence De l'Environnement et de la Maitrise de l'Energie</p>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-zones">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xs-12 col-md-6">
                <h2 class="gras_700 text-center" data-color="vert">Zone H1</h2>
                <img src="{{ asset('images/carte-france-isolation3.svg') }}" class="image-region-intervention" alt="Carte des zones de France éligibles à lisolation pour 1€ ">
            </div>
            <div class="col-sm-12 col-md-6">
                <h3 class="mb-40">Les régions concernées :</h3>
                <p><span class="gras_500">L'État a définit 3 zones climatiques (H1, H2, H3)</span> pour les opérations d'aides mises en place pour réduire la consommation d'énergie.</p>
                <p>Vous habitez en  <span class="gras_500" data-color="vert">zone H1</span>, dans la région des <span class="gras_500" data-color="vert">Hauts-de-France</span>, en <span class="gras_500" data-color="vert">Normandie</span>, en <span class="gras_500" data-color="vert">Ile-de-France</span>, dans le <span class="gras_500" data-color="vert">Grand-Est</span>, en <span class="gras_500" data-color="vert">Centre Val-de-Loire</span>, en <span class="gras_500" data-color="vert">Bourgogne-Franche-Comté</span>, en <span class="gras_500" data-color="vert">Auvergne-Rhones-Alpes</span>, vous pouvez bénificier de l'isolation de votre maison pour 1€, sous conditions d'éligibilité.</p>
                {{--<p class="mt-40"><span class="gras_500" data-color="vert">Ce dispositif va être étendu à d'autres régions</span> de France. Nous vous proposons de vous tenir informé des dispositions qui seront prises pour bénificier de l'isolation à 1€ dans votre région.</p>
                <a href="" class="btn btn-custom mt-30">Je veux rester informé</a>--}}
            </div>
        </div>
        {{--<div class="row">
            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-center">
                <h3 data-color="orange">Région Hauts-de-France :</h3>
                <img src="{{ asset('images/region-haut-de-france.svg') }}" class="image-region-intervention" alt="carte isolation de la région hauts-de-France">
                <div class="info-bureau block-center">
                    <i class="ion-ios7-location-outline bureau-name-icon"></i><p class="bureau-name">Agence de LYS-LEZ-LANNOY</p>
                    <p class="bureau-adress">20 rue de Bapaume</p>
                    <p class="bureau-adress">59390 Lys-lez-Lanoy</p>
                    <p class="bureau-phone"><i class="ion-ios7-telephone-outline bureau-phone-icon"></i>03 74 56 00 00</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-center">
                <h3 data-color="orange">Région Ile-de-France :</h3>
                <img src="{{ asset('images/region-ile-de-france.svg') }}" class="image-region-intervention" alt="carte isolation de la région hauts-de-France">
                <div class="info-bureau">
                    <i class="ion-ios7-location-outline bureau-name-icon"></i><p class="bureau-name">Agence de BOBIGNY</p>
                    <p class="bureau-adress">28 rue de Eugène Varlin</p>
                    <p class="bureau-adress">93000 Bobigny</p>
                    <p class="bureau-phone"><i class="ion-ios7-telephone-outline bureau-phone-icon"></i>01 78 56 03 03</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-center">
                <h3 data-color="orange">Département de La Haute-Loire :</h3>
                <img src="{{ asset('images/departement-haute-loire.svg') }}" class="image-region-intervention" alt="carte isolation de la région hauts-de-France">
                <div class="info-bureau">
                    <i class="ion-ios7-location-outline bureau-name-icon"></i><p class="bureau-name"></i>Agence du PUY-EN-VELAY</p>
                    <p class="bureau-adress">2Zone d'activité du taulhac</p>
                    <p class="bureau-adress">43000 Le-Puy-en-Velay</p>
                    <p class="bureau-phone"><i class="ion-ios7-telephone-outline bureau-phone-icon"></i>04 71 71 03 03</p>
                </div>
            </div>
        </div>--}}
    </div>
</section>
<section class="section" id="section-information" data-background-color="bleue-clair">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 block-information" data-background-color="vert">
                <h3><i class="ion-ios7-plus-outline"></i> D'ECOLOGIE</h3>
                <img src="{{ asset('images/icon-ecologie.svg') }}" alt="img" class="img-fluid rounded">
                <p class="text-center" data-color="blanc">Réduit les dépenses énergétiques</p>
            </div>
            <div class="col-md-4 block-information" data-background-color="orange">
                <h3><i class="ion-ios7-plus-outline"></i> DE CONFORT</h3>
                <img src="{{ asset('images/icon-confort.svg') }}" alt="img" class="img-fluid rounded">
                <p class="text-center" data-color="blanc">Bien-être dans votre maison</p>
            </div>
            <div class="col-md-4 block-information" data-background-color="bleue">
                <h3><i class="ion-ios7-plus-outline"></i> D'ECONOMIE</h3>
                <img src="{{ asset('images/icon-economie.svg') }}" alt="illustration économie sur facture de chauffage" class="img-fluid rounded">
                <p class="text-center" data-color="blanc">D'économie sur votre facture de chauffage</p>
            </div>
        </div>
    </div>
</section>
<!-- Features -->
<section class="section" id="section-type-isolation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="title mb-40" data-color="vert">Les types d'isolation auxquels vous avez droit :</h2>
                <h3 class="mt-20" data-color="bleue">Avec l’isolation à 1€, vous pouvez cumuler ces 2 types d’isolation</h3>
                <h4 class="mt-20" data-color="orange">Surface illimitée!</h4>
            </div>
        </div> <!-- end row -->
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-combles.png') }}" srcset="{{ asset('images/icon-iso-combles.svg') }}" alt="illustration isolation des combles">
                    <h5 class="m-t-20">Isolation des combles perdus</h5>
                </div>
            </div>
            {{--<div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-mur.png') }}"srcset="{{ asset('images/icon-iso-mur.svg') }}" alt="">
                    <h5 class="m-t-20">Isolation des murs</h5>
                </div>
            </div>--}}
            <div class="col-sm-6 col-md-6">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-plancher.png') }}" srcset="{{ asset('images/icon-iso-plancher.svg') }}" alt="">
                    <h5 class="m-t-20">Isolation des caves et garages</h5>
                </div>
            </div>
        </div> <!-- end row -->
        <div class="row justify-content-around mt-30">
            <div class="col-xs-12 col-md-auto">
                <div id="rect-orange"></div>
                <p>Garage (en rez-de-chaussée ou en sous-sol), caves</p>
            </div>
            <div class="col-xs-12 col-md-auto">
                <div id="rect-bleue"></div>
                <p>Pièces à vivre</p>
            </div>
            <div class="col-xs-12 col-md-auto">
                <div id="rect-vert"></div>
                <p>Surface isolée</p>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end Features -->
<section class="section p-t-0" id="section-type-isolation2">
    <div class="container">
        <div class="row justify-content-around align-items-end">
            <div class="col-md-5">
                <div class="feat-description">
                    <h4 data-color="bleue">L'isolation de vos combles perdus</h4>
                    <p class="gras_500">Vous avez des combles que vous n'utilisez pas:</p>
                    <p class="text-muted">L'isolation des combles <span class="gras_500">empêche les pertes de chaleur en hiver</span> et permet de <span class="gras_500">garder la fraîcheur en été</span>. Deux techniques sont utilisées pour isoler vos combles perdus : la projection de  <span class="gras_500">laine de verre (ou de roche)</span> à souffler ou la pose de <span class="gras_500">rouleaux de laine de verre</span>, sur toute la surface des combles.</p>
                    {{--<a href="{{ route('site-web.isolation-combles') }}" class="btn btn-custom">Isolation des combles</a>--}}
                </div>
            </div>
            <div class="col-md-5 flex-first">
                <div style="position: relative";>
                    <img src="{{ asset('images/isolation-combles-soufflage.jpg') }}" alt="illustration projection de laine à souffler pour l'isolation des combles" class="img-fluid rounded">
                    <div class="bg-overlay">
                        <h4>Isolation des combles par soufflage de laine de verre</h4>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Epaisseur de l'isolant</th>
                                <th scope="col">Déperdition thermique</th>
                                <th scope="col">Economie sur votre facture de chauffage</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>28 à 35 cm</td>
                                <td>
                                    <span>jusqu'à</span> -25%
                                </td>
                                <td><span>jusqu'à</span> 20%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end features alt -->
<!-- Features Alt -->
{{--<section class="section" id="section-type-isolation3">
    <div class="container">
        <div class="row justify-content-around align-items-end">
            <div class="col-md-5">
                <div style="position: relative";>
                    <img src="{{ asset('images/technique-isolation-mur.jpg') }}" alt="img" class="img-fluid rounded">
                    <div class="bg-overlay">
                        <div style="position: relative";>
                            <h4>Isolation des murs avec panneaux de laine de verre</h4>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Epaisseur de l'isolant</th>
                                    <th scope="col">Déperdition thermique</th>
                                    <th scope="col">Economie sur votre facture de chauffage</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>12 à 14 cm</td>
                                    <td>
                                        <span>jusqu'à</span> -25%
                                    </td>
                                    <td><span>jusqu'à</span> 20%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="feat-description">
                    <h4 data-color="bleue">L'isolation des murs</h4>
                    <p class="gras_500">Vous avez un garage ou un atelier mitoyen à votre habitation :</p>
                    <p class="text-muted">L'isolation thermique des murs permet de <span class="gras_500">réduire les échanges thermiques</span> entre l'intérieur et l'extérieur des pièces à vivre de votre maison. Elle consiste à poser des <span class="gras_500">panneaux ou  rouleaux de laine de verre</span> sur le mur (du garage ou de l'atelier) touchant les pièces à vivre de votre maison.</p>
                    <a href="{{ route('site-web.isolation-murs') }}" class="btn btn-custom">Isolation des murs</a>
                </div>
            </div>
        </div><!-- end row -->
    </div> <!-- end container -->
</section>--}}
<!-- end features alt -->
<!-- Features Alt -->
<section class="section pt-10" id="section-type-isolation4">
    <div class="container">
        <div class="row justify-content-around align-items-end">
            <div class="col-md-5 order-2">
                <div style="position: relative";>
                    <img src="{{ asset('images/isolation-garage.jpg') }}" alt="img" class="img-fluid rounded">
                    <div class="bg-overlay">
                        <h4>Isolation du plafond de garage avec panneaux de polystyrène</h4>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Epaisseur de l'isolant</th>
                                <th scope="col">Déperdition thermique</th>
                                <th scope="col">Economie sur votre facture de chauffage</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>10 à 12 cm</td>
                                <td>
                                    <span>jusqu'à</span> -15%
                                </td>
                                <td><span>jusqu'à</span> 10%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-1">
                <div class="feat-description">
                    <h4 data-color="bleue">L'isolation des caves et garages</h4>
                    <p class="gras_500">Vous avez un garage en rez-de-chaussée ou en sous-sol, des caves:</p>
                    <p class="text-muted">En isolant le plafond de votre garage ou de votre cave, <span class="gras_500">vous isolez avant tout le sol de vos pièces à vivre</span> et vous évitez les déperditions thermiques à travers le sol.
                        Cette isolation est réalisée en posant des <span class="gras_500">panneaux de polystyrène ou de laine de verre</span> sur le plafond du garage ou des caves.</p>
                    {{--<a href="{{ route('site-web.isolation-sols') }}" class="btn btn-custom">Isolation des sols</a>--}}
                </div>
            </div>
        </div><!-- end row -->
    </div> <!-- end container -->
</section>
<section class="section pb-0" id="section-precarite-energetique" data-background-color="bleue-clair">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h2 class="gras_700 text-center mb-30" data-color="orange">La précarité énergétique</h2>
                <h3 class="">Un menage est en <span class="gras_500">«précarité énergétique»</span> lorsque celui-ci consacre <span class="gras_500">plus de 10% de ses revenus aux dépenses d’énergie</span> dans le logement.</h3>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <img src="{{ asset('images/icon-porcentage-precarite1.svg') }}" alt="illustration économie sur facture de chauffage" class="">
                    <p class="m-t-20">Des ménages sont dans le parc privé.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <img src="{{ asset('images/icon-porcentage-precarite2.svg') }}" alt="illustration économie sur facture de chauffage" class="">
                    <p class="m-t-20">Sont propriétaires-occupants.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <img src="{{ asset('images/icon-porcentage-precarite3.svg') }}" alt="illustration économie sur facture de chauffage" class="">
                    <p class="m-t-20">Ont plus de 60 ans.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 mb-20">
                <h4 class="text-center gras_500 mb-30 mt-30" data-color="orange">Une mauvaise isolation est l'un des facteurs les plus importants de la «précarité énergétique».</h4>
            </div>
        </div>
    </div>
</section>
<!-- end features alt -->
<section class="section" id="section-societe">
    <div class="container">
        <img id="logo" class="block-center"src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat">
        <p class="text-center sub-title-logo mb-30">Des professionnels qualifiés</p>
        <div class="row societe-part1 justify-content-center mb-30">
            <div class="col-xs-12 col-md-10">
                <div class="d-flex flex-column align-items-center flex-sm-column align-items-sm-center flex-md-row align-items-md-end">
                    <img src="{{ asset('images/Qualibat-RGE.jpg') }}" id=""alt="illustarion du label RGE, garant de l'environnement">
                    <div id="text-label" class="ml-40 align-self-end">
                        <h2 class="mb-30" data-color="bleue">Le label <span class="gras_700" data-color="vert">RGE Qualibat </span>: Un gage de <span class="gras_500">qualité :</span></h2>
                        <p><span class="gras_500">Le label RGE(Reconnu Garant de l'environnement)</span> est un signe de qualité délivré à une entreprise qui remplit certains critères lors de la réalisation de travaux d'économie d'énergie dans les logements(isolation thermique, installation d'équipement utilisant des énergies renouvelables...).</p>
                        <p class="gras_500">Le label RGE vous donne la garantie que cette entreprise est reconnue par l'état.</p>
                        <p class="gras_500">Faire appel à une entreprise RGE pour faire des travaux chez vous, vous donne droit à l'attribution de certains aides publiques.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row societe-part2 justify-content-center">
            <div class="order-2 col-sm-12 col-md-6 order-sm-2 order-md-1" id="presentation-societe">
            </div>
            <div class="col-md-6 order-1 order-sm-1 order-md-2 mb-30">
                <div id="presentation-societe2">
                    <div class="features-box d-flex">
                        <i class="icon-fantastic icon-icon-facture"></i>
                        <div class="ml-20 align-self-center text-left">
                            <h3>Aucune démarche à faire</h3>
                            <p>Nous nous occupons de toutes les formalités.</p>
                        </div>
                    </div>
                    <div class="features-box d-flex">
                        <i class="icon-fantastic icon-icon-4-heures2"></i>
                        <div class="ml-20 align-self-center text-left">
                            <h3>Votre isolation en moins de 4 heures</h3>
                            <p>Des travaux rapides, pas de perte de temps pour vous.</p>
                        </div>
                    </div>
                    <div class="features-box d-flex">
                        <i class="icon-fantastic icon-icon-proprete"></i>
                        <div class="ml-20 align-self-center text-left">
                            <h3>Propreté et nettoyage du chantier</h3>
                            <p>Nettoyage en fin de chantier et évacuation des déchets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-presentation5" data-background-color="bleue-clair">
    <div class="container">
        <div class="row justify-content-center">
           {{-- <div class="col col-sm-4 col-md-auto" id="">
                <img src="{{ asset('images/20_ans_experience.svg') }}" class="logo-experience-iso" alt="illustration 20 ans d'expérience">
            </div>--}}
            <div class="col col-sm-12 col-md-12">
                <h3 class="text-left mt-30 mb-30"><span data-color="vert">Isole </span><span class="text-habitat" data-color="orange">HABITAT </span>est un service du groupe PRESTA HABITAT : <span class="gras_500">société experte dans l'isolation des habitats et des énergies renouvelables.</span></h3>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section -->
<section class="section" id="section-testimonials">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row align-self-stretch">
            <div class="col-sm-12 text-center">
                <h2 class="text-white mb-40">Ils ont profité de l'isolation à 1€</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex flex-column testimonial-block">
                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="orange"></i>
                <p class="testimonial-content">J'ai fait le test, un conseiller m'a rappelé le lendemain pour m'expliquer la suite. Un technicien est venu pour prendre les mesures. <span class="gras_500">1 semaine après, ils sont passés pour poser l'isolation</span>. Ils m'ont donné tout de suite ma facture avec juste 1€ symbolique à payer. <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                <div class="info-testimonial">
                    <img src="{{ asset('images/photo-temoignage1.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                    <div class="info-testimonial-client">
                        <p class="testimonial-name">Isabelle</p>
                        <p class="testimonial-dept">Houilles(78)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex flex-column testimonial-block">
                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="orange"></i>
                <p class="testimonial-content">Des amis nous ont parlé de ce programme. <span class="gras_500">Même si mes revenus sont corrects, j'étais éligible</span>. On a isolé nos combles et la cave. On a diminué le chauffage dans la maison et il fait toujours aussi bon à l'intérieur. On attend de voir la prochaine facture de chauffage. <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                <div class="info-testimonial">
                    <img src="{{ asset('images/photo-temoignage2.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                    <div class="info-testimonial-client">
                        <p class="testimonial-name">Maëva & Franck</p>
                        <p class="testimonial-dept">Béthune(62)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex flex-column testimonial-block">
                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="orange"></i>
                <p class="testimonial-content">Il fait froid dans notre grande maison l'hiver, ça revient vraiment cher pour la chauffer entièrement. Les ouvriers nous ont expliqué ce qu'ils allaient faire. <span class="gras_500">Les travaux ont duré 4 heures et on a rien eu à faire</span>. ils ont pris le temps de tout nettoyer avant de partir. <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                <div class="info-testimonial">
                    <img src="{{ asset('images/photo-temoignage3.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                    <div class="info-testimonial-client">
                        <p class="testimonial-name">Danielle & Alain</p>
                        <p class="testimonial-dept">Le-Puy-en-Velay(43)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-videos">
    <div class="container">
        <h2 class="text-center mb-40 gras_700">Les reportages sur l'isolation à 1€</h2>
        <div class="row align-items-stretch row-eq-height mt-40">
            <div class="col-md-12">
                <div class="card-deck">
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay">
                            <div class="block-video">
                                <img src="{{ asset('images/reportage-isolation-1euro-TF1.jpg') }}" alt="illustration reportage sur l'isolation à 1€ sur M6" />
                                <div class="block-video-single d-flex justify-content-center align-items-center">
                                    <a id="video-btn-digital1" class="video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/BDnXLSGpr3A" data-target="#myModal"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body white-text rounded-bottom" data-background-color="bleue-clair">
                            <!-- Title -->
                            <img class="logo-chaine" src="{{ asset('images/TF1-logo.png') }}" alt="illustration logo M6" />
                            <hr class="hr-light">
                            <!-- Text -->
                            <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true"></i>
                            <p class="mb-0">Même pas 24 heures après avoir rempli le document en ligne, <span class="gras_500">j'ai eu la réponse, ça prend 5 minutes</span>... <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                        </div>
                    </div>
                    <div class="card col-xs-mt-40">
                        <!-- Card image -->
                        <div class="view overlay">
                            <div class="block-video">
                                <img src="{{ asset('images/reportage-isolation-1euro-m6.jpg') }}" alt="illustration reportage sur l'isolation à 1€ sur M6" />
                                <div class="block-video-single d-flex justify-content-center align-items-center">
                                    <a id="video-btn-digital2" class="video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/AD2uWiN3LFY" data-target="#myModal"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body white-text rounded-bottom" data-background-color="bleue-clair">
                            <!-- Title -->
                            <img class="logo-chaine" src="{{ asset('images/M6-logo.png') }}" alt="illustration logo M6" />
                            <hr class="hr-light">
                            <!-- Text -->
                            <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true"></i>
                            <p class="mb-0">Des années que Josette et Stanislas en rêvait : <span class="gras_500">isoler leurs combles</span>, 73 m² sans piocher dans leur bas de laine.<span class="gras_500"> Pour 1 euro, c'est désormais chose faite</span>... <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                        </div>
                    </div>
                    <div class="card col-xs-mt-40">
                        <!-- Card image -->
                        <div class="view overlay">
                            <div class="block-video">
                                <img src="{{ asset('images/reportage-isolation-1euro-w9.jpg') }}" alt="illustration reportage sur l'isolation à 1€ sur W9" />
                                <div class="block-video-single d-flex justify-content-center align-items-center">
                                    <a id="video-btn-digital3" class="video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/paUoYl4RRDw" data-target="#myModal"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body white-text rounded-bottom" data-background-color="bleue-clair">
                            <!-- Title -->
                            <img class="logo-chaine" src="{{ asset('images/W9-logo.png') }}" alt="illustration logo W9" />
                            <hr class="hr-light">
                            <!-- Text -->
                            <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true"></i>
                            <p class="mb-0">Marina est secrétaire et son mari ouvrier, en principe <span class="gras_500">les travaux qui vont être réalisés</span> aujourd’hui, <span class="gras_500">ils n'auraient pas pu se les offrir</span>… <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="col-sm-12 col-md-4" id="">
                <div class="youtube-player embed-responsive embed-responsive-16by9" data-id="w8X4JjIJo5U"></div>
            </div>
            <div class="col-sm-12 col-md-4" id="">
                <div class="youtube-player embed-responsive embed-responsive-16by9" data-id="VSaZSj5-yFw"></div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded",
                    function() {
                        var div, n, id, thumb_id,
                            v = document.getElementsByClassName("youtube-player");
                        for (n = 0; n < v.length; n++) {
                            id = v[n].getAttribute('data-id');
                            thumb_id = id + ".jpg";
                            div = document.createElement("div");
                            div.setAttribute("data-id", v[n].dataset.id);
                            //div.innerHTML = labnolThumb(v[n].dataset.id);
                            div.innerHTML = labnolThumb(thumb_id);
                            div.onclick = labnolIframe;
                            v[n].appendChild(div);
                        }
                    });

                function labnolThumb(id) {
                    var thumb_src = "images/reportage-isolation-" + id;
                    var thumb = '<img src="' + thumb_src  + '">';
                        play = '<div class="play"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>';
//                    return thumb.replace("ID", id) + play;
                    return thumb + play;
                }

                function labnolIframe() {
                    var iframe = document.createElement("iframe");
                    var embed = "https://www.youtube.com/embed/ID?rel=0&modestbranding=1&autohide=0&showinfo=0&autoplay=1&controls=2";
                    iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
                    this.parentNode.replaceChild(iframe, this);
                    var logo = document.getElementsByClassName("yt-uix-sessionlink");
//                    for (i = 0; i < logo.length; i++) {
//                        logo[i].style.display= "none";
//                    }
                }

            </script>--}}
        </div>
    </div>
    <!-- Modal Youtube Videos-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog reportage-video" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allowfullscreen>></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--<div class="ModalVideo modal fade" id="myModalVideo1" tabindex="-1" role="dialog" aria-labelledby="ModalLabelVideo1" aria-hidden="true">
        <div class="modal-dialog reportage-video" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <video id="video-reportage1" class="video-reportage" width="320" height="240" controls>
                            <source src="{{ asset('images/videos/site-web-video1.mp4') }}" type="video/mp4">
                            <source src="{{ asset('images/videos/site-web-video1.mp4') }}" type="video/webm">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ModalVideo modal fade" id="myModalVideo2" tabindex="-1" role="dialog" aria-labelledby="ModalLabelVideo2" aria-hidden="true">
        <div class="modal-dialog reportage-video" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <video id="video-reportage2" class="video-reportage" width="320" height="240" controls>
                            <source src="{{ asset('images/videos/site-web-video2.mp4') }}" type="video/mp4">
                            <source src="{{ asset('images/videos/site-web-video2.mp4') }}" type="video/webm">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ModalVideo modal fade" id="myModalVideo3" tabindex="-1" role="dialog" aria-labelledby="ModalLabelVideo3" aria-hidden="true">
        <div class="modal-dialog reportage-video" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <video id="video-reportage1" class="video-reportage" width="320" height="240" controls>
                            <source src="{{ asset('images/videos/site-web-video3.mp4') }}" type="video/mp4">
                            <source src="{{ asset('images/videos/site-web-video3.mp4') }}" type="video/webm">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
</section>
@endsection
@section('javascript')
    <script>
        (function ($) {
            $(document).ready(function() {

            });
        })(jQuery);

    </script>
@endsection



