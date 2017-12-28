@extends('layouts.main')
@section('content')
<!-- HOME -->
<section class="" id="home">
    <div class="container">
        <div class="row hero mt-50 mb-40">
            <div class="d-flex flex-row">
                <div class="part1"></div>
                <div class="part2 text-center">
                   <h1 class="mb-20" data-color="bleue">ISOLER VOTRE MAISON POUR 1€</h1>
                    <p class=" sub-title mt-10 mb-30" data-color="vert">Un programme pour lutter contre la précarité énergétique</p>
                    <p>Comme 200 000 foyers en France, profitez de cette aide.</p>
                    <a href="#" class="btn btn-rounded btn-vert btn-formulaire">Tester votre éligibilité</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->
<!-- Features -->
<section class="section" id="features">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-1-euro-1"></i>
                    <p class="">Aucun frais à avancer, 1€ seulement</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-surface4"></i>
                    <p class="">Surface illimitée pour votre isolation</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-percent"></i>
                    <p class="">Economie sur votre facture de chauffage</p>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end Features -->
<section class="section" id="section-presentation1" data-background-color="bleue-clair">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Vous êtes propriétaire ou locataire d'une maison individuelle, </span><span class="gras_500" data-color="orange">vous pouvez vous aussi profiter de lisolation à 1 euro</span> : <span class="gras_500">Une aide</span> mise en place pour soutenir <span class="gras_500">les foyers modestes</span>*.</h2>
                <p class="text-center">*Sous conditions d'éligibilité.</p>
            </div>
        </div>
    </div>
</section>
<!-- Features -->
<section class="section mb-40" id="section-type-isolation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="title mb-40" data-color="vert">Les types d'isolation auquels vous avez droit :</h2>
                <h3 class="mt-20" data-color="bleue">Avec l’isolation à 1€, vous pouvez cumuler ces 3 types d’isolation</h3>
                <h4 class="mt-20" data-color="orange">Surface illimitée!</h4>
            </div>
        </div> <!-- end row -->
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-combles.svg') }}" alt="">
                    <h5 class="m-t-20">Isolation des combles</h5>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-mur.svg') }}" alt="">
                    <h5 class="m-t-20">Isolation des murs</h5>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-plancher.svg') }}" alt="">
                    <h5 class="m-t-20">Isolation des sols</h5>
                </div>
            </div>
        </div> <!-- end row -->
        <div class="row justify-content-center mt-30">
            <div class="col col-md-auto">
                <div id="rect-orange"></div>
                <p>Garage, cave, vide-sanitaire (mitoyen, en rez-de-chaussée, ou en sous-sol)</p>
            </div>
            <div class="col col-md-auto">
                <div id="rect-bleue"></div>
                <p>Pièces à vivre</p>
            </div>
            <div class="col col-md-auto">
                <div id="rect-vert"></div>
                <p>Surface isolée</p>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end Features -->



<!-- Features Alt -->
<section class="section p-t-0" id="section-type-isolation2">
    <div class="container">
        <div class="row justify-content-around align-items-end">
            <div class="col-md-5">
                <div class="feat-description">
                    <h4 data-color="bleue">L'isolation de vos combles perdus</h4>
                    <p class="text-muted">Vous avez des combles que vous n'utilisez pas :</p>
                    <p class="text-muted">L'isolation des combles <span class="gras_500">empêche les pertes de chaleur en hiver</span> et permet de <span class="gras_500">garder la fraîcheur en été</span>. Deux techniques sont utilisées pour isoler vos combles perdus : la projection de  <span class="gras_500">laine de verre(ou de roche)</span> à souffler ou la pose de <span class="gras_500">rouleaux de laine de verre</span>, sur toute la surface des combles.</p>
                    <a href="" class="btn btn-custom">Isolation des combles</a>
                </div>
            </div>
            <div class="col-md-5 flex-first">
                <div style="position: relative";>
                    <img src="{{ asset('images/isolation-combles-soufflage.jpg') }}" alt="img" class="img-fluid rounded">
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
                                    <span>jusqu'à</span> -30%
                                </td>
                                <td><span>jusqu'à</span> 25%</td>
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
<section class="section" id="section-type-isolation3">
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
                    <p class="text-muted">Vous avez un garage ou un atelier mitoyen à votre habitation :</p>
                    <p class="text-muted">L'isolation thermique des murs permet de <span class="gras_500">réduire les échanges thermiques</span> entre l'intérieur et l'extérieur des pièces à vivre de votre maison. Elle consiste à poser des <span class="gras_500">panneaux ou  rouleaux de laine de verre</span> sur le mur (du garage ou de l'atelier) touchant les pièces à vivre de votre maison.</p>
                    <a href="" class="btn btn-custom">Isolation des murs</a>
                </div>
            </div>
        </div><!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end features alt -->

