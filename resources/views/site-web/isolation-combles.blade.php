@extends('site-web.layouts.main')
@section('pageTitle', 'isole habitat - isolation des combles')
@section('pageClass', 'isolation-combles')
@section('content')
<!-- HOME -->
<section>
    <div class="container">
        <div class="row justify-content-center mt-50 mb-50">
            <div class="col-sm-12 col-md-5">
                <img src="{{ asset('images/isolation-combles/isolation-combles-image10.jpg') }}" class="img-hero" alt="Illustration isolation des combles perdus">
            </div>
            <div class="col-sm-12 col-md-5 text-center">
                <h1 class="mb-20">L'isolation des combles</h1>
                <div class="">
                    <div>
                        <img src="{{ asset('images/isolation-combles/icon-porcentage-combles-orange@4x.png') }}" srcset="{{ asset('images/isolation-combles/icon-porcentage-combles-orange.svg') }}" class="hero-pourcentage" alt="illustration isolation des combles">
                        <p data-color="orange">De gain de chaleur</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/isolation-combles/icon-porcentage-combles-bleue.svg') }}" srcset="{{ asset('images/isolation-combles/icon-porcentage-combles-bleue.svg') }}" class="hero-pourcentage" alt="illustration isolation des combles">
                        <p data-color="bleue">Sur votre facture de chauffage</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->

<section class="section description-isolation">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10">
                <h2 class="text-center mb-50" data-color="vert">Vous avez des combles que vous n'utilisez pas :</h2>
                <p>Savez-vous que <span class="gras_500">30% des déperdition de chaleur se font par la toiture</span>. C'est pourquoi, isoler vos combles est une nécessité pour éviter que l'air ambiant chauffé en hiver s'échappe de vos pièces à vivre.  En été, la toiture est la surface de la maison la plus exposée à l’ensoleillement.</p>
                <p>Pour <span class="gras_500">réaliser des économies d’énergie</span>, avoir un <span class="gras_500">confort thermique et même accoustique en toutes saisons</span>, la pose d'un isolant thermique performant dans vos combles est indispensable.</p>
                <p><span class="gras_500">Vos combles ne doivent pas être aménagés</span> pour pouvoir profiter du programme d'isolation pour 1€.</p>
            </div>
            <div class="col-sm-12 col-md-10">
                <h3 class="text-center mb-30 mt-50" data-color="orange">Deux techniques sont utilisées</h3>
                <p>La résistance thermique est un critère essentiel de la performance d’un isolant. La norme préconiséé pour l'isolation des combles est un isolant dont la résistance thermique doit être de 7 (R=7 m2.K/W).</p>
                <p class="gras_500">Le choix de l'isolant et de la technique utilisée pour l'isolation de vos combles dépendent de plusieurs critères :</p>
                <ul class="choix_isolant_liste">
                    <li>La hauteur sous-toiture</li>
                    <li>Le type de plancher dans les combles</li>
                    <li>L'accès aux combles</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center mt-20">
            <div class="col-sm-12 col-md-10">
                <h4 class="mb-50" data-color="orange">1- La projection de laine de roche ou de verre</h4>
            </div>
            <div class="col-sm-12 col-md-5">
                <img src="{{ asset('images/isolation-combles-soufflage.jpg') }}" alt="illustration projection de laine à souffler pour l'isolation des combles" class="img-fluid rounded">
            </div>
            <div class="col-sm-12 col-md-5">
                <p class="gras_500">La projection de laine de verre ou de roche est utilisée lorsque les combles sont difficile d'accès ou par l'abscence de plancher dur dans vos combles.</p>
                <p>Cette méthode consiste à souffler des flocons de laine de verre ou de roche sur toute la surface du sol de vos combles.On utilise une machine appelée "souffleuse" pour projeter ces flocons de laine. Le nombre de sacs insufflés et l'épaisseur totale dépendent de la surface au sol de vos combles et de la conductivité thermique de l'isolant.</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-start mt-30">
            <div class="col-sm-12 col-md-5 ml-50">
                <h5 class="mb-30">Type d'isolant utilisé :</h5>
                <ul class="choix_isolant_liste">
                    <li>Résistance thermique très élevée R=7</li>
                    <li>Fort pouvoir couvrant</li>
                    <li>Incombustible et imputrescible</li>
                    <li>Ne se tasse pas </li>
                    <li>Très bonnes performances acoustiques</li>
                    <li>Epaisseur de 32cm</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-5">
                <img src="{{ asset('images/isolation-combles/laine-souffle-isolation2.jpg') }}" alt="illustration sac de laine de verre à souffler" class="img-type-isolant">
            </div>
        </div>
        <div class="row justify-content-center mt-20">
            <div class="col-sm-12 col-md-10">
                <h4 class="mb-50" data-color="orange">2- Le déroulage de rouleaux de laine de verre</h4>
            </div>
            <div class="col-sm-12 col-md-5">
                <img src="{{ asset('images/isolation-combles/isolation-combles-deroule.jpg') }}" alt="illustration projection de laine à souffler pour l'isolation des combles" class="img-fluid rounded">
            </div>
            <div class="col-sm-12 col-md-5">
                <p class="gras_500">Le déroulage de laine de verre en rouleau est utilisé lorsque les combles ont un accès facile et que le plancher au sol est en dur.</p>
                <p>Les rouleaux de laine de verre sont fabriqués à partir de produit naturel (sable) et se présentent sous la forme de matelas de fibres. Cette méthode consiste à dérouler les tapis de laine de verre sur toute la surface au sol de vos combles. L'épaisseur détermine la capacité de l'isolant à laisser passer l'air à travers les combles.</p>
            </div>
        </div>
        <div class="row justify-content-center align-items-start mt-30">
            <div class="col-sm-12 col-md-5 ml-50">
                <h5 class="mb-30">Type d'isolant utilisé :</h5>
                <ul class="choix_isolant_liste">
                    <li>Résistance thermique très élevée R=7</li>
                    <li>Fort pouvoir couvrant</li>
                    <li>Incombustible et imputrescible</li>
                    <li>Excellentes performances thermiques et d’étanchéité</li>
                    <li>Très bonnes performances acoustiques</li>
                    <li>Epaisseur de 28cm</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-5">
                <img src="{{ asset('images/isolation-combles/rouleau-laine-isolation.jpg') }}" alt="illustration rouleau de laine de verre pour isolation des combles" class="img-type-isolant">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10">
                <h3 class="text-center mb-30 mt-50" data-color="orange">Le prix de l'isolation des combles <span class="gras_500">sans</span> le programme d'isolaion à 1€.</h3>
                <p>Le prix de l’isolation des combles perdus dépends de plusieurs paramètres tels que le type d’isolant choisi ou l'honoraire de l'artisan. Pour la pose d'une isolant avec une résistance thermique R=7 dans vos combles, il faut compter entre 20 et 40€ par mètre carré.</p>
                <p>Il est tout à fait possible d’isoler vos combles perdus vous-même. Mais réaliser ce type de travaux sans passer par un professionnel ne vous permettra pas de bénéficier des aides disponibles mis en place par l'État. <span class="gras_500">Faites appel à des professionnels labellisé RGE</span> (Reconnu Garant de l’Environnement), agrées par l'État.</p>
                <p data-color="vert">N'hésitez pas à <span class="gras_500"></span>profiter de l'isolation de vos combles pour 1€ symbolique et économisez jusqu'à 20% sur votre facture de chauffage.</p>
            </div>
        </div>
    </div>
</section>
    @include('site-web.layouts.formulaire')
@endsection