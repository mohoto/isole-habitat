@extends('site-web.layouts.main')
@section('pageTitle', 'isolez votre maison pour 1 euro')
@section('pageClass', 'page_accueil')
@section('content')
<!-- HOME -->
<header>
    <nav id='cssmenu'>
        <div class="container-nav d-flex justify-content-between align-items-ends">
            <div class="logo"><a href="{{ route('site-web.accueil') }}"><img id="logo" src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat"></a></div>
            <div>
                <p id="dispositif-texte-nav">Dispositif CEE mis en place par l'Etat.</p>
            </div>
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul>
                {{--<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('site-web.accueil') }}">ACCUEIL</a></li>
                <li class="{{ Request::is('isolation-des-combles') ? 'active' : '' }}"><a href="{{ route('site-web.isolation-combles') }}">L'ISOLATION DES COMBLES</a></li>
                <li class="{{ Request::is('qui-sommes-nous') ? 'active' : '' }}"><a href="{{ route('site-web.societe') }}">QUI SOMMES-NOUS?</a></li>--}}
                <li><a class="btn-navigation" href="#section-questions1">Pourquoi seulement 1€?</a></li>
                <li><a class="btn-navigation" href="#section-comment">Comment en profiter?</a></li>
                {{--<li><a class="btn-navigation" href="#section-videos">Vu à la TV</a></li>
                <li id="phone-link"><i class="fa fa-phone mr-10"></i><a href="tel:01 76 50 88 50"><span>01 76 50 88 50</span></a></li>--}}
            </ul>
        </div>
    </nav>
    <div class="container-fluid" id="ribbon-formulaire">
        <div class="row justify-content-md-center align-items-md-center">
            <h4 class="gras_300" data-color="blanc"><span data-color="orange">Dépensez moins pour vous chauffer  :</span> Profitez de votre isolation pour 1€</h4>
            {{--<a href="#" id="btn-formulaire-ribbon" class="btn btn-rounded btn-vert btn-formulaire ml-20">Testez votre éligibilité</a>--}}
            <a href="#" id="btn-formulaire-ribbon" class="btn btn-rounded btn-vert btn-formulaire ml-20">Je veux tester mon éligibilité</a>
        </div>
    </div>