<!-- Features Alt -->
<section class="section" id="section-type-isolation4">
    <div class="container">
        <div class="row justify-content-around align-items-end">
            <div class="col-md-5">
                <div class="feat-description">
                    <h4 data-color="bleue">L'isolation des sols</h4>
                    <p class="text-muted">Vous avez un garage en rez-de-chaussée ou en sous-sol, des caves ou des vides-sanitaires :</p>
                    <p class="text-muted">En isolant le plafond de votre garage, de votre cave et de vos vides-sanitaires, <span class="gras_500">vous isolez avant tout le sol de vos pièces à vivre</span> et vous évitez les déperdictions thermiques à travers le sol.
                        Cette isolation est réalisée en posant des <span class="gras_500">panneaux de polystyrène ou de laine de verre</span> sur le plafond du garage, des caves ou du vide-sanitaire.</p>
                    <a href="" class="btn btn-custom">Isolation des sols</a>
                </div>
            </div>
            <div class="col-md-5">
                <div style="position: relative";>
                    <img src="{{ asset('images/isolation-combles-soufflage.jpg') }}" alt="img" class="img-fluid rounded">
                    <div class="bg-overlay">
                        <h4>Isolation des plafond avec panneaux de polystyrène</h4>
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
        </div><!-- end row -->
    </div> <!-- end container -->
