/*!

 =========================================================
 * Material Bootstrap Wizard - v1.0.2
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-bootstrap-wizard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/material-bootstrap-wizard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 */

// Material Bootstrap Wizard Functions

var searchVisible = 0;
var transparent = true;
var mobile_device = false;

$(document).ready(function(){

    $.material.init();

    /*  Activate the tooltips      */
    $('[rel="tooltip"]').tooltip();

    // Code for the Validator
    /*var $validator = $('#eligibForm').validate({
		  rules: {
		      code_postal: {
		      required: true,
		      minlength: 3
		    },
		    prenom: {
		      required: true,
		      minlength: 3
		    },
		    email: {
		      required: true,
		      minlength: 3,
		    }

        },

        errorPlacement: function(error, element) {
            $(element).parent('div').addClass('has-error');
         }
	});*/

    // Wizard Initialization
    function validateRadio(type){
        var valid = false;
        var z = document.forms['eligibForm'].elements[type];
        // loop through list of radio buttons
        for (var i=0; i<z.length; i++) {
            if (z[i].checked == true) { // radio checked?
                valid = true;
                break; // and break out of for loop
            }

        }
        return valid;
    }

    function validateSelect(type){
        var valid = false;
        var z = document.forms['eligibForm'].elements[type];
        var option = z.children;
        // loop through list of radio buttons
        for (var i=0; i<option.length; i++) {
            if (option[i].selected == true) { // radio checked?
                valid = true;
                break; // and break out of for loop
            }

        }
        return valid;
    }


    function validateCheckbox(tab){
        var valid = false;
        var x = document.getElementById(tab);
        var z = x.querySelectorAll('.checkbox');
        for(var j=0; j<z.length; j++){
            if(z[j].checked == true){
                valid = true;
            }
        }
        return valid;
    }

    function validateInputForm(type){
        var valid = true;
        var inputs = document.getElementById("eligibForm").elements;
        var inputByName = inputs[type];
            if(inputByName.value == "" ){
                valid = false;
            }
        return valid;
    }

    function displayErrorInput(message){
        $.notify({
            // options
            icon: 'glyphicon glyphicon-warning-sign',
            message: 'Turning standard Bootstrap alerts into "notify" like notifications'

        },{
            // settings
            element: 'body',
            position: null,
            type: "danger",
            allow_dismiss: false,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "center"
            },
            offset: 200,
            spacing: 20,
            z_index: 3000,
            delay: 200,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            onShow: function(){
                setTimeout(function(){
                    // enable click after 1 second
                    $('#btn_phone_modal').prop('disabled',false);
                },5000);
            },
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-8 col-sm-3 alert alert-{0}" role="alert" data-background-color="orange">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span class="text-white mt-20 mb-20" data-notify="message">'+ message + '</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
    }

  	$('#wizard-card-test').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',

        onNext: function(tab, navigation, index) {
            mobile_device = $(document).width() < 600;

        	/*var $valid = $('#eligibForm').valid();
        	if(!$valid) {
        		$validator.focusInvalid();
        		return false;
        	}*/
            if(index == 1){
                var typeRadio = 'type_habitation';
                var radioResult = validateRadio(typeRadio);

                if(radioResult == false){
                    if(mobile_device){
                        return false;
                    }
                    else{
                        displayErrorInput("Selectionez votre type d'habitation");
                        return false;
                    }

                }
            }
            if(index == 2){
                var typeRadio = 'type_chauffage';
                var radioResult = validateRadio(typeRadio);
                 if(radioResult == false){
                     if(mobile_device){
                         return false;
                     }
                     else{
                         displayErrorInput('Selectionnez le système de chauffage dans votre maison');
                         return false;
                     }
                 }
            }
            if(index == 3){
                var tab = 'isolation';
                var checkResult = validateCheckbox(tab);
                if(checkResult == false){
                    if(mobile_device){
                        return false;
                    }
                    else {
                        displayErrorInput('Selectionnez les isolations à faire chez vous');
                        return false;
                    }
                }
            }
            if(index == 4){
                var typeRadio = 'nombre_personne';
                var radioResult = validateSelect(typeRadio);
                if(radioResult == false){
                    if(mobile_device){
                        return false;
                    }
                    else {
                        displayErrorInput('Selectionnez le nombre de personnes dans votre foyer');
                        return false;
                    }
                }
                if(validateInputForm("code_postal")  == false){
                    if(mobile_device){
                        return false;
                    }
                    else{
                        displayErrorInput('Entrez votre code postal');
                        return false;
                    }

                }
            }
            if(index == 5){
                var typeRadio = 'revenus_reference';
                var radioResult = validateRadio(typeRadio);
                if(radioResult == false){
                    if(mobile_device){
                        return false;
                    }
                    else{
                        displayErrorInput('Préciser votre revenu fiscal');
                        return false;
                    }

                }
            }
        },

        onInit : function(tab, navigation, index){
            /*********Elevé pour mettre progress-bar seulement*******/
            //check number of tabs and fill the entire row
            /*var $total = navigation.find('li').length;
            var $wizard = navigation.closest('.wizard-card');

            $first_li = navigation.find('li:first-child a').html();
            $moving_div = $('<div class="moving-tab">' + $first_li + '</div>');
            $('.wizard-card .wizard-navigation').append($moving_div);

            refreshAnimation($wizard, index);

            $('.moving-tab').css('transition','transform 0s');*/
            /*********Fin Elevé pour mettre progress-bar seulement*******/
            //$('.tab-pane#bail').css('display', 'none');
            $('.wizard-navigation').css('display', 'none');

       },

        onTabClick : function(tab, navigation, index){
            //var $valid = $('.wizard-card form').valid();

                //return false;

        },

        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;

            var $wizard = navigation.closest('.wizard-card');

            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $($wizard).find('.btn-next').hide();
                $($wizard).find('#btn-finish-test').show();
                $($wizard).find('#btn-phone-test').hide()
            } else {
                $($wizard).find('.btn-next').show();
                $($wizard).find('#btn-finish-test').hide();
                $($wizard).find('#btn-phone-test').hide()
            }

            button_text = navigation.find('li:nth-child(' + $current + ') a').html();

            setTimeout(function(){
                $('.moving-tab').text(button_text);
            }, 150);
            //Moi
            if(index==4){
                var revenu_fiscal = document.querySelectorAll('.revenu_fiscal');
                for(var j=0; j<revenu_fiscal.length; j++){
                    revenu_fiscal[j].innerText = " ";
                }

                /*var getNbrPersonne = function (){
                    var nombre_personne;
                    var x = document.forms['eligibForm'].elements['nombre_personne'];
                    // loop through list of radio buttons
                    for (var i=0; i<x.length; i++) {
                        if (x[i].checked == true) { // radio checked?
                            nombre_personne = x[i].value;
                            break; // and break out of for loop
                        }

                    }
                    return nombre_personne;
                };*/
                var getNbrPersonne = function (){
                    var nombre_personne;
                    var x = document.forms['eligibForm'].elements['nombre_personne'];
                    var option = x.children;
                    // loop through list of radio buttons
                    for (var i=0; i<option.length; i++) {
                        if (option[i].selected == true) { // radio checked?
                            nombre_personne = option[i].value;
                            break; // and break out of for loop
                        }

                    }
                    return nombre_personne;
                };


                 function calculRevenu(){
                    var valeur_revenu;
                    var nombre_personne = getNbrPersonne();
                    //alert(nombre_personne);
                    var codePostal = document.querySelector('#code_postal').value;
                    var departement = codePostal.substring( 0, 2);
                    if(nombre_personne == 1){
                        if((departement == 75) || (departement == 77) || (departement == 78) || (departement == 91) || (departement == 92) || (departement == 93) || (departement == 94) || (departement == 95)){
                            valeur_revenu = "19 803";
                        }
                        else{
                            valeur_revenu = "14 308";
                        }

                    }
                    else if(nombre_personne == 2){
                        if((departement == 75) || (departement == 77) || (departement == 78) || (departement == 91) || (departement == 92) || (departement == 93) || (departement == 94) || (departement == 95)){
                            valeur_revenu = "29 066";
                        }
                        else{
                            valeur_revenu = "20 925";
                        }

                    }
                    else if(nombre_personne == 3){
                        if((departement == 75) || (departement == 77) || (departement == 78) || (departement == 91) || (departement == 92) || (departement == 93) || (departement == 94) || (departement == 95)){
                            valeur_revenu = "34 906";
                        }
                        else{
                            valeur_revenu = "25 166";
                        }

                    }
                    else if(nombre_personne == 4){
                        if((departement == 75) || (departement == 77) || (departement == 78) || (departement == 91) || (departement == 92) || (departement == 93) || (departement == 94) || (departement == 95)){
                            valeur_revenu = "46 630";
                        }
                        else{
                            valeur_revenu = "29 400";
                        }

                    }
                    else if(nombre_personne == 5){
                        if((departement == 75) || (departement == 77) || (departement == 78) || (departement == 91) || (departement == 92) || (departement == 93) || (departement == 94) || (departement == 95)){
                            valeur_revenu = "46 630";
                        }
                        else{
                            valeur_revenu = "33 652";
                        }

                    }
                    else if(nombre_personne == 6){
                        if((departement == 75) || (departement == 77) || (departement == 78) || (departement == 91) || (departement == 92) || (departement == 93) || (departement == 94) || (departement == 95)){
                            valeur_revenu = "52 490";
                        }
                        else{
                            valeur_revenu = "37 893";
                        }

                    }
                    else if(nombre_personne == 7){
                        if((departement == 75) || (departement == 77) || (departement == 78) || (departement == 91) || (departement == 92) || (departement == 93) || (departement == 94) || (departement == 95)){
                            valeur_revenu = "58 350";
                        }
                        else{
                            valeur_revenu = "42 134";
                        }

                    }
                    else if(nombre_personne == 8){
                        if((departement == 75) || (departement == 77) || (departement == 78) || (departement == 91) || (departement == 92) || (departement == 93) || (departement == 94) || (departement == 95)){
                            valeur_revenu = "64 210";
                        }
                        else{
                            valeur_revenu = "46 375";
                        }

                    }
                    else {
                            valeur_revenu = "100 000";

                    }

                    return valeur_revenu;
                }
                function displayRevenu(){
                    var valeur_revenu = calculRevenu();
                    var revenu_fiscal = document.querySelectorAll('.revenu_fiscal');
                    for(var j=0; j<revenu_fiscal.length; j++){
                        revenu_fiscal[j].innerText = valeur_revenu + " €";
                    }

                    var y = document.querySelector('#revenus_reference_moins');
                    y.value = "-" + valeur_revenu;
                    var z = document.querySelector('#revenus_reference_plus');
                    z.value = "+" + valeur_revenu;
                }

                displayRevenu();
            }
            //moi

            var checkbox = $('.footer-checkbox');

            if( !index == 0 ){
                $(checkbox).css({
                    'opacity':'0',
                    'visibility':'hidden',
                    'position':'absolute'
                });
            } else {
                $(checkbox).css({
                    'opacity':'1',
                    'visibility':'visible'
                });
            }

            refreshAnimation($wizard, index);
        },
        //MOI
        onTabChange: function(tab, navigation, index) {

        },
        onPrevious: function(tab, navigation, index) {
            console.log(tab);
        }
        //moi
        //MOI


        //moi
  	});

   /*************Second Wizard************/

   /***********End Second Wizard**********/

    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });

    $('[data-toggle="wizard-radio"]').click(function(){
        var row  = $(this).closest('.row ');
        row .find('[data-toggle="wizard-radio"]').removeClass('actived');
        $(this).addClass('actived');
        $(row ).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked','true');
    });

    $('[data-toggle="wizard-checkbox"]').click(function(){
        if( $(this).hasClass('actived')){
            $(this).removeClass('actived');
            $(this).find('[type="checkbox"]').removeAttr('checked');
        } else {
            $(this).addClass('actived');
            $(this).find('[type="checkbox"]').attr('checked','true');
        }
    });

    $('.set-full-height').css('height', 'auto');



    /*****************/
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

    var btnPhoneSubmit = document.querySelector('#btn-phone-test');
    $('#btn-finish-test').click(function(event) {
            var typeRadio = 'civilite';
            var radioResult = validateRadio(typeRadio);
            var typeRadio2 = 'type_bail';
            var tab = 'infos';
            var radioResult2 = validateRadio(typeRadio2);
            if(radioResult == false){
                if(mobile_device){
                    return false;
                }
                else{
                    displayErrorInput('Selectionnez "Monsieur" ou "Madame"');
                    event.stopPropagation();
                }
            }
            else if(radioResult2 == false){
                if(mobile_device){
                    return false;
                }
                else{
                    displayErrorInput('Précisez si vous êtes "Propriétaire" ou "Locataire"');
                    event.stopPropagation();
                }
            }
            else if(validateInputForm("nom")  == false){
                if(mobile_device){
                    return false;
                }
                else{
                    displayErrorInput('Entrez votre nom');
                    return false;
                }
            }
            else if(validateInputForm("telephone")  == false){
                if(mobile_device){
                    return false;
                }
                else{
                    displayErrorInput('Entrez votre numero de telephone');
                    return false;
                }
            }
            else{
                var data = $('#eligibForm').serializeArray();

                $('.wizard-navigation').hide();
                $('tab-pane.active').hide();
                $('#phoneForm').show();
                $('.btn-finish').hide();
                $('.btn-previous').hide();
                $('.spinner-block').show();
                console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'post',
                    url: 'formulaire-eligibilite',
                    data: data,
                    dataType: 'JSON',
                    success: function(response) {
                        if(response.situation == 'grand-précaire'){
                            btnPhoneSubmit.setAttribute('data-id', response.id);
                            setTimeout(function () {
                                $('.spinner-block').hide();
                                $('#btn-phone-test').show();
                                $('#info-resultat-ok').show();
                            }, 1000);
                        }
                        else if(response.situation == 'classique'){
                            if(response.habitation == 'appartement'){
                                $('#text-cause-none').text("Vous devez habiter dans une maison individuelle pour bénéficier de notre programme.");
                            }
                            else if(response.habitation == 'maison') {
                                if (response.chauffage == 'electrique') {
                                    $('#text-cause-none').text("Vous vous chauffez uniquement à l'électricité. Vous ne pouvez pas bénéficier de notre programme");
                                }
                                else{
                                    $('#text-cause-none').text("Vos revenus dépassent le plafond de revenus définit par l'ADEME.");
                                }
                            }
                            else{
                                $('#text-cause-none').text("Vos revenus dépassent le plafond de revenus définit par l'ADEME.");
                            }
                            setTimeout(function () {
                                $('.spinner-block').hide();
                                $('#info-resultat-none').show();
                            }, 1000);
                        }
                    }
                });
            }

    });
    $('#btn-phone-test').click(function() {
        var typeRadio = 'heure_rappel';
        var radioResult = validateRadio(typeRadio);
        if(radioResult == false){
            displayErrorInput('Selectionnez un créneau horaire pour vous rappeler');
            event.stopPropagation();
        }
        else{
            var idUrl = btnPhoneSubmit.getAttribute('data-id');
            var heure_rappel = $( "input[name= 'heure_rappel']:checked").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: "formulaire-eligibilite-rappel/" + idUrl,
                data: {heure_rappel: heure_rappel},
                dataType: 'JSON',
                success: function(response){
                    $('#btn-phone-test').hide();
                    $('#info-resultat-ok').hide();
                    $('#info-phone-ok').show();
                }
            });
        }
    });

    $('#btn-essai-notify').click(function() {

    });

});


 //Function to show image before upload

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(window).resize(function(){
    $('.wizard-card').each(function(){
        $wizard = $(this);

        index = $wizard.bootstrapWizard('currentIndex');
        refreshAnimation($wizard, index);

        $('.moving-tab').css({
            'transition': 'transform 0s'
        });
    });
});