</header>
<section class="" id="home">
    <div class="container">
        <div class="row hero mt-50 mb-40 justify-content-center align-items-stretch">
            <div class="col-sm-12 col-md-6">
                <div class="part1"></div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="part2 text-center mb-0">
                    <h1 class="mb-20 mt-xs-30 gras_600">ISOLEZ VOTRE MAISON POUR 1€</h1>
                    <h3 data-color="orange">Plus de 120 000 foyers ont déjà profité de cette aide.</h3>
                    <h4 class="mt-30">Dispositif CEE d'aide de l'Etat.</h4>
                    <a href="#" id="btn-section-formulaire" class="btn btn-rounded btn-vert btn-formulaire mt-50">Testez votre éligibilité</a>
                    {{--<p class="m-t-20" data-color="vert">1€ symbolique après travaux.</p>--}}
                    <p class="mt-10">Réponse immédiate.</p>
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
            <div class="col-sm-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-1-euro-1"></i>
                    <p class="">Aucun frais à avancer, 1€ après travaux</p>
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
<section class="section pt-30" id="section-presentation1" data-background-color="bleue-fonce">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-white">Vous êtes propriétaire ou locataire d'une maison individuelle, </span><span class="gras_500" data-color="vert">vous pouvez vous aussi profiter de lisolation de vos combles, de votre garage et de vos caves pour 1€</span> : <span class="gras_500">Une aide</span> mise en place pour soutenir <span class="gras_500">les foyers mal isolés</span>*.</h2>
                <p class="text-center text-white">*Sous condition d'éligibilité</p>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-presentation-video">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 order-2 order-md-1">
                <h4 class="gras_500">L'isolation à 1 euro : une réalité peu connue.</h4>
                <p>Peu de ménages savent qu'ils peuvent bénéficier de l'isolation de leur maison pour 1€ symbolique. Et pourtant, ce programme repose sur <span data-color="orange">une obligation de réalisation d’économies d’énergie imposée par l'Etat aux vendeurs d’énergie</span>.</p>
                <p>Le 1er janvier 2018, le dispositif est entré dans sa 4ème période d’obligation.</p>
            </div>
            <div class="col-md-5 order-1 order-md-2 mb-xs-20">
                <img id="mascotte-isolation" class="block-center" src="{{ asset('images/isolation-1-euro.jpg') }}" alt="illustration mascotte isolation à 1 euro" />
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-40">
            <div class="col-md-5 mb-xs-20">
                <img id="client-isolation" class="rounded-circle block-center" src="{{ asset('images/photo-couple-isolation-nb.jpg') }}" alt="illustration mascotte isolation à 1 euro" />
            </div>
            <div class="col-md-5">
                <h4 class="presentaion-couple">Ils ont isolé le garage et les caves de leur maison <span class="gras_500" data-color="vert">pour 1€</span> au lieu de <span class="gras_500" data-color="orange">4241€</span>.</h4>
                <p>Frédéric et Laurence ont fait <span class="gras_500" data-color="vert">financé en totalité</span> l'isolation de leur garage et de leurs caves <span class="gras_500">grâce à notre programme et au dispositif CEE mis en place par l'etat.</p>
                <p><span class="gras_500" data-color="orange">Tous les foyers peuvent en profiter, sans aucune condition de revenu</span>. Nous nous occupons de toutes les formalités.</p>
            </div>
        </div>
        <div class="row justify-content-center mt-30">
            <div class="col-12 col-md-10 d-flex flex-column flex-md-row justify-content-between offre-grand-est align-items-center" data-background-color="bleue-fonce">
                <div class="mr-30">
                    <img src="{{ asset('images/carte-france-isolation3-blanc.svg') }}" class="img-fluid img-region block-center mt-40" alt="illustration carte de france avec région du grand-est">
                </div>
                <div class="">
                    <h3 class="text-center italic mb-30" data-color="orange">Nouveau depuis le 1er septembre 2018</h3>
                    <h4 class="text-white line-height-3">Vous habitez dans <span data-color="vert">la région Grand-est</span>, vous pouvez bénéficier de l'isolation de votre garage, de vos caves et de de votre vide-sanitaire pour 1€.</h4>
                    <h4 class="gras_500" data-color="orange">Sans aucune condition de revenu.</h4>
                    <a href="{{ route('site-web.isolation-sol-grand-est') }}" class="btn btn-vert btn-lien mt-30">Votre isolation pour 1€ dans le Grand-est</a>
                </div>
            </div>
        </div>
        <div class="row mt-50" id="section-comment">
            <div class="col-md-12">
                <h3 class="text-center  mb-30"><span class="gras_500" data-color="vert">Testez votre éligibilité</span> et profitez de l'isolation de votre maison pour 1€</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="d-flex justify-content-center">
                            <ul id="list-benefit-total1" class="list-benefit-total">
                                <li><i class="fas fa-arrow-circle-right"></i>Une réponse en 48 heures</li>
                                <li><i class="fas fa-arrow-circle-right"></i>Aucune formalité à faire</li>
                                <li><i class="fas fa-arrow-circle-right"></i>Dispositif CEE d'aide de l'Etat</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-flex justify-content-center">
                            <ul id="list-benefit-total2" class="list-benefit-total">
                                <li><i class="fas fa-arrow-circle-right"></i>Votre isolation sous 7 jours</li>
                                <li><i class="fas fa-arrow-circle-right"></i>Aucun frais à avancer</li>
                                <li><i class="fas fa-arrow-circle-right"></i>1€ symbolique après travaux</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-50" id="section-fonctionnement">
            <div class="col-md-12">
                <div class="steps-timeline d-flex">
                    <div class="block-step" id="block-step1">
                        <div class="circle-block-step" id="circle1">
                            <i class="ion-checkmark-round"></i>
                        </div>
                        <h3 class="steps-name">Inscrivez-vous</br>à notre programme</h3>
                    </div>
                    <div class="block-step" id="block-step2">
                        <div class="circle-block-step" id="circle2">
                            <i class="ion-ios7-telephone"></i>
                        </div>
                        <h3 class="steps-name">On vous rapelle</br>sous 48 heures</h3>
                    </div>
                    <div class="block-step" id="block-step3">
                        <div class="circle-block-step" id="circle4">
                            <i class="ion-hammer"></i>
                        </div>
                        <h3 class="steps-name">Travaux sous 7 jours</br>En moins de 4 heures</h3>
                    </div>
                    <div class="block-step" id="block-step4">
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
<section class="section" id="section-information" data-background-color="bleue-clair">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 block-information" data-background-color="vert">
                <h3><i class="ion-ios7-plus-outline"></i> D'ECOLOGIE</h3>
                <img src="{{ asset('images/icon-ecologie.svg') }}" alt="illustration isolation à 1 euro ecologique" class="img-fluid rounded">
                <p class="text-center" data-color="blanc">Réduit les dépenses énergétiques</p>
            </div>
            <div class="col-md-4 block-information" data-background-color="orange">
                <h3><i class="ion-ios7-plus-outline"></i> DE CONFORT</h3>
                <img src="{{ asset('images/icon-confort.svg') }}" alt="illustration isolation à 1 euro confort" class="img-fluid rounded">
                <p class="text-center" data-color="blanc">Bien-être dans votre maison</p>
            </div>
            <div class="col-md-4 block-information" data-background-color="bleue">
                <h3><i class="ion-ios7-plus-outline"></i> D'ECONOMIE</h3>
                <img src="{{ asset('images/icon-economie.svg') }}" alt="illustration isolation à 1 euro économie sur facture de chauffage" class="img-fluid rounded">
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
                <h2 class="mb-30">Les types d'isolation auxquels vous avez droit :</h2>
                <h3 class="mt-20" data-color="vert">Avec l’isolation à 1€, vous pouvez cumuler ces 3 types d’isolation</h3>
                <h4 class="mt-20 mb-20" data-color="orange">Surface illimitée!</h4>
            </div>
        </div> <!-- end row -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mb-xs-40">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-combles.png') }}" srcset="{{ asset('images/icon-iso-combles.svg') }}" alt="illustration isolation des combles">
                    <h5 class="m-t-20">Isolation des combles perdus</h5>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-xs-40">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-plancher-garage.png') }}" srcset="{{ asset('images/icon-iso-plancher-garage.svg') }}" alt="illustration isolation des garages">
                    <h5 class="m-t-20">Isolation des garages</h5>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-plancher-caves.png') }}" srcset="{{ asset('images/icon-iso-plancher-caves.svg') }}" alt="illustration isolation des caves et vides-sanitaires">
                    <h5 class="m-t-20">Isolation des caves et vide-sanitaire</h5>
                </div>
            </div>
        </div> <!-- end row -->
        <div class="row justify-content-around mt-30">
            <div class="col-xs-12 col-md-auto">
                <div id="rect-orange"></div>
                <p>Garage (en rez-de-chaussée ou en sous-sol), caves et vide-sanitaire</p>
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
<!-- end features alt -->
<!-- Features Alt -->
<section class="section pt-50" id="section-type-isolation4">
    <div class="container">
        <div class="row justify-content-around align-items-end">
            <div class="col-md-5">
                <div class="feat-description">
                    <h4>L'isolation de vos combles perdus</h4>
                    <p class="gras_500" data-color="orange">Vous avez des combles que vous n'utilisez pas:</p>
                    <p class="text-muted">L'isolation des combles <span class="gras_500">empêche les pertes de chaleur en hiver</span> et permet de <span class="gras_500">garder la fraîcheur en été</span>. Deux techniques sont utilisées pour isoler vos combles perdus : la projection de  <span class="gras_500">laine de verre (ou de roche)</span> à souffler ou la pose de <span class="gras_500">rouleaux de laine de verre</span>, sur toute la surface des combles.</p>
                    {{--<a href="{{ route('site-web.isolation-combles') }}" class="btn btn-custom">Isolation des combles</a>--}}
                </div>
            </div>
            <div class="col-md-5">
                <div style="position: relative">
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
        </div>
        <div class="row justify-content-around align-items-end mt-30">
            <div class="col-md-5 order-2">
                <div style="position: relative";>
                    <img src="{{ asset('images/isolation-garage-noir.jpg') }}" alt="img" class="img-fluid rounded">
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
                                    <span>jusqu'à</span> -20%
                                </td>
                                <td><span>jusqu'à</span> 20%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-1">
                <div class="feat-description">
                    <h4>L'isolation des garages, caves et vide-sanitaire</h4>
                    <p class="gras_500" data-color="orange">Vous avez un garage en rez-de-chaussée ou en sous-sol, des caves ou un vide-sanitaire:</p>
                    <p class="text-muted">En isolant le plafond de votre garage, de vos caves ou de votre vide-sanitaire, <span class="gras_500">vous isolez avant tout le sol de vos pièces à vivre</span> et vous évitez les déperditions thermiques à travers le sol.
                        Cette isolation est réalisée en posant des <span class="gras_500">panneaux de polystyrène</span> sur le plafond du garage ou des caves.</p>
                </div>
            </div>
        </div><!-- end row -->
    </div> <!-- end container -->
