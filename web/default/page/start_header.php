<?php
 session_start();
if (!isset($_SESSION['id'])){
	header('location: ../default/page/onload.php');
}


$dossier = explode('/', $_SERVER['REQUEST_URI']);
$dossier = $dossier[3];
$icone = $dossier . ".png" ;

if ($dossier != null) {
    switch ($dossier) {
        case "crotte":
            $titre = "Expulsez Mary Carmen !";
            break;
        case "livre":
            $titre = "À votre tour, devenez écrivain !";
            break;
        case "ours":
            $titre = "Découvrez les fragments de l'histoire de Madrid";
            break;
        case "hotel":
            $titre = "Déambulez de place en place à Madrid";
            break;
        case "ordinateur":
            $titre = "Naviguez à travers l’ordinateur d’Henry";
            break;
        case "lapin":
            $titre = "Devenez le nouveau conquistador culinaire de mambo canaille";
            break;
        case "vin":
            $titre = "Initiez-vous à l’oenologie chilienne";
            break;
        case "poitrine":
            $titre = "Découvrez la beauté à travers les siècles";
            break;
        case "immeuble":
            $titre = "Infiltrez vous chez les trois canailles";
            break;
        case "gaspacho":
            $titre = "Préparez vous-même le gaspacho d’Henry !";
            break;
        case "chien":
            $titre = "Imaginez le visage des personnages principaux !";
            break;
        case "ferrari":
            $titre = "Partez à la découverte du Venezuela !";
    }
}
$_SESSION['etape'] = $dossier;

?>


<!doctype html>


<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
    <!-- lien vers les css -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../default/page/CSS/style.css"/>
    <link rel="stylesheet" href="style.css"/> 
 