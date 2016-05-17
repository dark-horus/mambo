$(document).ready(function () {

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

});

function empty() {

    utilisateurBase = [];
    utilisateurLegumes = [];
    utilisateurCondiments = [];
    utilisateurAssaisonement = [];
    utilisateurTemperature = [];
}

function afficher(object, type, ingredient) {


    switch (type) {


        case "base":
            var nbBase = utilisateurBase.length;
            if (nbBase < maxBase) {
                utilisateurBase.push(ingredient);
                //ajouter classe indiquant ingredient sélectionné
                ajoutIngredientBol(object, ingredient);
            }
            break;


        case "legumes":
            var nbLegumes = $(utilisateurLegumes).length;
            if (nbLegumes < maxLegumes) {
                utilisateurLegumes.push(ingredient);
                ajoutIngredientBol(object, ingredient);
            }
            break;

        case "condiments":
            var nbCondiments = $(utilisateurCondiments).length;
            if (nbCondiments < maxCondiments) {
                utilisateurCondiments.push(ingredient);
                ajoutIngredientBol(object, ingredient);
            }
            break;

        case "assaisonement":
            var nbAssaisonement = $(utilisateurAssaisonement).length;
            if (nbAssaisonement < maxAssaisonement) {
                utilisateurAssaisonement.push(ingredient);
                ajoutIngredientBol(object, ingredient);
            }
            break;

        case "temperature":
            var nbTemperature = $(utilisateurTemperature).length;
            if (nbTemperature < maxTemperature) {
                utilisateurTemperature.push(ingredient);
                ajoutIngredientBol(object, ingredient);
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

$(function() {
$(".submit").click(function() {
	
	
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
	var dataString = 'validate='+ validate+'&etape='+ etape;
	$.ajax({
		type: "POST",
		url: "../default/page/recEtape.php",	
		data : dataString			
	});
	 $('.valid').click();
	
});
});
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
        console.log(compareResult);
        return compareResult;
    }
    result = array_diff(utilisateurLegumes, recetteLegumes);
    if (!result[0] || result[0] == undefined) {
        //
    } else {
        compareResult = true;
        console.log(compareResult);
        return compareResult;
    }
    result = array_diff(utilisateurCondiments, recetteCondiments);
    if (!result[0] || result[0] == undefined) {
        //
    } else {
        compareResult = true;
        console.log(compareResult);
        return compareResult;
    }
    result = array_diff(utilisateurAssaisonement, recetteAssaisonement);
    if (!result[0] || result[0] == undefined) {
        //
    } else {
        compareResult = true;
        console.log(compareResult);
        return compareResult;
    }
    result = array_diff(utilisateurTemperature, recetteTemperature);


    if (!result[0] || result[0] == undefined) {
        //
    } else {
        compareResult = true;
        console.log(compareResult);
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