</section>
<section class="section" id="section-explication" data-background-color="bleue-clair">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center gras_500 mt-20 mb-50"><span data-color="vert">L'isolation de votre maison : </span>Des avantages en toutes saisons.</h2>
                <div class="d-flex flex-md-row flex-column mt-50">
                    <div class="block-explication">
                        <h3 class="text-center">Votre maison <span class="gras_500" data-color="orange">sans</span> isolation</h3>
                        <img src="{{ asset('images/maison-sans-isolation.png') }}" class="img-responsive" alt="illustraion d'une maison sans l'isolation thermique">
                        <ul class="list-non-benefit">
                            <li><i class="far fa-times-circle"></i><span class="gras_500">En été :</span> La chaleur extérieur rentre dans votre habitation</li>
                            <li><i class="far fa-times-circle"></i><span class="gras_500">En été :</span> L’air frais s’échappe vers l’extérieur</li>
                            <li class="mt-20"><i class="far fa-times-circle"></i><span class="gras_500">En hiver :</span> La chaleur s’échappe par la toiture et le sol</li>
                            <li><i class="far fa-times-circle"></i><span class="gras_500">En hiver :</span> Vous consommez plus d’énergie pour vous chauffer</li>
                        </ul>
                    </div>
                    <div class="block-explication">
                        <h3 class="text-center">Votre maison <span class="gras_500" data-color="vert">avec</span> isolation</h3>
                        <img src="{{ asset('images/maison-avec-isolation.png') }}" class="img-responsive" alt="illustraion d'une maison avec l'isolation thermique">
                        <ul class="list-benefit">
                            <li><i class="fas fa-check"></i><span class="gras_500">En été :</span> Empêche la chaleur de rentrer à l’intérieur</li>
                            <li><i class="fas fa-check"></i><span class="gras_500">En été :</span> Garde la fraîcheur à l’intérieur de votre maison</li>
                            <li class="mt-20"><i class="fas fa-check"></i><span class="gras_500">En hiver :</span> Garde la chaleur à l’intérieur de votre maison</li>
                            <li><i class="fas fa-check"></i><span class="gras_500">En hiver :</span> Vous économisez sur vos factures de chauffage</li>
                        </ul>
                    </div>
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
                <h2 class="text-center gras_500">Isoler ma maison pour 1€ : Comment est-ce possible?</h2>
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
            <div class="col-md-5 col-sm-12 mt-xs-30 block-question-title">
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
            <div class="col-md-5 col-sm-12 mt-xs-30 block-question-title">
                <h3 class="">Comment je peux profiter de cette aide ?</h3>
                <p class="gras_500" data-color="orange">Seulement 2 conditions sont nécessaires pour être éligible au programme d'isolation des sols pour 1€ :</p>
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
                <img src="{{ asset('images/carte-france-isolation.png') }}" class="image-region-intervention" alt="Carte des zones de France éligibles à lisolation pour 1€ ">
            </div>
            <div class="col-sm-12 col-md-6">
                <h3 class="mb-40">Les régions concernées :</h3>
                <p><span class="gras_500">L'État a définit 3 zones climatiques (H1, H2, H3)</span> pour les opérations d'aides mises en place pour réduire la consommation d'énergie.</p>
                <p>Vous habitez en  <span class="gras_500" data-color="vert">zone H1</span>, dans la région des <span class="gras_500" data-color="vert">Hauts-de-France</span>, en <span class="gras_500" data-color="vert">Normandie</span>, en <span class="gras_500" data-color="vert">Ile-de-France</span>, dans le <span class="gras_500" data-color="vert">Grand-Est</span>, en <span class="gras_500" data-color="vert">Centre Val-de-Loire</span>, en <span class="gras_500" data-color="vert">Bourgogne-Franche-Comté</span>, en <span class="gras_500" data-color="vert">Auvergne-Rhones-Alpes</span>, vous pouvez bénificier de l'isolation de votre maison pour 1€, sous conditions d'éligibilité.</p>
                {{--<p class="mt-40"><span class="gras_500" data-color="vert">Ce dispositif va être étendu à d'autres régions</span> de France. Nous vous proposons de vous tenir informé des dispositions qui seront prises pour bénificier de l'isolation à 1€ dans votre région.</p>
                <a href="" class="btn btn-custom mt-30">Je veux rester informé</a>--}}
            </div>
        </div>
    </div>
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
                        <h2 class="gras_500 mb-30">Le label <span class="gras_700" data-color="vert">RGE Qualibat </span>: Un gage de qualité :</h2>
                        <p><span class="gras_500">Le label RGE(Reconnu Garant de l'environnement)</span> est un signe de qualité délivré à une entreprise qui remplit certains critères lors de la réalisation de travaux d'économie d'énergie dans les logements(isolation thermique, installation d'équipement utilisant des énergies renouvelables...).</p>
                        <p class="gras_500">Le label RGE vous donne la garantie que cette entreprise est reconnue par l'état.</p>
                        <p class="gras_500">Nous faisons appel à une entreprise RGE pour faire vos travaux d'isolation, ce qui vous donne droit à l'attribution de certaines aides publiques.</p>
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
<section class="section" id="section-presentation5" data-background-color="bleue-fonce">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-sm-12 col-md-12">
                <h3 class="text-left text-white mt-30 mb-30 line-height-1-4"><span data-color="vert">Isole </span><span class="text-habitat" data-color="orange">HABITAT </span>est un service du groupe PRESTA HABITAT : société experte dans l'isolation des habitats et des énergies renouvelables.</h3>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section -->
