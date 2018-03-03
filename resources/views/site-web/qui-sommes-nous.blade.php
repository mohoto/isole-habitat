@extends('layouts.main')
@section('pageTitle', 'isole habitat - qui_sommes_nous')
@section('pageClass', 'qui_sommes_nous')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center mb-50">
            <div class="col-sm-12 col-md-10">
                <h1 class="text-center mt-50 mb-50">Qui sommes-nous?</h1>
                <h2 class="text-center mb-30" data-color="vert">Notre mission</h2>
                <p>Lutter contre la précarité énergétique dans les logements mal isolés et promouvoir les programmes d’aide mis en place par l’Etat pour l’amélioration des habitats.</p>
                <p>En France, on estime que 5,6 millions de ménages sont en situation de précarité énergétique. Le prix des énergies ne cessent d'augmenter et le budget consacré pour se chauffer ne cesse d'augmenter.</p>
                <p>Les Français consacrent en moyenne 14% de leur budget pour se chauffer.</p>
                <p>87 % des ménages en situation de précarité énergétique sont dans le parc privé et plus d'un million des propriétaires en situation de précarité énergétique résident en maisons individuelles.</p>
            </div>
        </div>
        <div class="row justify-content-center mt-30 mb-50">
            <div class="col-sm-12 col-md-10">
                <h2 class="text-center mb-30" data-color="vert">Des spécialistes de l'isolation</h2>
                <p><span class="gras_500" data-color="vert">Isole </span><span class="text-habitat gras_500" data-color="orange">HABITAT </span> est un service du groupe PRESTA HABITAT, société experte dans l'isolation des habitats et la transition énergétique. Nous comptons un réseau d’entreprises spécialisées dans l’isolation des logements.</p>
                <p><span class="gras_500">Nous nous occupons de toutes les formalités</span> pour que vous puissiez bénéficier de l'isolation pour 1€ symbolique, nous mandatons ensuite une entreprise partenaire <span class="gras_500" data-color="vert"> RGE </span>pour vos travaux d’isolation.</p>
                <p><span class="gras_500" data-color="vert">Le label RGE</span> vous donne la garantie que cette entreprise est reconnue par l’Etat.</p>
            </div>
        </div>
        <div class="row justify-content-center mt-30 mb-50">
            <div class="col-sm-12 col-md-10">
                <h2 class="text-center mb-30" data-color="vert">Une pré-viste technique pour mieux cibler vos besoins</h2>
            </div>
            <div class="col-sm-12 col-md-5">
                <img src="{{ asset('images/visite-technique-isolation.jpg') }}" alt="illustration visite technique isolation à 1€" class="img-fluid rounded">
            </div>
            <div class="col-sm-12 col-md-5">
            <p>Un de nos technicien se déplace chez vous pour déterminer vos besoins en isolation : en effet, chaque maison est différente et nécessite une isolation adaptée. Il vous renseignera sur les types d'isolations auxquels vous avez droit et sur le type d'isolant à poser dans votre maison.</p>
                <p><span class="gras_500">Aucun frais ne vous sera demandé pour cette pré-viste</span>, ce processus fait partie intégrante de notre programme d'isolation pour 1€ symbolique.</p>
            </div>
        </div>
        <div class="row justify-content-center mt-50 mb-30">
            <div class="col-sm-12 col-md-10">
                <h2 class="text-center mb-30" data-color="vert">Des profesionnels reconnus par l'état</h2>
                <p>Pour que vous puissiez bénéficier des aides de l'État en matière d'isolation, vous devez faire appel à une société reconnu par l'Etat.<span class="gras_500"> Seuls les titulaires d'un signe de qualité RGE (reconnus garant de l'environnement) peuvent effectuer vos travaux d'isolation si vous ne finacez pas vous-même votre isolation.</span>.</p>
                <p class="gras_500">C'est pour cela que nous sélectionnons des entreprises exclusivement labelisées <span class="" data-color="vert">RGE</span> pour la pose de votre isolation.</p>
            </div>
        </div>
    </div>
</section>
<section data-background-color="bleue-clair">
    <div class="container">
        <div class="row justify-content-center mt-40">
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-facture"></i>
                    <div class="ml-20 align-self-center text-left">
                        <p class="text-center">Aucun démarche à faire</p>
                        <p class="text-center" data-color="orange">Nous nous occupons de toutes les formalités.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-4-heures2"></i>
                    <div class="ml-20 align-self-center text-left">
                        <p class="text-center">Votre isolation en moins de 4 heures</p>
                        <p class="text-center" data-color="orange">Des travaux rapides, pas de perte de temps pour vous.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="features-box">
                    <i class="icon-fantastic icon-icon-proprete"></i>
                    <div class="ml-20 align-self-center text-left">
                        <p class="text-center">Propreté et nettoyage du chantier</p>
                        <p class="text-center" data-color="orange">Nettoyage en fin de chantier et évacuation des déchets.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection