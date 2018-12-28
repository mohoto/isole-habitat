@extends('site-web.layouts.main')
@section('pageTitle', 'Votre isolation pour 1€ dans le Grand-Est')
@section('pageClass', 'page_grand_est')
@section('content')
<!-- HOME -->
<header data-background-color="bleue-fonce">
    <nav id='cssmenu-grand-est'>
        <div class="container-nav d-flex align-items-center t-center justify-content-md-between align-items-md-end">
            <div class="logo">
                <a href="{{ route('site-web.accueil') }}"><img id="logo" src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat"></a></div>
            {{--<div>
                <p class="text-white mb-20" id="dispositif-texte-nav">Dispositif CEE d'aide de l'Etat.</p>
            </div>--}}
            <div class="">
                <a href="#" id="btn-formulaire-ribbon" class="btn btn-rounded btn-vert btn-formulaire ml-20">Je veux profiter de cette aide</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="ribbon-formulaire">
        <div class="row justify-content-md-center align-items-md-center">
            <h4 class="gras_300" data-color="blanc"><span data-color="orange">Dépensez moins pour vous chauffer  :</span> Profitez de votre isolation pour 1€</h4>
            {{--<a href="#" id="btn-formulaire-ribbon" class="btn btn-rounded btn-vert btn-formulaire ml-20">Testez votre éligibilité</a>--}}
            <a href="#" id="btn-formulaire-ribbon" class="btn btn-rounded btn-vert btn-formulaire ml-20">Je veux profiter de cette aide</a>
        </div>
    </div>
</header>
<h1 class="text-center gras_500 mt-40">L'isolation De Votre Maison Pour 1€ Dans Le Grand-Est:</h1>
<section class="section pt-0" id="section-presentation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="slogan-condition text-center mt-10 mb-40" data-color="orange">Sans aucune condition de revenu depuis le 1er septembre 2018.</h2>
            </div>
            <div class="col-md-12 pt-30 pb-30 section-slogan-grand-est" data-background-color="bleue-fonce">
                <h3 class="text-center text-white line-height-1-5"><span class="gras_500">Vous habitez dans le Grand-Est</span> et vous êtes propriétaire ou locataire d'une maison individuelle, <span class="gras_400" data-color="vert">vous pouvez vous aussi profiter de lisolation de votre garage, de vos caves et vide-sanitaire pour 1€ </span><span class="gras_500">avec les dispositifs d'aide de l'Éat</span>.</h3>
            </div>
        </div>
    </div>
</section>
<section class="section pt-10" id="section-benefit-grand-est">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div style="position: relative";>
                    <img src="{{ asset('images/isolation-garage-noir.jpg') }}" alt="img" class="img-fluid rounded">
                    <div class="bg-overlay">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-xs-20">
                <ul id="list-benefit-grand-est1" class="list-benefit-grand-est">
                    <li><i class="fas fa-check-square"></i>Dispositif CEE d'aide de l'Etat</li>
                    <li><i class="fas fa-check-square"></i>Propriétaire ou locataire</li>
                    <li><i class="fas fa-check-square"></i>Une réponse en 48 heures</li>
                    <li><i class="fas fa-check-square"></i>Aucune formalité à faire</li>
                </ul>
                <ul id="list-benefit-grand-est2" class="list-benefit-grand-est">
                    <li><i class="fas fa-check-square"></i>Surface illimitée</li>
                    <li><i class="fas fa-check-square"></i>Votre isolation sous 7 jours</li>
                    <li><i class="fas fa-check-square"></i>Aucun frais à avancer</li>
                    <li><i class="fas fa-check-square"></i>1€ après travaux</li>
                </ul>
            </div>
        </div><!-- end row -->
        <div class="row align-items-center mt-50">
            <div class="col-12 col-md-6">
                <div class="mb-xs-20">
                    <img src="{{ asset('images/cee-certifcats.png') }}" alt="img" class="img-fluid img-certicats block-center">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h5 class="line-height-1-5">Le dispositif des certificats d’économies d’énergie (CEE), créé en 2006 repose sur <span class="gras_500" data-color="vert">une obligation de réalisation d’économies d’énergie imposée par l'État aux vendeurs d’énergie</span>. Cette obligation comprend notamment la prise en charge de vos travaux d'isolation.</h5>
            </div>
        </div><!-- end row -->
    </div> <!-- end container -->