<section class="section" id="section-testimonial-accueil">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="mb-40" data-color="vert">Ils Ont Profité De L'isolation De Leur maison Pour 1€</h2>
            </div>
        </div>
        <div class="row">
            <div class="card-deck">
                <div class="card mb-xs-30">
                    <div class="card-body">
                        <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="vert"></i>
                        <p class="testimonial-content">J’ai isolé mes combles début octobre. Agréablement surprise de sentir <span class="gras_500">plus de chaleur dans la maison et sans augmenter le chauffage. </span>Je recommande vraiment. <i class="fa fa-quote-right" aria-hidden="true" data-color="vert"></i></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img src="{{ asset('images/photo-temoignage4.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                            </div>
                            <div class="info-testimonial-client">
                                <h5 class="testimonial-name" data-color="vert">Laurence</h5>
                                <p class="testimonial-dept">Houilles (78)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-xs-30">
                    <div class="card-body">
                        <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="vert"></i>
                        <p class="testimonial-content">Je ne connaissais pas du tout et j'avoue que j'étais un peu sceptique au départ, j'ai fait le test et j'ai vu que j'avais droit moi aussi à cette aide. <span class="gras_500">J’ai donné une pièce de 1€ une fois la pose finie</span>. <i class="fa fa-quote-right" aria-hidden="true" data-color="vert"></i></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img src="{{ asset('images/photo-temoignage5.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                            </div>
                            <div class="info-testimonial-client">
                                <h5 class="testimonial-name" data-color="vert">Salah</h5>
                                <p class="testimonial-dept">Stains (93)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="vert"></i>
                        <p class="testimonial-content">Il fait froid dans notre grande maison l'hiver, ça revient vraiment cher pour la chauffer entièrement. Les ouvriers nous ont expliqué ce qu'ils allaient faire. <span class="gras_500">Les travaux ont duré 4 heures et on a rien eu à faire</span>. ils ont pris le temps de tout nettoyer avant de partir. <i class="fa fa-quote-right" aria-hidden="true" data-color="vert"></i></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img src="{{ asset('images/photo-temoignage3.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                            </div>
                            <div class="info-testimonial-client">
                                <h5 class="testimonial-name" data-color="vert">Danielle & Alain</h5>
                                <p class="testimonial-dept">Épinal (80)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
@endsection
@section('javascript')
    <script>
        (function ($) {
            /*$(document).ready(function() {
                    var overlay = document.querySelector("#section-overlay");
                    overlay.style.left = "0px";
                    var body = document.getElementsByTagName('body');
                    document.body.classList.add("noScroll");

                var closeOverlay = document.querySelector('#close-overlay');
                closeOverlay.addEventListener('click', function(e){
                    e.preventDefault();
                    overlay.style.left = "-3000px";
                    document.body.classList.remove("noScroll");
                    $('#wizard-card-test').show();
                    $('#wizard-card-test2').hide();
                });

                $('.selectpicker').selectpicker({

                });


            });*/
        })(jQuery);
    </script>
@endsection



