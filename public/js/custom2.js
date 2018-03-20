(function($) {

    $.fn.menumaker = function(options) {
        var cssmenu = $(this), settings = $.extend({
            format: "dropdown",
            sticky: false
        }, options);
        return this.each(function() {
            $(this).find(".button").on('click', function(){
                $(this).toggleClass('menu-opened');
                var mainmenu = $(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.slideToggle().removeClass('open');
                }
                else {
                    mainmenu.slideToggle().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });
            cssmenu.find('li ul').parent().addClass('has-sub');
            multiTg = function() {
                cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                cssmenu.find('.submenu-button').on('click', function() {
                    $(this).toggleClass('submenu-opened');
                    if ($(this).siblings('ul').hasClass('open')) {
                        $(this).siblings('ul').removeClass('open').slideToggle();
                    }
                    else {
                        $(this).siblings('ul').addClass('open').slideToggle();
                    }
                });
            };
            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');
            if (settings.sticky === true) cssmenu.css('position', 'fixed');
            resizeFix = function() {
                var mediasize = 1000;
                if ($( window ).width() > mediasize) {
                    cssmenu.find('ul').show();
                }
                if ($(window).width() <= mediasize) {
                    cssmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
        });
    };

    $(document).ready(function(){

        /*Nav*/
        $("#cssmenu").menumaker({
            format: "multitoggle"
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

        /*************************************************/
        /*************************************************/
        /******** Scroll animate to btn*******/
        $('#btn-section-formulaire').click(function (e) {
            e.preventDefault();
            var id = '#block-form';
            var speed = 750;
            $('html,body').animate({
                scrollTop: $(id).offset().top
            }, speed);
            return false;
        });
        /*Onglet "besoin de conseils"*/
        $('.popup_aide').css("display","none");
        $(window).scroll(function(){
            if($(this).scrollTop()>400){
                $('.popup_aide').fadeIn();
            }else{
                $('.popup_aide').fadeOut();
            }
        });
        /*************************************************/
        /*************************************************/

        /*************************************************/
        /*************************************************/
        /*Popup "besoin de conseils- function qui récupère la valeur de l'input "radio""*/
        function getHourValModal(){
            var val;
            var heure_modal = document.forms['phoneFormModal'].elements['heure_rappel_modal'];
            for(var i=0; i<heure_modal.length; i++){
                if (heure_modal[i].checked){
                    val = heure_modal[i].value;
                    break;
                }
            }
            return val;
        }


        /*************************************************/
        /*************************************************/

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

        var btnFacebook = document.querySelector('.share_facebook');
        btnFacebook.addEventListener('click', function(e){
            var url = "http://www.isole-habitat.fr";
            var shareUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);
            popupCenter(shareUrl , "partager sur Facebook");
        });
        var btnTwitter = document.querySelector('.share_twitter');
        btnTwitter.addEventListener('click', function(e){
            var url = "http://www.isole-habitat.fr";
            var shareUrl = "https://twitter.com/share?url=" + encodeURIComponent(url);
            popupCenter(shareUrl , "partager sur Twitter");
        });
        /*************************************************/
        /*************************************************/

        /**********************/
        /**********************/
        /*input chiffre format*/
      /*  var $form = $( "#eligibleForm" );
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


        /!**
         * ==================================
         * When Form Submitted
         * ==================================
         *!/
        $form.on( "submit", function( event ) {

            var $this = $( this );
            var arr = $this.serializeArray();

            for (var i = 0; i < arr.length; i++) {
                arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
            }

            console.log( arr );

            event.preventDefault();
        });*/

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


            $this.val(function() {
                return chunk.join(" ").toUpperCase();
            });
        });
        /*************************************************/
        /*************************************************/

        function validateForm(){
            var valid = true;
            var x = document.querySelectorAll('.tab');
            var y = x[currentTab].getElementsByTagName('input');
            for(var i = 0; i < y.length; i++){
                if(y[i].value == "" ){
                    valid = false;
                }
            }
            return valid;
        }
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
        function checkRadioBox(){
            var valid = true;
            var heure_eligible = document.forms['eligibleForm'].elements['heure_rappel'];
            for(var i=0; i<heure_eligible.length; i++){
                if (heure_eligible[i].checked){
                    val = heure_eligible[i].value;
                    break;
                }
            }
            return valid;
        }
        function validateCheckboxChauf(){
            var valid = false;
            var radios = document.forms['eligibleForm'].elements['type_chauffage'];
            // loop through list of radio buttons
            for (var i=0; i<radios.length; i++) {
                if ( radios[i].checked ) { // radio checked?
                    break; // and break out of for loop
                    valid = true;
                }

            }
            return valid;
        }
        function validateCheckboxIso(){
            valid = false;
            var x = document.querySelectorAll('.tab');
            var z = x[currentTab].querySelectorAll('.checkbox');
            for(var j=0; j<z.length; j++){
                if(z[j].name == 'type_isolation' && z[j].checked == true){
                    valid = true;
                }
            }
            return valid;
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
                    if((nbrFoyer == 1 && revRef <= 14308) || (nbrFoyer == 2 && revRef <= 20925) || (nbrFoyer == 3 && revRef <= 25166) || (nbrFoyer == 4 && revRef <= 29400) || (nbrFoyer == 5 && revRef <= 33652) || (nbrFoyer == 6 && revRef <= 37893) || (nbrFoyer == 7 && revRef <= 42134) || (nbrFoyer == 8 && revRef <= 46375) || (nbrFoyer == 9 && revRef <= 50616)){
                        eligible =  true;
                    }
                    else{
                        eligible =  false;
                    }
                }

            }
            dispalyEligibilite(eligible);

        }

    });

})(jQuery);