</section>
<section class="section" id="section-information-grand-est" data-background-color="bleue">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 block-information" data-background-color="vert">
                <h3><i class="ion-ios7-plus-outline"></i> D'ECOLOGIE</h3>
                <img src="{{ asset('images/icon-ecologie.svg') }}" alt="illustration isolation à 1 euro ecologique" class="img-fluid">
                <p class="text-center" data-color="blanc">Réduit les dépenses énergétiques</p>
            </div>
            <div class="col-md-8 block-information" data-background-color="bleue">
                <h3><i class="ion-ios7-plus-outline"></i> D'ECONOMIE</h3>
                <div class="d-flex flex-column flex-md-row justify-content-around align-items-center">
                    <div class="">
                        <img src="{{ asset('images/icon-economie-sol.svg') }}" alt="illustration isolation à 1 euro économie sur facture de chauffage" class="img-fluid img-economie">
                    </div>
                    <div class="pl-3">
                        <h2 class="text-left line-height-1-4" data-color="blanc"><span class="gras_400">Economisez jusqu'à -20%</span> sur vos factures de chauffage.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-presentation-video">
    <div class="container">
        <h2 class="text-center presentaion-couple">Ils ont isolé le garage et les caves de leur maison <span class="gras_500" data-color="vert">pour 1€</span> au lieu de <span class="gras_500" data-color="orange">4241€</span>.</h2>
        <div class="row justify-content-center align-items-center mt-40">
            <div class="col-md-5 mb-xs-20">
                <img id="client-isolation" class="rounded-circle block-center" src="{{ asset('images/photo-couple-isolation-nb.jpg') }}" alt="illustration couple client isolation à 1 euro" />
            </div>
            <div class="col-md-5">
                <p>Frédéric et Laurence ont fait <span class="gras_500" data-color="vert">financé en totalité</span> l'isolation de leur garage et de leurs caves <span class="gras_500">grâce à notre programme et au dispositif CEE mis en place par l'etat.</p>
                <p><span class="gras_500" data-color="orange">Tous les foyers peuvent en profiter, sans aucune condition de revenu</span>. Nous nous occupons de toutes les formalités.</p>
            </div>
        </div>
        <div class="row mt-50" id="section-fonctionnement">
            <h3 class="text-center  mb-30"><span class="gras_500" data-color="vert">Inscrivez-vous au programme</span> et profitez de l'isolation des sols de votre maison pour 1€</h3>
            <div class="col-md-12 mt-30">
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
<section class="section" id="section-type-isolation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="mb-40">Les types d'isolation auxquels vous avez droit :</h2>
                <h3 class="mt-20" data-color="vert">Avec l’isolation des sols à 1€, vous pouvez cumuler ces 2 types d’isolation</h3>
                <h4 class="mt-20" data-color="orange">Surface illimitée!</h4>
            </div>
        </div> <!-- end row -->
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 mb-xs-40">
                <div class="features-box">
                    <img src="{{ asset('images/icon-iso-plancher-garage.png') }}" srcset="{{ asset('images/icon-iso-plancher-garage.svg') }}" alt="illustration isolation des garages">
                    <h5 class="m-t-20">Isolation des garages</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
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
        <h4 class="slogan-condition text-center mt-30" data-color="orange">Sans aucune condition de revenu depuis le 1er septembre 2018.</h4>
    </div> <!-- end container -->
</section>
<section class="section pt-0" id="section-deperdition">
    <div class="container pt-20" data-background-color="bleue-fonce">
        <div class="row">
            <div class="col-12 col-md-5">
                <img id="maison-illustartion" class="block-center" src="{{ asset('images/masion-pourcentage-sol.png') }}" alt="illustration déperdition thermique par le sol d'une maison">
            </div>
            <div class="col-12 col-md-7">
                <h3 class="text-white mb-30">Le saviez-vous:</h3>
                <h4 class="text-white"><span class="gras_500" data-color="orange">15% de la déperdition thermique</span> et énergétique se font par les planchers-bas de votre maison.</h4>
                <h4 class="text-white mt-20">Une bonne isolation permet de limiter ces pertes d'énergie et ainsi de <span class="gras_500" data-color="vert">réduire vos factures de chauffage</span>.</h4>
            </div>
        </div>
    </div>
</section>
<section class="section pt-0" id="section-societe">
    <div class="container">
        <img id="logo" class="block-center" src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat">
        <p class="text-center sub-title-logo mb-30">Des professionnels qualifiés</p>
        <div class="row societe-part1 justify-content-center mb-30">
            <div class="col-xs-12 col-md-10">
                    <h2 class="text-center mb-30" data-color="orange">Des Professionnels Reconnus Par l'État</h2>
                    <h5 class="gras_500 line-height-1-4">Nous faisons appel à une entreprise partenaire RGE(Reconnu Garant de l'environnement) pour faire vos travaux d'isolation, ce qui vous donne le droit de bénéficier de certaines aides publiques.</h5>
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
<!-- Testimonials section -->
<section class="section" id="section-testimonial-grand-est" data-background-color="bleue-fonce">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="mb-40" data-color="vert">Ils Ont Profité De L'isolation Des sols Pour 1€ Dans Le Grand-est</h2>
            </div>
        </div>
        <div class="row">
            <div class="card-deck">
                <div class="card mb-xs-30">
                    <div class="card-body">
                        <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="vert"></i>
                        <p class="testimonial-content">J'ai fait la demande, un conseiller m'a rappelé le lendemain pour m'expliquer la suite. <span class="gras_500">Une semaine après, ils sont passés pour poser l'isolation</span>. Ils m'ont donné tout de suite ma facture avec <span class="gras_500">juste 1€ symbolique à payer</span>. <i class="fa fa-quote-right" aria-hidden="true" data-color="vert"></i></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img src="{{ asset('images/photo-temoignage1.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                            </div>
                            <div class="info-testimonial-client">
                                <h5 class="testimonial-name" data-color="vert">Isabelle</h5>
                                <p class="testimonial-dept">Châlons-en-Champagne (54)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-xs-30">
                    <div class="card-body">
                        <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true" data-color="vert"></i>
                        <p class="testimonial-content">Des amis nous ont parlé de l'isolation à 1€. On a isolé le garage et les sous-sols de la maison. <span class="gras_500">On a dèjà diminué le chauffage dans la maison et il fait toujours aussi bon à l'intérieur</span>. On attend de voir ce que donne l'isolation en été. <i class="fa fa-quote-right" aria-hidden="true" data-color="vert"></i></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img src="{{ asset('images/photo-temoignage2.jpg') }}" class="rounded-circle" alt="illustration temoignage isolation">
                            </div>
                            <div class="info-testimonial-client">
                                <h5 class="testimonial-name" data-color="vert">Maëva & Franck</h5>
                                <p class="testimonial-dept">Bar-Le-Duc (55)</p>
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
@endsection
@section('javascript')
    <script>
        (function ($) {

        })(jQuery);
    </script>
@endsection