function refreshAnimation($wizard, index){
    /*********Elevé pour mettre progress-bar seulement*******/
    /*$('.wizard-card .progress-bar').css('display', 'none');
    $total = $wizard.find('.nav li').length;
    $li_width = 100/$total;

    total_steps = $wizard.find('.nav li').length;
    move_distance = $wizard.width() / total_steps;
    index_temp = index;
    vertical_level = 0;

    mobile_device = $(document).width() < 600 && $total > 3;

    if(mobile_device){
        $('.wizard-card .progress-bar').css('display', 'block');
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('.wizard-card .progress-bar').css({width:$percent+'%'});
        $('.wizard-card .wizard-navigation').css('display', 'none');
        /!*move_distance = $wizard.width() / 2;
        index_temp = index % 2;
        $li_width = 50;*!/

    }

    $wizard.find('.nav li').css('width',$li_width + '%');

    step_width = move_distance;
    move_distance = move_distance * index_temp;

    $current = index + 1;

    if($current == 1 || (mobile_device == true && (index % 2 == 0) )){
        move_distance -= 8;
    } else if($current == total_steps || (mobile_device == true && (index % 2 == 1))){
        move_distance += 8;
    }

    if(mobile_device){
        vertical_level = parseInt(index / 2);
        vertical_level = vertical_level * 38;
    }

    $wizard.find('.moving-tab').css('width', step_width);
    $('.moving-tab').css({
        'transform':'translate3d(' + move_distance + 'px, ' + vertical_level +  'px, 0)',
        'transition': 'all 0.5s cubic-bezier(0.29, 1.42, 0.79, 1)'

    });*/
    /*********Fin Elevé pour mettre progress-bar seulement*******/
    /*********Ajout pour mettre progress-bar seulement*******/
    $total = $wizard.find('.nav li').length;
    var $current = index+1;
    var $percent = ($current/$total) * 100;
    $('.wizard-card .progress-bar').css({width:$percent+'%'});
    /*********Fin Ajout pour mettre progress-bar seulement*******/
}

materialDesign = {

    checkScrollForTransparentNavbar: debounce(function() {
                if($(document).scrollTop() > 260 ) {
                    if(transparent) {
                        transparent = false;
                        $('.navbar-color-on-scroll').removeClass('navbar-transparent');
                    }
                } else {
                    if( !transparent ) {
                        transparent = true;
                        $('.navbar-color-on-scroll').addClass('navbar-transparent');
                    }
                }
        }, 17)

}

function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		clearTimeout(timeout);
		timeout = setTimeout(function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		}, wait);
		if (immediate && !timeout) func.apply(context, args);
	};
};
