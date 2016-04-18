<?php


$chemin = getcwd();
$pouet = explode('\\', $chemin);
$dossier = end($pouet);
$icone = $dossier . ".png" ;


if ($dossier != NULL) {
switch($dossier){
	case "crotte":
	$titre = "Expulsez Mary Carmen !";
	break;
	case "livre":
	$titre = "À votre tour, devenez écrivain !";
	break;
	case "ours":
	$titre = "Découvrez les fragments de l'histoire de Madrid";
	case "hotel":
	$titre = "Déambulez de place en place à Madrid";
	case "ordinateur":
	$titre = "Naviguez à travers l’ordinateur d’Henry";
	case "lapin":
	$titre = "Devenez le nouveau conquistador culinaire de mambo canaille";
	case "vin":
	$titre = "Initiez-vous à l’oenologie chilienne";
	case "poitrine":
	$titre = "Découvrez la beauté à travers les siècles";
	case "immeuble":
	$titre = "Infiltrez vous chez les trois canailles";
	case "gaspacho":
	$titre = "Préparez vous-même le gaspacho d’Henry !";
	case "chien":
	$titre = "Imaginez le visage des personnages principaux !";
	case "ferrari":
	$titre = "Partez à la découverte du Venezuela !";
	}
}

?>






<!doctype html>


<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- lien vers les css -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="../default/page/CSS/style.css" /> 
<link rel="stylesheet" href="style.css" /> 
 