@extends('site-web.layouts.main')
@section('pageTitle', 'Politique de confidentialité')
@section('pageClass', 'politique-confidentialite')
@section('content')
    <nav id='cssmenu'>
        <div class="container-nav d-flex justify-content-center">
            <div class="logo"><a href="{{ route('site-web.accueil') }}"><img id="logo" src="{{ asset('images/Isole-Habitat-logo.svg') }}" alt="logo isole habitat"></a></div>
            <div id="head-mobile"></div>
            <div class="button"></div>
        </div>
    </nav>
<section>
    <div class="container">
        <div class="row justify-content-center mt-50 mb-50">
            <div class="col-sm-12">
                <h1 class="text-center mb-50">Politique de confidentialité</h1>
                <p>La protection de votre confidentialité nous tient à coeur. isole-habitat.fr s'engage à protéger la confidentialité, la sécurité et l'exactitude des renseignements personnels qu'ils recueillent, utilisent ou communiquent conformément à la législation applicable. La présente politique de protection de la confidentialité ( la « politique de protection de la confidentialité » ) constitue un énoncé des principes et des lignes directrices concernant la protection des renseignements personnels des individus qui sont nos clients, nos fournisseurs de services et d'autres individus (« vous ») (à l'exception de notre personnel, dont les renseignements personnels sont recueillis, utilisés et communiqués conformément à notre politique de protection de la confidentialité à l'intention du personnel).</p>
                <h2 class="mb-20 mt-30">1.Collecte de l’information</h2>
                <p>Nous recueillons vos renseignements personnels aux fins indiquées ci-dessous :</p>
                <p>a - Afin de fournir le produit, service ou renseignement que vous avez demandé : Si vous êtes un client de l'un de nos services, nous utilisons votre nom et votre adresse (adresse postale et adresse de courrier électronique) afin de livrer le produit, service ou renseignement que vous avez demandé</p>
                <p>b - Vous envoyer des renseignements : De temps à autre, nous pouvons vous envoyer de plus amples renseignements concernant nos produits et services.</p>
                <p>En outre, nous recevons et enregistrons automatiquement des informations à partir de votre ordinateur et navigateur, y compris votre adresse IP, vos logiciels et votre matériel, et la page que vous demandez.</p>
                <h2 class="mb-20">2. Utilisation des informations</h2>
                <p>Toutes les informations que nous recueillons auprès de vous peuvent être utilisées pour :</p>
                <ul>
                    <li>Personnaliser votre expérience et répondre à vos besoins individuels</li>
                    <li>Fournir un contenu publicitaire personnalisé</li>
                    <li>Améliorer notre site Web</li>
                    <li>Améliorer le service client et vos besoins de prise en charge</li>
                    <li>Vous contacter par e-mail</li>
                    <li>Administrer un concours, une promotion, ou un enquête</li>
                </ul>
                <h2 class="mb-20">4. Divulgation à des tiers</h2>
                <p>Nous ne vendons, n’échangeons et ne transférons pas vos informations personnelles identifiables à des tiers. Cela ne comprend pas les tierce parties de confiance qui nous aident à exploiter notre site Web ou à mener nos affaires, tant que ces parties conviennent de garder ces informations confidentielles.</p>
                <p>Nous pensons qu’il est nécessaire de partager des informations afin d’enquêter, de prévenir ou de prendre des mesures concernant des activités illégales, fraudes présumées, situations impliquant des menaces potentielles à la sécurité physique de toute personne, violations de nos conditions d’utilisation, ou quand la loi nous y contraint.</p>
                <p>Les informations non-privées, cependant, peuvent être fournies à d’autres parties pour le marketing, la publicité, ou d’autres utilisations.</p>
                <h2 class="mb-20">5. Protection des informations</h2>
                <p>Nous mettons en œuvre une variété de mesures de sécurité pour préserver la sécurité de vos informations personnelles. Nous utilisons un cryptage à la pointe de la technologie pour protéger les informations sensibles transmises en ligne. Nous protégeons également vos informations hors ligne. Seuls les employés qui ont besoin d’effectuer un travail spécifique (par exemple, la facturation ou le service à la clientèle) ont accès aux informations personnelles identifiables. Les ordinateurs et serveurs utilisés pour stocker des informations personnelles identifiables sont conservés dans un environnement sécurisé.</p>
                <h3>Est-ce que nous utilisons des cookies ?</h3>
                <p>Oui. Nos cookies améliorent l’accès à notre site et identifient les visiteurs réguliers. En outre, nos cookies améliorent l’expérience d’utilisateur grâce au suivi et au ciblage de ses intérêts. Cependant, cette utilisation des cookies n’est en aucune façon liée à des informations personnelles identifiables sur notre site.</p>
                <h2 class="mb-20">6. Consentement</h2>
                <p>En utilisant notre site, vous consentez à notre politique de confidentialité.</p>
            </div>
        </div>
    </div>
</section>
@endsection