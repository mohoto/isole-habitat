


    /*$('.close-overlay').click(function(e){
        e.preventDefault();
        overlay.style.left = "-3000px";
        //body.classList.remove("noScroll");
    });*/
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
        /*Onglet "besoin de conseils"*/
        $(window).scroll(function(){
            if($(this).scrollTop()>400){
                $('.popup_aide').fadeIn();
            }else{
                $('.popup_aide').fadeOut();
            }
        });
        /*Ribbon Formulaire*/
        $('#ribbon-formulaire').css("display","none");
        $(window).scroll(function(){
            if($(this).scrollTop()>400){
                $('#ribbon-formulaire').css("display","block");
            }else{
                $('#ribbon-formulaire').css("display","none");
            }
        });
        $('.btn-formulaire').click(function(e){
            e.preventDefault();
            $('#myModalFullscreen').modal({
                keyboard: false
            });
        });
        /*************************************************/
        //open/close lateral navigation
        var overlay = document.querySelector("#section-overlay");
        var btnFormulaire = document.querySelectorAll('.btn-formulaire');
        for(var i=0; i< btnFormulaire.length; i++){
            btnFormulaire[i].addEventListener('click', function(e){
                e.preventDefault();
                overlay.style.left = "0px";
                document.body.classList.add("noScroll");
            });

        }
        var closeOverlay = document.querySelector('#close-overlay');
        closeOverlay.addEventListener('click', function(e){
            e.preventDefault();
            overlay.style.left = "-3000px";
            document.body.classList.remove("noScroll");
            $('#wizard-card-test').show();
            $('#wizard-card-test2').hide();
        });


        /*******Video modal Youtube***********/
        // Gets the video src from the data-src on each button
        /*var $videoSrc;
        $('.video-btn').click(function() {
            $videoSrc = $(this).data( "src" );
        });
        console.log($videoSrc);
        // when the modal is opened autoplay it
        $('#myModal').on('shown.bs.modal', function (e) {
            // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" );
        });
        // stop playing the youtube video when I close the modal
        $('#myModal').on('hide.bs.modal', function (e) {
            // a poor man's stop video
            $("#video").attr('src',$videoSrc);
        });*/

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
        /*$('.btn-formulaire').click(function (e) {
            e.preventDefault();
            var id = '#block-form';
            var speed = 750;
            $('html,body').animate({
                scrollTop: $(id).offset().top
            }, speed);
            return false;
        });*/


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
        /*var btnTwitter = document.querySelector('.share_twitter');
        btnTwitter.addEventListener('click', function(e){
            var url = "http://www.isole-habitat.fr";
            var shareUrl = "https://twitter.com/share?url=" + encodeURIComponent(url);
            popupCenter(shareUrl , "partager sur Twitter");
        });*/
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


        /*************************************************/
        /*************************************************/

    });

    /*******Video modal ***********/
    /*var vid1 = document.querySelector("#video-reportage1");
    var vid2 = document.querySelector("#video-reportage2");
    // when the modal is opened autoplay it
    $('#myModalVideo1').on('show.bs.modal', function (e) {
        vid1.autoplay = true;
        vid1.load();
    });
    // stop playing the youtube video when I close the modal
    $('#myModalVideo1').on('hide.bs.modal', function (e) {
        vid1.pause();
    });
    //$('#myModalVideo1').modal('hide');
    // when the modal is opened autoplay it
    $('#myModalVideo2').on('show.bs.modal', function (e) {
        vid2.autoplay = true;
        vid2.load();
    });
    // stop playing the youtube video when I close the modal
    $('#myModalVideo2').on('hide.bs.modal', function (e) {
        vid2.pause();
    });*/

    /*******Video modal Youtube***********/
    // Gets the video src from the data-src on each button
    var $videoSrc;
     $('.video-btn').click(function() {
     $videoSrc = $(this).data( "src" );
     });
     // when the modal is opened autoplay it
     $('#myModal').on('shown.bs.modal', function (e) {
     // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
     $("#video").attr('src',$videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1" );
     });
     // stop playing the youtube video when I close the modal
     $('#myModal').on('hide.bs.modal', function (e) {
     // a poor man's stop video
     $("#video").attr('src',$videoSrc);
     });

})(jQuery);
