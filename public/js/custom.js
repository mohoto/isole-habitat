(function($) {
    $(document).ready(function(){
        $('.btn-formulaire').click(function (e) {
            e.preventDefault();
            /*$('#section-formulaire').slideDown();*/
            var id = '#section-formulaire';
            var speed = 750;
            $('html,body').animate({
                scrollTop: $(id).offset().top
            }, speed);
            return false;
        });
        /*Onglet "besoin de conseils"*/
        $('.popup_aide').css("display","none");
        $(window).scroll(function(){
            if($(this).scrollTop()>200){
                $('.popup_aide').fadeIn();
            }else{
                $('.popup_aide').fadeOut();
            }
        });
        /*Popup "besoin de conseils"*/
        function getHourValModal(){
            var val;
            var heure_modal = document.forms['phoneFormModal'].elements['heure_rappel_modal'];
            for(var i=0; i<heure_modal.length; i++){
                if (heure_modal[i].checked){
                    val = heure_modal[i].value;
                    break;
                }
            }
            /*if(val == 'type-heure-modal-1'){
                val = '9h-12h';
            }else if(val == 'type-heure-modal-2'){
                val = '12h-14h';
            }else if(val == 'type-heure-modal-3'){
                val = '14h-18h';
            }else if(val == 'type-heure-modal-4'){
                val = '18h-20h';
            }*/
            return val;
        }
        $('#btn_phone_modal').click(function () {
            var x = document.querySelector('#phoneFormModal');
            valHeure = getHourValModal();
            var data = $('#phoneFormModal').serializeArray();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'post',
                url: '/isolation/public/formulaire-rappel',
                data: data,
                success: function() {
                    $('#phoneModal').modal('hide');
                    alert('enregistré');
                    //alert(response.nonClient);
                    /*swal({
                        text: "<h5 data-color='orange'>Votre demande a été prise en compte</h5>" +
                        "<p>Un conseiller isolation vous rappellera rapidement" +
                        "<p><strong data-color="orange">Entre " + valHeure + "</strong></p>",
                        timer: 3000,
                        showConfirmButton: false
                    });*/
                },
                error: function(){
                    alert('pas enregistré');
                }
            });
            /***Validation inputs formulaire***/
            function validateInput(){
                var valid = true;
                var x = document.querySelectorAll('.tab');
                var y = x.getElementsByTagName('input');
                for(var i = 0; i < y.length; i++){
                    if(y[i].value == "" ){
                        valid = false;
                    }
                }
                return valid;
            }

            /***Validation inputs formulaire***/
            function validateRadio(){
                var x = document.querySelectorAll('.tab');
                var y = x.getElementsByTagName('input[type="radio"]');
                //var heure_modal = document.forms['phoneFormModal'].elements['heure_rappel_modal'];
                for(var i=0; i<y.length; i++){
                    if (heure_modal[i].checked){
                        alert('radio input ok');
                    }
                }
            }
            /**********************************************/
        /*input chiffre format*/
        var $form = $( "#eligibleForm" );
        var $inputRevenu = $('#revenus_reference');

        $inputRevenu.on( "keyup", function( event ) {


            // When user select text in the document, also abort.
            var selection = window.getSelection().toString();
            if ( selection !== '' ) {
                return;
            }

            // When the arrow keys are pressed, abort.
            if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                return;
            }
            var $this = $(this);
            // Get the value.
            var input = $this.val();

            var input = input.replace(/[\D\s\._\-]+/g, "");
            input = input ? parseInt( input, 10 ) : 0;
            $this.val( function() {
                return ( input === 0 ) ? "" : input.toLocaleString( "fr-FR" );
            } );
        });


        /**
         * ==================================
         * When Form Submitted
         * ==================================
         */
        $form.on( "submit", function( event ) {

            var $this = $( this );
            var arr = $this.serializeArray();

            for (var i = 0; i < arr.length; i++) {
                arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
            };

            console.log( arr );

            event.preventDefault();
        });

        /*input nombre telephone*/
        var $inputPhone = $('.telephone_input');
        $inputPhone.on("keyup", function(event){
            // When user select text in the document, also abort.
            var selection = window.getSelection().toString();
            if ( selection !== '' ) {
                return;
            }

            // When the arrow keys are pressed, abort.
            if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                return;
            }
            var $this = $(this);
            var input = $this.val();
            input = input.replace(/[\W\s\._\-]+/g, '');
            var split = 2;
            var chunk = [];
            for (var i = 0, len = input.length; i < len; i += split) {
                chunk.push( input.substr( i, split ) );
            }

// 4
            $this.val(function() {
                return chunk.join(" ").toUpperCase();
            });
        });


        /*****Wizard function*******/
        var currentTab = 0;
        var prevButton = document.querySelector('#prevBtn');
        var nextButton = document.querySelector('#nextBtn');
        var tabBlock = document.querySelector('#tab-block-next');
        function initTab(){
            currentTab = 0;
            tabBlock.style.width = "100%";
            nextButton.style.width = "50%";
            prevButton.style.display = "none";
            nextButton.classList.remove('btn-orange');
            nextButton.classList.add('btn-vert');
            nextButton.innerHTML = "Suivant";
            var check = document.querySelectorAll('.checkbox')
            for(var i=0; i<check.length; i++){
                check[i].checked = false;
            }
        }
        showTab(currentTab);
        function showTab(n){
            var x = document.querySelectorAll('.tab');
            x[n].style.display = "block";
            if(n == 0) {
                initTab();
            }
            else if(n == (x.length-2)) {
                tabBlock.style.width = "50%";
                nextButton.style.width = "100%";
                prevButton.style.display = "block";
                nextButton.innerHTML = "Tester maintenant";
                nextButton.addEventListener('click', testEligibilite);
            }
            else if(n == (x.length-1)) {
                tabBlock.style.width = "100%";
                nextButton.style.width = "50%";
                prevButton.style.display = "none";
                nextButton.classList.remove('btn-vert');
                nextButton.classList.add('btn-orange');
                nextButton.innerHTML = "Me rappeler";
            }
            else {
                nextButton.innerHTML = "Suivant";
                tabBlock.style.width = "50%";
                nextButton.style.width = "100%";
                prevButton.style.display = "block";
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
            if(currentTab == 0) {
                if (validateCheckboxChauf() && validateCheckboxIso()) {
                    x[currentTab].style.display = "none";
                    currentTab += 1;
                    showTab(currentTab);
                } else if(validateCheckboxChauf() === false){
                    swal({
                        text: '<h5 data-color="orange">Faîtes un choix:</h5>' +
                        '<p>Selectionnez votre ou vos systèmes de chauffage</p>',
                        timer: 2000,
                        showConfirmButton: false
                    });
                } else if(validateCheckboxIso() === false){
                    swal({
                        text: '<h5 data-color="orange">Faîtes un choix:</h5>' +
                        "<p>Selectionnez les types d'isolations à faire dans votre maison</p>",
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            }else if (currentTab == x.length - 1) {
                var valHeure;
                valHeure = getHourValEligible();

                $('#phoneModal').modal('hide');
                swal({
                    text: '<h5 data-color="orange">Votre demande a été prise en compte</h5>' +
                    '<p>Un conseiller isolation vous rappellera rapidement</br> Entre ' + valHeure + '</p>',
                    timer: 3000,
                    showConfirmButton: false
                });
                    x[currentTab].style.display = "none";
                    currentTab = 0;
                    showTab(currentTab);
                    document.querySelector('#info-resultat-ok').style.display =  "none";
                    document.querySelector('#info-resultat-none').style.display =  "none";
            }else {
               // if (validateForm()) {
                    x[currentTab].style.display = "none";
                    currentTab += 1;
                    showTab(currentTab);
                //}
                /*else {
                    var y = x[currentTab].getElementsByTagName('input');
                    for (var i = 0; i < y.length; i++) {
                        if (y[i].value == "") {
                            y[i].style.borderColor = "#ee7626";
                        }
                    }
                }*/

            }
        });
        function getRadioVals(){
            var val;
            var radios = document.forms['eligibleForm'].elements['nombre_personne'];
            // loop through list of radio buttons
            for (var i=0; i<radios.length; i++) {
                if ( radios[i].checked ) { // radio checked?
                    val = radios[i].value; // if so, hold its value in val
                    break; // and break out of for loop
                }

            }
            return val; // return value of checked radio or undefined if none checked
        }
        function getHourValEligible(){
            var val;
            var heure_eligible = document.forms['eligibleForm'].elements['heure_rappel'];
            for(var i=0; i<heure_eligible.length; i++){
                if (heure_eligible[i].checked){
                    val = heure_eligible[i].value;
                    break;
                }
            }
            if(val == 'type-heure-1'){
                val = '9h-12h';
            }else if(val == 'type-heure-2'){
                val = '12h-14h';
            }else if(val == 'type-heure-3'){
                val = '14h-18h';
            }else if(val == 'type-heure-4'){
                val = '18h-20h';
            }
            return val;
        }
        function dispalyEligibilite(eligible){
            if(eligible){
                document.querySelector('#info-resultat-ok').style.display =  "block";
            }
            else{
                document.querySelector('#info-resultat-none').style.display =  "block";
            }
        }

        function testEligibilite(){
            var eligible = true;
            var formRef = document.forms['eligibleForm'].elements['revenus_reference'];
            var checkbox = document.forms['eligibleForm'].elements['type_chauffage'];
            var codePostal = document.forms['eligibleForm'].elements['code_postal'];
            var PostalDept = codePostal.value.substr(0, 2);
            var formRevRef = formRef.value;
            var revRef = formRevRef.replace(/[($)\s\._\-]+/g, '');
            var nbrFoyer = getRadioVals();
            if((checkbox[2].checked === true) && (checkbox[0].checked === false) && (checkbox[1].checked === false) && (checkbox[3].checked === false) && (checkbox[4].checked === false)){
                eligible =  false;
            }
            else{
                if(PostalDept == 75 || 77 || 78 || 91 || 92 || 93 || 94 || 95){
                     if((nbrFoyer == 1 && revRef <= 19803) || (nbrFoyer == 2 && revRef <= 29066) || (nbrFoyer == 3 && revRef <= 34906) || (nbrFoyer == 4 && revRef <= 40758) || (nbrFoyer == 5 && revRef <= 46630) || (nbrFoyer == 6 && revRef <= 52490) || (nbrFoyer == 7 && revRef <= 58350) || (nbrFoyer == 8 && revRef <= 64210) || (nbrFoyer == 9 && revRef <= 70070)){
                         eligible =  true;
                     }
                     else{
                         eligible =  false;
                     }
                }else{
                     if((nbrFoyer == 1 && revRef <= 14308) || (nbrFoyer == 2 && revRef <= 20925) || (nbrFoyer == 3 && revRef <= 25166) || (nbrFoyer == 4 && revRef <= 29400) || (nbrFoyer == 5 && revRef <= 33642) || (nbrFoyer == 6 && revRef <= 37883) || (nbrFoyer == 7 && revRef <= 42124) || (nbrFoyer == 8 && revRef <= 46365) || (nbrFoyer == 9 && revRef <= 50606)){
                        eligible =  true;
                     }
                     else{
                        eligible =  false;
                     }
                }

            }
            dispalyEligibilite(eligible);

        }

        /*Partage Réseaux sociaux*/
        var popupCenter = function(url, pageTitle, windowFeatures){

            var popupHeight = 320;
            var popupWidth = 640;
            var top = window.screenTop ? window.screenTop : window.screenY;
            var left = window.screenLeft ? window.screenLeft : window.screenX;
            var screenHeight = window.innerHeight;
            var screenWidth = window.innerWidth;
            var popupTop = (screenHeight)/2 - popupHeight/2;
            var popupLeft = (screenWidth)/2 - popupWidth/2;
            var strWindowFeatures = windowFeatures ? windowFeatures : "scrollbar=yes, height=" + popupHeight + ", width=" + popupWidth + ", top=" + popupTop + ", left=" + popupLeft + "";
            window.open(url, pageTitle, strWindowFeatures);
        };
        /*var btnTwitter = document.querySelector('.share_twitter');
        btnTwitter.addEventListener('click', function(e){
            var twitterText = "Isolez votre maison pour 1€";
            var url = "http://www.isole-habitat.fr";
            var shareUrl = "https://twitter.com/intent/tweet?text=" + twitterText + "&url=" + encodeURIComponent(url);
            popupCenter(shareUrl , "partager sur Twitter");
        });*/
        var btnFacebook = document.querySelector('#share_facebook');
        btnFacebook.addEventListener('click', function(e){
            //var url = document.url;
            //var shareUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(document.URL);
            //popupCenter(shareUrl , "partager sur Facebook");
            alert('coucou');
        });

        /*Sweet Alert*/
        $('.info-revenu').click(function (e) {
            e.preventDefault();
            swal({
                text: "Le montant de <span class='gras_500' data-color='orange'>votre revenu fiscal de référence</span> est indiqué sur votre avis d'imposition. Vous le trouverez en première page, dans le cadre en haut à gauche.",
                imageUrl: 'images/revenu-fiscal2.jpg',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#8ab326'
            });
        });
        $('.info-foyer').click(function (e) {
            e.preventDefault();
            swal({
                text: "<p class='text-left'><span class='gras_500' data-color='orange'>Un couple marié ou pacsé forme un seul foyer fiscal</span> composé de deux personnes. Une seule déclaration de revenus, dite déclaration commune, incluant les revenus et charges des deux conjoints</p>" +
                      "<p class='text-left'><span class='gras_500' data-color='bleue'>Les enfants mineurs ou invalides sont rattachés au foyer fiscal de leurs parents</span> ou d'un des deux parents en cas de séparation. Ils appartiennent donc au même foyer fiscal que leurs parents et ne peuvent pas constituer à eux seuls un foyer fiscal.</br><span class='gras_500' data-color='bleue'>Les personnes invalides peuvent être rattachées à un foyer fiscal</span> si elles vivent sous le même toit que les personnes composant ce dit foyer.</p>" +
                "<p class='text-left'><span class='gras_500' data-color='orange'>Un célibataire, divorcé ou veuf sans personne à charge constitue un foyer fiscal composé d'une seule personne</span>. Il en est de même pour les concubins non mariés ni pacsés, même s'ils résident dans le même logement : ils forment deux foyers fiscaux distincts, ce qui implique d'effectuer deux déclarations de revenus individuelles.</p>",

                confirmButtonText: 'Ok',
                confirmButtonColor: '#8ab326'
            });
        });


        /*input chiffre format*/
        // var $input = $('#revenus_reference');
        // $input.on( "keyup", function( event ) {
        //     var valInput = $input.val();
        //     //valInput.toLocaleString("fr-FR");
        //     valInput = valInput ? parseInt( valInput, 10 ) : 0;
        //     $this.val( function() {
        //         return ( valInput === 0 ) ? "" : valInput.toLocaleString( "en-US" );
        //     } );
        // });




    /*var facebookShare = document.querySelector('[data-js="facebook-share"]');

    facebookShare.onclick = function(e) {
        e.preventDefault();
        var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
        if(facebookWindow.focus) { facebookWindow.focus(); }
        return false;
    }*/
    });

})(jQuery);




(function($, undefined) {

    "use strict";

    // When ready.
    $(function() {



    });
})(jQuery);

