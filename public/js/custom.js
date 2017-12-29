(function($) {
    $(document).ready(function(){
        /*$('#section-formulaire').css("display","none");*/
        $('.btn-formulaire').click(function (e) {
            e.preventDefault();
            /*$('#section-formulaire').slideDown();*/
            var id = '#section-formulaire';
            var speed = 750;
            $('html,body').animate({
                scrollTop: $(id).offset().top
            }, speed);
            return false;
            /*$('#btn-formulaire').on('click', function() { // Au clic sur un élément
                var page = $(this).attr('href'); // Page cible
                var speed = 3000; // Durée de l'animation (en ms)
                $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
                return false;
            });*/
        });
    });


    /*****Wizard function*******/
    var currentTab = 0;
    showTab(currentTab);
    function showTab(n){
        var x = document.querySelectorAll('.tab');
        if(!validateForm()){
            return false;
        }
        x[n].style.display = "block";
        var prevButton = document.querySelector('#prevBtn');
        var nextButton = document.querySelector('#nextBtn');
        var phoneButton = document.querySelector('#phoneBtn');
        if(n == 0) {
            prevButton.style.display = "none";
        }
        else {
            prevButton.style.display = "block";
        }
        if(n == (x.length-2)) {
            nextButton.innerHTML = "Tester maintenant";
            nextButton.addEventListener('click', testEligibilite);
        }
        if(n == (x.length-1)) {
            prevButton.style.display = "none";
            nextButton.style.display = "none";
            phoneButton.style.display = "block";
        }
        else {
            nextButton.innerHTML = "Suivant";
        }

    }
    function validateForm(){
        var valid = true;
        var x = document.querySelectorAll('.tab');
        var y = x[currentTab ].querySelector('input');
        for (var i = 0; i< y.length; i++){


        }
        return valid;
    }
    var next = document.getElementById('nextBtn');
    next.addEventListener('click', function(){
        var x = document.querySelectorAll('.tab');
        x[currentTab].style.display =  "none";
        currentTab += 1;
        showTab(currentTab);
    });
    var prev = document.querySelector('#prevBtn');
    prev.addEventListener('click', function(){
        var x = document.querySelectorAll('.tab');
        x[currentTab].style.display =  "none";
        currentTab -= 1;
        showTab(currentTab);
        //alert('coucou');
    });
    function getRadioVal(form, name) {
        var val;
        // get list of radio buttons with specified name
        var radios = document.forms[form].elements[name];

        // loop through list of radio buttons
        for (var i=0; i<radios.length; i++) {
            if ( radios[i].checked ) { // radio checked?
                val = radios[i].value; // if so, hold its value in val
                break; // and break out of for loop
            }
        }
        //return val; // return value of checked radio or undefined if none checked
        alert(val);
    }
    function getRadioVals(){
        var radios = document.forms['regForm'].elements['nombre_personne'];
        // loop through list of radio buttons
        for (var i=0; i<radios.length; i++) {
            if ( radios[i].checked ) { // radio checked?
                val = radios[i].value; // if so, hold its value in val
                break; // and break out of for loop
            }

        }
        return val; // return value of checked radio or undefined if none checked
    }
    function getCheckboxVals(){
        var checkbox = document.forms['regForm'].elements['type_chauffage'];

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
        var formRef = document.forms['regForm'].elements['revenus_reference'];
        var checkbox = document.forms['regForm'].elements['type_chauffage'];
        var revRef = formRef.value;
        var nbrFoyer = getRadioVals();
        alert(nbrFoyer);
        if((checkbox[2].checked === true) && (checkbox[0].checked === false) && (checkbox[1].checked === false) && (checkbox[3].checked === false) && (checkbox[4].checked === false)){
            eligible =  false;
        }
        else{
            if((nbrFoyer == 1 && revRef <= 14308) || (nbrFoyer == 2 && revRef <= 20925) || (nbrFoyer == 3 && revRef <= 25166) || (nbrFoyer == 4 && revRef <= 29400) || (nbrFoyer == 5 && revRef <= 33642) || (nbrFoyer == 6 && revRef <= 37883) || (nbrFoyer == 7 && revRef <= 42124) || (nbrFoyer == 8 && revRef <= 46365) || (nbrFoyer == 9 && revRef <= 50606)){
                eligible =  true;
            }
            else{
                eligible =  false;
            }
        }
        alert(checkbox[4].value);
        //alert(revRef);
        dispalyEligibilite(eligible);

    }


})(jQuery);