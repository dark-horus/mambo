<?php
<<<<<<< HEAD
//recupération du nom de l'étape + étape suivante et précédente
$dossier = explode('/', $_SERVER['REQUEST_URI']);
=======

session_start();


if (!isset( $_SESSION['id'] )) {
    //header( 'location: ../default/page/onload.php' );
}


include( 'bdd.php' );
$password = $_SESSION['id'];


if ($bdd) {
//Récupération des informations de l'utilisateur
    $login = $bdd->query( 'SELECT * FROM `user` WHERE password = "' . $password . '"' );
    $res = $login->fetch();
    $IDuser = $res['iduser'];
}


//recupération du nom de l'étape + étape suivante et précédente
$current_etape = $res['current_etape'];
$dossier = explode( '/', $_SERVER['REQUEST_URI'] );
>>>>>>> origin/master
$dossier = $dossier[3];
$icone = $dossier . ".png";

if ($dossier != null) {
    switch ($dossier) {
        case "crotte":
            $titre = "Expulsez Mary Carmen !";
            $next = '<li class="col-md-12"><a href="../poitrinel">Étape suivante : poitrine</a></li>';
            $before = '<li class="col-md-12"><a href="../vin">Étape précédente : vin</a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "livre":
            $titre = "À votre tour, devenez écrivain !";
            $next = '<li class="col-md-12"><a href="../lapin">Étape suivante : lapin</a></li>';
            $before = '<li class="col-md-12"><a href="../chien">Étape précédente : chien</a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "ours":
            $titre = "Découvrez les fragments de l'histoire de Madrid";
            $next = '<li class="col-md-12"><a href="../ordinateur">Étape suivante : ordinateur</a></li>';
            $before = '<li class="col-md-12"><a href="../immeuble">Étape précédente : immeuble</a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "hotel":
            $titre = "Déambulez de place en place à Madrid";
            $next = '<li class="col-md-12"><a href="../vin">Étape suivante : vin</a></li>';
            $before = '<li class="col-md-12"><a href="../gaspacho">Étape précédente :gaspacho</a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "ordinateur":
            $titre = "Naviguez à travers l’ordinateur d’Henry";
            $next = '<li class="col-md-12"><a href="#">Étape suivante : aucune</a></li>';
            $before = '<li class="col-md-12"><a href="../ours">Étape précédente : ours</a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "lapin":
            $titre = "Devenez le nouveau conquistador culinaire de mambo canaille";
            $next = '<li class="col-md-12"><a href="../immeuble">Étape suivante : immeuble</a></li>';
            $before = '<li class="col-md-12"><a href="../livre">Étape précédente : livre </a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "vin":
            $titre = "Initiez-vous à l’oenologie chilienne";
            $next = '<li class="col-md-12"><a href="../crotte">Étape suivante : crotte</a></li>';
            $before = '<li class="col-md-12"><a href="../hotel">Étape précédente : hotel</a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "poitrine":
            $titre = "Découvrez la beauté à travers les siècles";
            $next = '<li class="col-md-12"><a href="../ferrari">Étape suivante : ferrari</a></li>';
            $before = '<li class="col-md-12"><a href="../crotte">Étape suivante : crotte</a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "immeuble":
            $titre = "Infiltrez vous chez les trois canailles";
            $next = '<li class="col-md-12"><a href="../ours">Étape suivante : ours</a></li>';
            $before = '<li class="col-md-12"><a href="../lapin">Étape précédente : lapin</a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "gaspacho":
            $titre = "Préparez vous-même le gaspacho d’Henry !";
            $next = '<li class="col-md-12"><a href="../hotel">Étape suivante : hotel</a></li>';
            $before = '<li class="col-md-12 "><a href="#">Étape précédente : aucune </a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "chien":
            $titre = "Imaginez le visage des personnages principaux !";
            $next = '<li class="col-md-12"><a href="../livre">Étape suivante : livre</a></li>';
            $before = '<li class="col-md-12"><a href="../ferrari">Étape précédente : ferrari</a></li>';
            $current = '<li class="col-md-12"><a href="#" >Étape en cours : ' . $dossier . '</a></li>';
            break;
        case "ferrari":
            $titre = "Partez à la découverte du Venezuela !";
<<<<<<< HEAD
			$next = '<li class="col-md-12"><a href="../chien">Étape suivante : chien</a></li>';
			$before = '<li class="col-md-12"><a href="../poitrine;">Etape précédente : poitrine</a></li>';
			$current = '<li class="col-md-12 "><a href="#">Etape courante</a></li>';
			break;
		case "profil":
			$titre = "Votre profil";
			$current = '<li class="col-md-12"><a href="#">PROFIL</a></li>';
			$next = '';
			$before = '';
			break;
		case "accueil":
			$titre = "Les éditions Zinnia vous présentent Mambo Canaille intéractif"; 
    		$current = '<li class="col-md-12"><a href="#">Home</a></li>';
			$next ='';
			$before = '';
	}
=======
            $next = '<li class="col-md-12"><a href="../chien">Étape suivante : chien</a></li>';
            $before = '<li class="col-md-12"><a href="../poitrine;">Etape précédente : poitrine</a></li>';
            $current = '<li class="col-md-12 "><a href="#">Etape courante</a></li>';
            break;
        case "profil":
            $titre = "Votre profil";
            $current = '<li class="col-md-12"><a href="../$current_etape;">Etape courante</a></li>';
            $next = '';
            $before = '';
    }
>>>>>>> origin/master
}

session_start();
if ($dossier != "accueil"){
if (!isset($_SESSION['id'])){
	header('location: ../accueil/index.php');
	}
}
if (isset($_SESSION['id'])){
$password = $_SESSION['id'];
include('../default/page/bdd.php');

//Récupération des informations de l'utilisateur
$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
$res = $login->fetch();
$IDuser = $res['iduser'];

$current_etape = $res['current_etape'];
}

?>


<!doctype html>


<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="UTF-8"/>
    <!-- lien vers les css -->

    <link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.css">


<link rel="stylesheet" type="text/css" href="../../vendor/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="../default/page/CSS/style.css"/>
    <link rel="stylesheet" href="style.css"/> 
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.css">
 