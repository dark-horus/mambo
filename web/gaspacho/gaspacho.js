$(document).ready(function () {

    window.recipeOrder = ['base', 'legumes', 'condiments', 'assaisonement', 'temperature'];
    window.recipeOrderCurrent = 0;

    window.base = ["tomate", "potiron", "lentille"];
    window.legumes = ["concombre", "poivron", "chou_fleur", "poireau"];
    window.condiments = ["oignon", "ail", "basilic", "piment", "capre", "pois_chiche"];
    window.assaisonnement = ["citron", "vinaigre", "huile_olive", "poivre", "sel", "curry"];
    window.temperature = ["chaud", "froid"];

    window.recetteBase = ["tomate"];
    window.recetteLegumes = ["concombre", "poivron"];
    window.recetteCondiments = ["oignon", "ail", "basilic", "piment"];
    window.recetteAssaisonement = ["citron", "vinaigre", "huile_olive", "poivre", "sel"];
    window.recetteTemperature = ["chaud"];


    window.utilisateurBase = [];
    window.utilisateurLegumes = [];
    window.utilisateurCondiments = [];
    window.utilisateurAssaisonement = [];
    window.utilisateurTemperature = [];

    window.maxBase = 1;
    window.maxLegumes = 2;
    window.maxCondiments = 4;
    window.maxAssaisonement = 5;
    window.maxTemperature = 1;

    window.compareResult = false;

    initDisplay();

    // Fonction d'écoute de la validation du formulaire
    validForm();
});


function initDisplay() {

    // Oblige l'utilisateur à commencer par la 'base'
    for (var i = 0; i < recipeOrder.length; i++) {
        var v = recipeOrder[i];
        $('#' + v).css({opacity: 0.35});
    }

    recipeOrderCurrent = 0;

    $('#' + recipeOrder[recipeOrderCurrent]).css({opacity: 1});

}


function empty() {

    utilisateurBase = [];
    utilisateurLegumes = [];
    utilisateurCondiments = [];
    utilisateurAssaisonement = [];
    utilisateurTemperature = [];


    // Vide le bol
    $('#bol').empty();


    // Ré-affiche les ingrédients
    $('.ingredient').fadeIn();


    initDisplay();
}

function toggleOpacity(id) {

    $('#' + recipeOrder[recipeOrderCurrent]).css({opacity: 1});
    $('#' + recipeOrder[recipeOrderCurrent - 1]).css({opacity: 0.35});
}


function afficher(object, type, ingredient) {

    switch (type) {

        case "base":
            var nbBase = utilisateurBase.length;
            if (nbBase < maxBase && recipeOrder[recipeOrderCurrent] == 'base') {

                utilisateurBase.push(ingredient);
                ajoutIngredientBol(object, ingredient);

                nbBase = utilisateurBase.length;
                if (nbBase == maxBase && recipeOrder[recipeOrderCurrent] == 'base') {
                    recipeOrderCurrent++;
                    toggleOpacity(recipeOrderCurrent);
                }


            }
            break;

        case "legumes":
            var nbLegumes = utilisateurLegumes.length;
            if (nbLegumes < maxLegumes && recipeOrder[recipeOrderCurrent] == 'legumes') {

                utilisateurLegumes.push(ingredient);
                ajoutIngredientBol(object, ingredient);

                nbLegumes = utilisateurLegumes.length;
                if (nbLegumes == maxLegumes && recipeOrder[recipeOrderCurrent] == 'legumes') {
                    recipeOrderCurrent++;
                    toggleOpacity(recipeOrderCurrent);
                }


            }
            break;

        case "condiments":
            var nbCondiments = utilisateurCondiments.length;
            if (nbCondiments < maxCondiments && recipeOrder[recipeOrderCurrent] == 'condiments') {

                utilisateurCondiments.push(ingredient);
                ajoutIngredientBol(object, ingredient);

                nbCondiments = utilisateurCondiments.length;

                if (nbCondiments == maxCondiments && recipeOrder[recipeOrderCurrent] == 'condiments') {
                    recipeOrderCurrent++;
                    toggleOpacity(recipeOrderCurrent);
                }

            }
            break;

        case "assaisonement":
            var nbAssaisonement = utilisateurAssaisonement.length;
            if (nbAssaisonement < maxAssaisonement && recipeOrder[recipeOrderCurrent] == 'assaisonement') {

                utilisateurAssaisonement.push(ingredient);
                ajoutIngredientBol(object, ingredient);

                nbAssaisonement = utilisateurAssaisonement.length;

                if (nbAssaisonement == maxAssaisonement && recipeOrder[recipeOrderCurrent] == 'assaisonement') {
                    recipeOrderCurrent++;
                    toggleOpacity(recipeOrderCurrent);
                }

            }
            break;

        case "temperature":
            var nbTemperature = utilisateurTemperature.length;
            if (nbTemperature < maxTemperature && recipeOrder[recipeOrderCurrent] == 'temperature') {

                utilisateurTemperature.push(ingredient);
                ajoutIngredientBol(object, ingredient);

                nbTemperature = utilisateurTemperature.length;

                if (nbTemperature == maxTemperature && recipeOrder[recipeOrderCurrent] == 'temperature') {
                    recipeOrderCurrent++;
                    toggleOpacity(recipeOrderCurrent);
                }

            }
            break;
    }
    // console.log(utilisateurBase);
    // console.log(utilisateurLegumes);
    // console.log(utilisateurCondiments);
    // console.log(utilisateurAssaisonement);
    // console.log(utilisateurTemperature);
}


