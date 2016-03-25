<?php


$chemin = getcwd();
$pouet = explode('\\', $chemin);
$dossier = end($pouet);
$icone = $dossier . ".png" ;

//faire une verification si dossier existe
switch($dossier){
	case "crotte":
	$titre = "Expulsez Mary Carmen !";
	break;
	case "livre":
	$titre = "À votre tour, devenez écrivain !";
	break;
	case "ours":
	$titre = "Découvrez les fragments de l'histoire de Madrid";

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
 