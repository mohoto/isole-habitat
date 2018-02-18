@extends('layouts.main')
@section('pageClass', 'isolation-combles')
@section('content')
    <!-- HOME -->
    {{--<section class="home bg-img-combles" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="home-fullscreen">
                        <div class="full-screen">
                            <div class="home-wrapper home-wrapper-alt">
                                <h1 class="text-white">L'isolation des combles</h1>
                                <h4 class="">Ubold is a fully featured premium admin template built on top of awesome Bootstrap 4.0.0-beta, modern web technology HTML5, CSS3 and jQuery. It has many ready to use hand crafted components. </h4>
                                <a href="http://themeforest.net/item/ubold-responsive-web-app-kit/13489470?ref=coderthemes" target="_blank" class="btn btn-white-bordered">Buy Template</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <section>
        <div class="container">
            <div class="d-flex flex-row justify-content-between mt-50 mb-50">
                <div class="part1">
                    <img src="{{ asset('images/technique-isolation-plafond.jpg') }}" class="img-hero" alt="Illustration isolation des combles perdus">
                </div>
                <div class="part2 text-center">
                    <h1 class="mb-20 mt-30 text-white">L'isolation des sols</h1>
                    <div class="">
                        <div>
                            <img src="{{ asset('images/isolation-combles/icon-porcentage-combles-orange@4x.png') }}" srcset="{{ asset('images/isolation-combles/icon-porcentage-combles-orange.svg') }}" class="hero-pourcentage" alt="illustration isolation des combles">
                            <p class="text-white">De gain de chaleur</p>
                        </div>
                        <div>
                            <img src="{{ asset('images/isolation-combles/icon-porcentage-combles-orange@4x.png') }}" srcset="{{ asset('images/isolation-combles/icon-porcentage-combles-bleue.svg') }}" class="hero-pourcentage" alt="illustration isolation des combles">
                            <p class="text-white">Sur votre facture de chauffage</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h2 class="text-center mb-30">Vous avez un garage en rez-de-chaussé, en sous-sol ou des caves :</h2>
                    <p><span class="gras_500" data-color="vert">Isole </span><span class="text-habitat gras_500" data-color="orange">HABITAT </span> est une marque déposée du groupe PRESTA HABITAT, société experte dans l'isolation des habitats et la transition énergétique. Nous comptons un réseau d’entreprises spécialisées dans l’isolation des logements.</p>
                    <p>Nous nous occupons de toutes les formalités pour que vous puissiez bénéficier de l'isolation pour 1€ symbolique,nous mandatons ensuite une entreprise partenaire <span class="gras_500" data-color="vert"> RGE </span>pour vos travaux d’isolation.</p>
                    <p><span class="gras_500" data-color="vert">Le label RGE</span> vous donne la garantie que cette entreprise est reconnu par l’Etat.</p>
                </div>
            </div>
        </div>
    </section>
    @include('site-web.layouts.formulaire')
@endsection