function ajoutIngredientBol(object, ingredient) {

    // Retour graphique sélection ingrédient
    $(object).addClass('zoomIngredient', function () {
    }).fadeOut();

    // Ajout ingrédient dans le bol
    $('#bol').append('<div class="' + ingredient + '"></div>');


}


function validForm() {

    $(".submit").click(function () {


        if (testNbIngredient()) {
            $('.error').click();
            // alert("Erreur ingredient manquant !");
            return false;
        }

        testRecipe();
        if (compareResult) {
            $('.errorRecipe').click();
            return false;
        }

        /* Validation dans la base */
        event.preventDefault();  // Empêcher le rechargement de la page.
        var validate = "true";
        var etape = "gaspacho";
        var dataString = 'validate=' + validate + '&etape=' + etape;
        $.ajax({
            type: "POST",
            url: "../default/page/recEtape.php",
            data: dataString
        });
        $('.valid').click();

    });
}


function testNbIngredient() {


    // Vérifie le nombre d'ingrédients
    var nbError = false;

    var nbBase = utilisateurBase.length;
    if (nbBase != maxBase) {
        nbError = true;
    }

    var nbLegumes = utilisateurLegumes.length;
    if (nbLegumes != maxLegumes) {
        nbError = true;
    }

    var nbCondiments = utilisateurCondiments.length;
    if (nbCondiments != maxCondiments) {
        nbError = true;
    }

    var nbAssaisonement = utilisateurAssaisonement.length;
    if (nbAssaisonement != maxAssaisonement) {
        nbError = true;
    }

    var nbTemperature = utilisateurTemperature.length;
    if (nbTemperature != maxTemperature) {
        nbError = true;
    }

    return nbError;

}


function testRecipe() {
// Comparaison

    var result = '';

    result = array_diff(utilisateurBase, recetteBase);
    if (!result[0] || result[0] == undefined) {
        //
    } else {
        compareResult = true;
        // console.log(compareResult);
        return compareResult;
    }
    result = array_diff(utilisateurLegumes, recetteLegumes);
    if (!result[0] || result[0] == undefined) {
        //
    } else {
        compareResult = true;
        // console.log(compareResult);
        return compareResult;
    }
    result = array_diff(utilisateurCondiments, recetteCondiments);
    if (!result[0] || result[0] == undefined) {
        //
    } else {
        compareResult = true;
        // console.log(compareResult);
        return compareResult;
    }
    result = array_diff(utilisateurAssaisonement, recetteAssaisonement);
    if (!result[0] || result[0] == undefined) {
        //
    } else {
        compareResult = true;
        // console.log(compareResult);
        return compareResult;
    }
    result = array_diff(utilisateurTemperature, recetteTemperature);


    if (!result[0] || result[0] == undefined) {
        //
    } else {
        compareResult = true;
        // console.log(compareResult);
        return compareResult;
    }
}


function array_diff(arr1) {
    //  discuss at: http://phpjs.org/functions/array_diff/
    // original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // improved by: Sanjoy Roy
    //  revised by: Brett Zamir (http://brett-zamir.me)
    //   example 1: array_diff(['Kevin', 'van', 'Zonneveld'], ['van', 'Zonneveld']);
    //   returns 1: {0:'Kevin'}

    var retArr = {},
        argl = arguments.length,
        k1 = '',
        i = 1,
        k = '',
        arr = {};

    arr1keys: for (k1 in arr1) {
        for (i = 1; i < argl; i++) {
            arr = arguments[i];
            for (k in arr) {
                if (arr[k] === arr1[k1]) {
                    // If it reaches here, it was found in at least one array, so try next value
                    continue arr1keys;
                }
            }
            retArr[k1] = arr1[k1];
        }
    }

    return retArr;
}