</section>
<section class="section" id="section-information" data-background-color="bleue-clair">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 block-information" data-background-color="vert">
                <h3><i class="ion-ios7-plus-outline"></i> D'ECOLOGIE</h3>
                <img src="{{ asset('images/icon-ecologie.svg') }}" alt="img" class="img-fluid rounded">
                <p class="text-center" data-color="blanc">Réduit les dépenses d'énergétiques</p>
            </div>
            <div class="col-md-4 block-information" data-background-color="orange">
                <h3><i class="ion-ios7-plus-outline"></i> DE CONFORT</h3>
                <img src="{{ asset('images/icon-confort.svg') }}" alt="img" class="img-fluid rounded">
                <p class="text-center" data-color="blanc">Bien-être dans votre maison</p>
            </div>
            <div class="col-md-4 block-information" data-background-color="bleue">
                <h3><i class="ion-ios7-plus-outline"></i> D'ECONOMIE</h3>
                <img src="{{ asset('images/icon-economie.svg') }}" alt="img" class="img-fluid rounded">
                <p class="text-center" data-color="blanc">D'économie sur votre facture de chauffage</p>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-questions">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mb-40">
                <img src="{{ asset('images/mascotte.jpg') }}" class="mascotte-isole-habitat block-center mb-10" alt="illustration mascotte isole habitat ">
                <h2 class="text-center"><span class="gras_500" data-color="vert">Isoler ma maison pour 1€:</span> Comment est-ce possible?</h2>
            </div>
        </div>
        <div class="row justify-content-around mb-40 mt-30">
            <div class="col-md-5 col-sm-12 block-question-title">
                <h3 class="">Pourquoi est-il nécessaire d'isoler ma maison ?</h3>
                <p>Les parois mal isolées laissent passer <span class="gras_500" data-color="orange">le froid en hiver</span> et <span class="gras_500" data-color="orange">la chaleur en été</span>. 30% de l'air ambiant de votre maison s'échappe par la toiture, 25% par les murs et 10% par le sol.</p>
                <p class="">En isolant votre maison, vous <span class="gras_500" data-color="orange">consommez moins d'énergie</span> pour vous chauffer <span class="gras_500" data-color="orange">en hiver</span> et vous évitez la <span class="gras_500" data-color="orange">chaleur inconfortable</span> l'été.</p>
                <p>En consommant moins d'énergie, vous <span class="gras_500" data-color="orange">économisez sur votre facture</span> de chauffage.</p>
            </div>
            <div class="col-md-5 col-sm-12 block-question-title">
                <h3 class="">Qui paye pour mes travaux d'isolation ?</h3>
                <p><span class="gras_500" data-color="orange">Ce sont les fourniseurs d'énergie</span> : Toal, Elf, EDG, Poweo.., qui financent vos travaux d'isolation. <span class="gras_500" data-color="orange">L'Etat</span>, par le biais de la loi "POPE"(loi de Programmation fixant les Orientations de la Politique Energétique), <span class="gras_500" data-color="orange">oblige ces fournisseurs d'énergie à financer intégralement certains travaux d'isolation</span> dans les foyers en précarité énergétique, sous peine d'amendes.</span>
                <p><span class="gras_500" data-color="orange">Les travaux réalisés</span> avec le programme d'isolation à 1€ rentrent dans ce dispositif et <span class="gras_500" data-color="orange">sont intégralement financés</span> et sans <span class="gras_500" data-color="orange">aucun frais à avancer</span>.</p>
            </div>
        </div>
        <div class="row justify-content-around mt-40">
            <div class="col-md-5 col-sm-12 block-question-title">
                <h3 class="">Je suis locataire : est-ce que je peux en bénéficier ?</h3>
                <p>Bien sûr, ce dispositif permet <span class="gras_500" data-color="orange">aux locataires et aux propriétaires</span> d'isoler leur maison. Même si vous avez déjà profité d'autres subventions de l'Etat(crédit d'impôt, aides de l'Anah, prime rénovation...), vous pouvez prétendre à l'isolation à 1 euro. <span class="gras_500" data-color="orange">Cette aide est cumulable avec tous les autres travaux d’aménagement</span> pour réduire la consomation énergétique.</p>
            </div>
            <div class="col-md-5 col-sm-12 block-question-title">
                <h3 class="">Comment je peux profiter de cette aide ?</h3>
                <p class="gras_500" data-color="orange">Seulement 2 conditions sont nécessaires pour être éligible au programme d'isolation à 1 euro :</p>
                <p><i class="fa fa-check mr-10" aria-hidden="true" data-color="vert"></i>Ne pas se chauffer uniquement à l'éléctricité</p>
                <p><i class="fa fa-check mr-10" aria-hidden="true" data-color="vert"></i>Ne pas dépasser le plafond de revenus définit par l'ADEME*</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-40">
        <div class="col-sm-12 col-md-7">
            <table class="table">
                <thead class="thead-inverse">
                <tr>
                    <th>Nombre de personnes</br>dans le foyer</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>Par personne</br> supl.</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Vous habitez :</th>
                    <td colspan="6">Plafond de Revenu fiscal de référence <i class="ion-ios7-information-outline"></i></td>
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
</section>
<!-- Section-formulaire -->
<section class="section" id="section-formulaire" data-background-color="bleue-clair">
    <div class="container">
        <h2 class="text-center">Vous pouvez aussi profiter de cette aide.</h2>
        <h3 class="text-center text-muted">45% des foyers sont éligibles à l'isolation à 1 €</h3>
        <div class="row justify-content-center mt-30">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div id="block-form">
                    <div class="form-header text-center">
                        <h4 class="text-white">Testez votre éligibilité</h4>
                        <p class="" data-color="bleue-clair">Réponse immédiate - Sans aucun engagement</p>
                    </div>
                    <div class="form-body">
                        <form id="regForm" action="">
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab" id="info-maison-client">
                                <div class="info-block d-flex flex-column justify-content-around">
                                    <div>
                                        <h5 class=""><span data-color="orange">1-</span>Selectionnez vos systèmes de chauffage :</h5>
                                        <div class="row mt-20">
                                            <div class="col block-chauffage">
                                                <input type="checkbox" class="checkbox" name="type_chauffage" id="type-chauffage-gaz" required="required" value="Gaz">
                                                <label for="type-chauffage-gaz" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-gaz2"></i><span>Gaz</span></label>
                                            </div>
                                            <div class="col block-chauffage">
                                                <input type="checkbox" class="checkbox" name="type_chauffage" id="type-chauffage-bois" required="required" value="Bois">
                                                <label for="type-chauffage-bois" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-bois2"></i><span>Bois</span></label>
                                            </div>
                                            <div class="col block-chauffage">
                                                <input type="checkbox" class="checkbox" name="type_chauffage" id="type-chauffage-electrique" required="required" value="Electrique">
                                                <label for="type-chauffage-electrique" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-electricite2"></i><span>Electricité</span></label>
                                            </div>
                                            <div class="col block-chauffage">
                                                <input type="checkbox" class="checkbox" name="type_chauffage" id="type-chauffage-fioul" required="required" value="fioul">
                                                <label for="type-chauffage-fioul" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-fioul"></i><span>Fioul</span></label>
                                            </div>
                                            <div class="col block-chauffage">
                                                <input type="checkbox" class="checkbox" name="type_chauffage" id="type-chauffage-pompe" required="required" value="Pompe à chaleur">
                                                <label for="type-chauffage-pompe" class="type-chauffage"><i class="icon-fantastic icon-icon-chauffage-pompe"></i><span>Pompe</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class=""><span data-color="orange">2-</span>La surface au sol de votre maison :</h5>
                                        <div class="row mt-20">
                                            <div class="col block-surface">
                                                <input type="radio" class="radio" name="type-surface" id="type-surface-1" required="required" value="type-surface-1" checked>
                                                <label for="type-surface-1" class="type-surface"><i class="icon-fantastic icon-icon-surface4"></i><span>Moins de 70m2</span></label>
                                            </div>
                                            <div class="col block-surface">
                                                <input type="radio" class="radio" name="type-surface" id="type-surface-2" required="required" value="type-surface-2">
                                                <label for="type-surface-2" class="type-surface"><i class="icon-fantastic icon-icon-surface4"></i><span>Entre 70 et 100m2</span></label>
                                            </div>
                                            <div class="col block-surface">
                                                <input type="radio" class="radio" name="type-surface" id="type-surface-3" required="required" value="type-surface-3">
                                                <label for="type-surface-3" class="type-surface"><i class="icon-fantastic icon-icon-surface4"></i><span>Plus de 100m2</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class=""><span data-color="orange">3-</span>Les isolations à faire dans votre maison :</h5>
                                        <div class="row mt-2">
                                            <div class="col block-isolation">
                                                <input type="checkbox" class="checkbox" name="type_isolation" id="type-isolation-combles" required="required" value="Mme">
                                                <label for="type-isolation-combles" class="type-isolation"><i class="icon-fantastic icon-isolation-combles-form"></i><span>Combles</br>perdus</span></label>
                                            </div>
                                            <div class="col block-isolation">
                                                <input type="checkbox" class="checkbox" name="type_isolation" id="type-isolation-mur" required="required" value="Mme">
                                                <label for="type-isolation-mur" class="type-isolation"><i class="icon-fantastic icon-isolation-mur-form"></i><span>Garage</br>mitoyen</span></label>
                                            </div>
                                            <div class="col block-isolation">
                                                <input type="checkbox" class="checkbox" name="type_isolation" id="type-isolation-sol" required="required" value="Mme">
                                                <label for="type-isolation-sol" class="type-isolation"><i class="icon-fantastic icon-isolation-garage-form"></i><span>Garage</br>R.D.C/Sous-sol</span></label>
                                            </div>
                                            <div class="col block-isolation">
                                                <input type="checkbox" class="checkbox" name="type_isolation" id="type-isolation-cave" required="required" value="Mme">
                                                <label for="type-isolation-cave" class="type-isolation"><i class="icon-fantastic icon-isolation-cave-form"></i><span>Caves</br>vides-sanitaires</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="info-situation-client">
                                <div class="info-block d-flex flex-column justify-content-around">
                                    <div>
                                        <h5 class=""><span data-color="orange">4-</span>Vous êtes :</h5>
                                        <div class="row mt-20">
                                            <div class="col-md-6">
                                                <input type="radio" class="radio" name="bail_client" id="client-proprietaire" required="required" value="Proprietaire" checked>
                                                <label for="client-proprietaire" class="type-bail-client">Propriétaire</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" class="radio" name="bail_client" id="client-locataire" required="required" value="locataire">
                                                <label for="client-locataire" class="type-bail-client">Locataire</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class=""><span data-color="orange">5-</span>Nombre de personnes dans le foyer :</h5>
                                        <div class="row mt-20">
                                            <div class="col block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-1" required="required" value="1" checked>
                                                <label for="nombre-personne-1" class="nombre-personne">1</label>
                                            </div>
                                            <div class="col block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-2" required="required" value="2">
                                                <label for="nombre-personne-2" class="nombre-personne">2</label>
                                            </div>
                                            <div class="col block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-3" required="required" value="3">
                                                <label for="nombre-personne-3" class="nombre-personne">3</label>
                                            </div>
                                            <div class="col block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-4" required="required" value="4">
                                                <label for="nombre-personne-4" class="nombre-personne">4</label>
                                            </div>
                                            <div class="col block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-5" required="required" value="5">
                                                <label for="nombre-personne-5" class="nombre-personne">5</label>
                                            </div>
                                            <div class="col block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-6" required="required" value="6">
                                                <label for="nombre-personne-6" class="nombre-personne">6</label>
                                            </div>
                                            <div class="col block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-7" required="required" value="7">
                                                <label for="nombre-personne-7" class="nombre-personne">7</label>
                                            </div>
                                            <div class="col block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-8" required="required" value="8">
                                                <label for="nombre-personne-8" class="nombre-personne">8</label>
                                            </div>
                                            <div class="col block-nombre-pers">
                                                <input type="radio" class="radio" name="nombre_personne" id="nombre-personne-9" required="required" value="9">
                                                <label for="nombre-personne-9" class="nombre-personne">9</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class=""><span data-color="orange">6-</span>Votre revenu fiscal de référence:</h5>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="revenus_reference" Placeholder="19 650€">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class=""><span data-color="orange">7-</span>Votre code postal:</h5>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="code_postal" Placeholder="Code postal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="info-client">
                                <div class="info-block d-flex flex-column justify-content-around">
                                    <p>Pour savoir si vous pouvez bénéficier de l'isolation de votre maison pour 1€, merci de compléter les informations ci-dessous.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="radio" class="radio" name="civilite" id="civ_Mme" required="required" value="Mme" checked>
                                            <label for="civ_Mme" class="civilite">Madame</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="radio" class="radio" name="civilite" id="civ_M" required="required" value="M">
                                            <label for="civ_M" class="civilite">Monsieur</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" Placeholder="Nom">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" Placeholder="Prénom">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" Placeholder="N°, rue, av, bd ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" Placeholder="Tel">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" Placeholder="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form id="phoneForm">
                            <div class="tab">
                                <div class="info-resultat" id="info-resultat-ok">
                                    <div class="info-block d-flex flex-column justify-content-around">
                                        <div>
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                <circle class="path circle" fill="none" stroke="#8ab326" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                <polyline class="path check" fill="none" stroke="#8ab326" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                                            </svg>
                                            <h5><span class="gras_700">Félicitation</span>, vous êtes éligible à l'isolation à 1€</h5>
                                            <p class="text-center" data-color="orange">Profitez du savoir-faire d'experts pour l'isolation de votre maison.</p>
                                            <p></p>
                                        </div>
                                        <div>
                                            <h5 class="text-center">Selectionnez vos disponibilités</h5>
                                            <div class="row mt-20">
                                                <div class="col-6 block-heure">
                                                    <input type="radio" class="radio" name="type-heure" id="type-heure-1" required="required" value="type-heure-1" checked>
                                                    <label for="type-heure-1" class="type-heure"><i class="ion-clock mr-20"></i><span>Entre 9h et 12h</span></label>
                                                </div>
                                                <div class="col-6 block-heure">
                                                    <input type="radio" class="radio" name="type-heure" id="type-heure-2" required="required" value="type-heure-2">
                                                    <label for="type-heure-2" class="type-heure"><i class="ion-clock"></i><span>Entre 12h et 14h</span></label>
                                                </div>
                                                <div class="col-6 block-heure mt-10">
                                                    <input type="radio" class="radio" name="type-heure" id="type-heure-3" required="required" value="type-heure-3">
                                                    <label for="type-heure-3" class="type-heure"><i class="ion-clock"></i><span>Entre 14h et 18h</span></label>
                                                </div>
                                                <div class="col-6 block-heure mt-10">
                                                    <input type="radio" class="radio" name="type-heure" id="type-heure-4" required="required" value="type-heure-4">
                                                    <label for="type-heure-4" class="type-heure"><i class="ion-clock"></i><span>Entre 18h et 20h</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-resultat" id="info-resultat-none">
                                    <div class="info-block d-flex flex-column justify-content-around">
                                        <div>
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                <circle class="path circle" fill="none" stroke="#ee7626" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                                <line class="path line" fill="none" stroke="#ee7626" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
                                                <line class="path line" fill="none" stroke="#ee7626" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
                                            </svg>
                                            <h5>Désolé, vous n'êtes pas éligible à l'isolation à 1€</h5>
                                            <P>Vos revenus dépassent le plafond de revenus définit par l'ADEME. Vous pouvez cependant bénéficier de la <span class="gras_500" data-color="orange">Prime Energie</span>, déduite directement sur votre facture, pour vos travaux de rénovation thermique.</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-20">
                            <div class="col tab-block-btn">
                                <button type="button " id="prevBtn" class="btn btn-rounded btn-orange">Précédent</button>
                            </div>
                            <div class="col tab-block-btn">
                                <button type="button" id="nextBtn" class="btn btn-rounded btn-orange">Suivant</button>
                            </div>
                            <div class="col tab-block-btn">
                                <button type="button" id="phoneBtn" class="btn btn-rounded btn-orange">Me rappeler</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        {{--<div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section-formulaire -->
<section class="section" id="section-fonctionnement" data-background-color="bleue-clair">
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                    <circle class="path circle" fill="none" stroke="#8ab326" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                    <polyline class="path check" fill="none" stroke="#8ab326" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                </svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                    <circle class="path circle" fill="none" stroke="#ee7626" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                    <line class="path line" fill="none" stroke="#ee7626" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
                    <line class="path line" fill="none" stroke="#ee7626" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
                </svg>
                <p class="error">Bummer!</p>
                <p>Félicitation, vous êtes éligible à l'isolation à 1€</p>
                <div class="steps-timeline d-flex">
                    <div class="block-step" id="block-step1">
                        <div class="circle-block-step" id="circle1">
                            <i class="ion-checkmark-round"></i>
                        </div>
                        <h3 class="steps-name">Tester votre éligibilité</br>Réponse immédiate</h3>
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
</div>
</section>
<!-- end features alt -->
<section class="section" id="section-societe">
    <div class="container">
        <img id="logo" class="block-center"src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat">
        <p class="text-center sub-title-logo mb-30">Des professionnels qualifiés</p>
        <div class="row societe-part1 justify-content-center mb-30">
            <div class="col-sm-12 col-md-10">
                <div class="d-flex flex-sm-column align-items-end flex-md-row">
                    <img src="{{ asset('images/Qualibat-RGE.jpg') }}" alt="">
                    <div id="text-label" class="ml-40 align-self-end">
                        <h2 class="mb-30" data-color="bleue">Le label <span class="gras_700" data-color="vert">RGE Qualibat </span>: Un gage de <span class="gras_500">qualité :</span></h2>
                        <p><span class="gras_500">Le label RGE("Reconnu Garant de l'environnement")</span> est un signe de qualité délivré à une entreprise qui remplit certains critères lors de la réalisation de travaux d'économie d'énergie dans les logements(isolation thermique, installation d'équipement utilisant des énergies renouvelables...).</p>
                        <p class="gras_500">Le label RGE vous donne la garantie que cette entreprise est reconnu par l'état.</p>
                        <p class="gras_500">Faire appel à une entreprise RGE pour faire des travaux chez vous, vous donne droit à l'attribution de certains aides publiques.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row societe-part2 justify-content-center">
            <div class="col-sm-12 col-md-6" id="presentation-societe">
            </div>
            <div class="col-sm-12 col-md-6 mb-30">
                <div id="presentation-societe2">
                    <div class="features-box d-flex align-self-end">
                        <i class="icon-fantastic icon-icon-facture"></i>
                        <div class="ml-20 align-self-center text-left">
                            <h3>Aucun démarche à faire</h3>
                            <p>Nous nous occupons de toutes les formalités</p>
                        </div>
                    </div>
                    <div class="features-box d-flex">
                        <i class="icon-fantastic icon-icon-4-heures2"></i>
                        <div class="ml-20 align-self-center text-left">
                            <h3>Des travaux en moins de 4 heures</h3>
                            <p>Nous nous occupons de toutes les formalités</p>
                        </div>
                    </div>
                    <div class="features-box d-flex">
                        <i class="icon-fantastic icon-icon-proprete"></i>
                        <div class="ml-20 align-self-center text-left">
                            <h3>Propreté et nettoyage du chantier</h3>
                            <p>Nous nous occupons de toutes les formalités</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-presentation5" data-background-color="bleue-clair">
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <div class="col col-sm-4 col-md-auto" id="">
                <img src="{{ asset('images/20_ans_experience.svg') }}" class="logo-experience-iso" alt="illustration 20 ans d'expérience">
            </div>
            <div class="col col-sm-12 col-md-10">
                <h3 class="text-left mb-40"><span data-color="vert">Isole </span><span class="text-habitat" data-color="orange">Habitat </span>est une marque déposée du groupe R.S.I (Rénovation Sécurité Intérieur) : <span class="gras_500">société experte dans le domaine du Batiment.</span></h3>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-zones">
    <div class="container">
        <h2 class="text-center mb-40">Nos zones d'intervention :</h2>
        <div class="row">
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
        </div>
    </div>

<!-- Testimonials section -->
<section class="section bg-img-1" id="section-testimonials">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row align-self-stretch">
            <div class="col-sm-12 text-center">
                <h2 class="text-white mb-40">Ils ont profité de l'isolation à 1€</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex flex-column">
                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="orange"></i>
                <p class="testimonial-content mb-auto">J'ai fait le test. Un conseiller m'a rappelé le lendemain pour m'expliquer la suite. Un technicien est venu pour prendre les mesures. <span class="gras_500">1 semaine après, ils sont passé pour poser l' isolation</span>. Ils m'ont donné tout de suite ma facture avec juste 1€ symbolique à payer <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                <div class="info-testimonial">
                    <img src="{{ asset('images/photo-temoignage1.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                    <div class="info-testimonial-client">
                        <p class="testimonial-name">Isabelle</p>
                        <p class="testimonial-dept">Houilles(78)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex flex-column">
                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="orange"></i>
                <p class="testimonial-content mb-auto">Des amis nous ont parlé de ce programme. <span class="gras_500">Même si mes revenus sont correctes, j'étais éligible</span>. On a isolé nos combles et la cave. On a diminué le chauffage dans la maison et il fait toujours aussi bon à l'intérieur. On attend de voir la prochaine facture de chauffage <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
                <div class="info-testimonial">
                    <img src="{{ asset('images/photo-temoignage2.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                    <div class="info-testimonial-client">
                        <p class="testimonial-name">Maëva & Franck</p>
                        <p class="testimonial-dept">Béthune(62)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex flex-column">
                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="orange"></i>
                <p class="testimonial-content mb-auto">Il fait froid dans notre grande maison l'hiver et on a un grenier que l'on n'utilise plus. Les ouvriers étaient très sympathiques, ils nous ont expliqué ce qu'ils allaient faire. <span class="gras_500">Les travaux ont duré 3 heures et on a rien eu à faire</span>. ils ont pris le temps de tout nettoyer avant de partir <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
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
        <h2 class="text-center mb-40" data-color="bleue">Les reportages sur l'isolation à 1€</h2>
        <div class="row align-items-end mt-40">
            <div class="col-sm-12 col-md-4" id="">
                <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true"></i>
                <p class="mb-0"><span class="gras_500">C'est 1 euro</span>. 24 heures après avoir rempli le document en ligne, j'ai eu la réponse, ça prend 5 minutes. C'est juste quand la personne m'a appelé au vu des documents que j'avais déjà rempli en fait en ligne qu'elle m'a dit : <span class="gras_500">Vous êtes éligible</span>... <i class="fa fa-quote-right" aria-hidden="true" data-color="orange"></i></p>
            </div>
            <div class="col-sm-12 col-md-4" id="">
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
                    //return alert(thumb_src);

                }

                function labnolIframe() {
                    var iframe = document.createElement("iframe");
                    var embed = "https://www.youtube.com/embed/ID?rel=0&modestbranding=1&autohide=0&showinfo=0&autoplay=1&controls=2";
                    iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
                    alert(this.parentNode);
                    this.parentNode.replaceChild(iframe, this);
                    var logo = document.getElementsByClassName("yt-uix-sessionlink");
                    for (i = 0; i < logo.length; i++) {
                        logo[i].style.display= "none";
                    }

                }

            </script>
        </div>
    </div>
</section>
<section class="section" id="section-social-share">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-sm-auto text-center">
                <h2 data-color="vert">Participer à l'amélioration des habitats</h2>
                <h3>Faîtes profiter votre famille et vos amis de l'isolation à 1€</h3>
                <h4 class="mt-20 mb-30" data-color="orange">Partager notre programme</h4>
                <img src="{{ asset('images/programme-isolation6.png') }}" alt="carte isolation de la région hauts-de-France">
                <div class="mt-30">
                    <button type="button" role="button" class="btn btn-facebook waves-effect waves-light">
                    <i class="fa fa-facebook m-r-5"></i> Facebook
                    </button>

                    <button type="button" role="button" class="btn btn-twitter waves-effect waves-light">
                    <i class="fa fa-twitter m-r-5"></i> Twitter
                    </button>

                    <button type="button" class="btn btn-googleplus waves-effect waves-light">
                        <i class="fa fa-google-plus m-r-5"></i> Google+
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-presentation2" data-background-color="">
    <div class="container">
        <div class="row align-items-end justify-content-center mb-40">
            <div class="">
                <h2 class="text-center ml-10"><span data-color="vert">Isole </span><span class="text-habitat" data-color="orange">Habitat </span>utilise des matériaux d'isolation <span class="gras_500" data-color="vert">écocologiques et certifiés.</span></h2>
            </div>
        </div>
        <div class="row">
            <img src="{{ asset('images/knauf.svg') }}" class="logo-materiel-iso" alt="logo-knauf-isolation">
            <img src="{{ asset('images/isover.svg') }}" class="logo-materiel-iso" alt="logo-isover-isolation">
            <img src="{{ asset('images/ursa.svg') }}" class="logo-materiel-iso" alt="logo-ursa-isolation">
            <img src="{{ asset('images/saint-gobin.svg') }}" class="logo-materiel-iso" alt="logo-saint-gobin-isolation">
            <img src="{{ asset('images/rockwool.svg') }}" class="logo-materiel-iso" alt="logo-rockwool-isolation">
        </div>
    </div>
</section>
@endsection



