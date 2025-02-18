<?php
//recupération du nom de l'étape + étape suivante et précédente
$dossier = explode('/', $_SERVER['REQUEST_URI']);
$dossier = $dossier[3];
$icone = $dossier . ".png";

if ($dossier != null) {
    switch ($dossier) {
        case "crotte":
            $titre = "Expulsez Mary Carmen !";
			 $next = '<li class="col-md-12"><a href="../default/page/recEtape.php?etape=poitrine">Étape suivante<br>Poitrine</a></li>';
			 $before = '<li class="col-md-12"><a href="../vin">Étape précédente<br>Vin</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Crotte</a></li>';
            $consigne ="Trouvez la bonne combinaison d’actions pour faire partir votre voisine Mary Carmen en plaçant les actions dans le bon ordre. Un point vert correspond à une icône placée au bon endroit. Un point orange équivaut à une icône présente dans la combinaison mais qui n’est pas au bon endroit. Attention, une icône peut être utilisée plusieurs fois dans la combinaison.";
			break;
        case "livre":
            $titre = "À votre tour, devenez écrivain !";
			$next = '<li class="col-md-12"><a href="../lapin">Étape suivante<br>Lapin</a></li>';
			$before = '<li class="col-md-12"><a href="../chien/">Étape précédente<br>Chien</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Livre</a></li>';
            $consigne ="Glissez-vous dans la peau d’Henry et écrivez la suite de l’histoire. Parcourez au gré des rayons ses différentes sources d’inspiration littéraire.";
			break;
        case "ours":
            $titre = "Découvrez des événements historiques de Madrid !";
			$next = '<li class="col-md-12"><a href="../immeuble">Étape suivante<br>Immeuble</a></li>';
			$before = '<li class="col-md-12"><a href="../lapin">Étape précédente<br>Lapin</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Ours</a></li>';
			$consigne ="Des anecdotes historiques se sont cachées dans le blason de Madrid, partez à leur recherche pour découvrir les évènements marquants de cette ville.";
			break;
        case "hotel":
            $titre = "Déambulez, de place en place, à travers Madrid !";
			$next = '<li class="col-md-12"><a href="../vin">Étape suivante<br>Vin</a></li>';
			$before = '<li class="col-md-12"><a href="../gaspacho/">Étape précédente<br>Gaspacho</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Hôtel</a></li>';
            $consigne ="Aventurez-vous dans les lieux où Henry et Simao se sont baladés. Cette carte vous donnera accès aux cinq places touristiques de Madrid : la Puerta del sol, la Puerta de Alcalà, la Plaza de Oriente, la Plaza Mayor et la Plaza de Cibeles.";
			break;
        case "ordinateur":
            $titre = "Naviguez à travers l’ordinateur d’Henry";
			$next = '<li class="col-md-12"><a href="../interview">Rencontre avec l\'auteur</a></li>';
			$before = '<li class="col-md-12"><a href="../immeuble">Étape précédente<br>Immeuble</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Ordinateur</a></li>';
            $consigne ="Écoutez des musiques et regardez des vidéos de films, de séries ou d’autres éléments évoqués dans 'Mambo Canaille' en utilisant les fenêtres comme si vous utilisiez vous-même l’ordinateur d’Henry.";
			break;
        case "lapin":
            $titre = "Devenez le nouveau conquistador culinaire de <em>Mambo Canaille</em>";
			$next = '<li class="col-md-12"><a href="../default/page/recEtape.php?etape=ours">Étape suivante<br>Ours</a></li>';
			$before = '<li class="col-md-12"><a href="../livre">Étape précédente<br>Livre</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Lapin</a></li>';
            $consigne ="Vous n'êtes ni Christophe Colomb ni au 15ème siècle, mais explorez le vaste monde de l'art culinaire de 'Mambo Canaille' et mettez la main à la pâte en ajoutant votre recette à ce délicieux planisphère.";
			break;
        case "vin":
            $titre = "Initiez-vous à l’œnologie chilienne";
			$next = '<li class="col-md-12"><a href="../crotte">Étape suivante<br>Crotte</a></li>';
			$before = '<li class="col-md-12"><a href="../hotel">Étape précédente<br>Hôtel</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Vin</a></li>';
            $consigne ="Débouchez un Don Melchor, appréciez les saveurs des différents cépages, voyagez au travers des vignes du Chili et de France.";
			break;
        case "poitrine":
            $titre = "Partez à la rencontre des femmes d'hier et d'aujourd'hui !";
			$next = '<li class="col-md-12"><a href="../default/page/recEtape.php?etape=ferrari">Étape suivante<br>Ferrari</a></li>';
			$before = '<li class="col-md-12"><a href="../crotte">Étape précédente<br>Crotte</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Poitrine</a></li>';
            $consigne ="Remontez le temps et rencontrez les idéaux féminins qui ont inspirés de nombreux artistes, par leur beauté.";
			break;
        case "immeuble":
            $titre = "Infiltrez-vous chez les trois canailles !";
			$next = '<li class="col-md-12"><a href="../default/page/recEtape.php?etape=ordinateur">Étape suivante<br>Ordinateur</a></li>';
			$before = '<li class="col-md-12"><a href="../ours">Étape précédente<br>Ours</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Immeuble</a></li>';
            $consigne ="Vous êtes un enquêteur de la police à la recherche d'Alejandro, Henry et Simao. Retrouvez tous les objets cachés afin d’identifier les propriétaires des chambres.";
			break;
        case "gaspacho":
            $titre = "Préparez le gaspacho d’Henry !";
			$next = '<li class="col-md-12"><a href="../default/page/recEtape.php?etape=hotel">Étape suivante<br>Hôtel</a></li>';
			$before = '';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Gaspacho</a></li>';
            $consigne ="Composez votre gaspacho avec les ingrédients proposés, en espérant qu’il plaira à Henry...";
			break;
        case "chien":
            $titre = "Imaginez le visage des personnages principaux !";
			$next = '<li class="col-md-12"><a href="../livre">Étape suivante<br>Livre</a></li>';
			$before = '<li class="col-md-12"><a href="../ferrari/index.html">Étape précédente<br>Ferrari</a></li>';
			$current = '<li class="col-md-12"><a href="#" >Étape en cours<br>Chien</a></li>';
            $consigne ="Vous voici devant un logiciel permettant de créer des portraits robots. Servez-vous en pour reconstituer les visages de nos trois compères. Une fois cette tâche terminée, validez vos propositions pour pouvoir les comparer avec celles des autres lecteurs.";
			break;
        case "ferrari":
            $titre = "Partez à la découverte du Venezuela !";
			$next = '<li class="col-md-12"><a href="../chien/">Étape suivante<br>Chien</a></li>';
			$before = '<li class="col-md-12"><a href="../poitrine/">Étape précédente<br>Poitrine</a></li>';
			$current = '<li class="col-md-12 "><a href="#">Étape en cours<br>Ferrari</a></li>';
			$consigne ="A bord de la Ferrari d’Alejandro, retracez l’histoire du pays natal de l’auteur de 'Mambo Canaille'. ";
			break;
		case "profil":
			$titre = "Votre profil";
			$current = '<li class="col-md-12"><a href="#">PROFIL</a></li>';
			$next = '';
			$before = '';
			break;
		case "accueil":
			$titre = ""; 
    		$current = '';
			$next ='';
			$before = '';
            break;
        case "mentions":
            $titre = "Mentions légales et Conditions générales d'utilisation";
    		$current = '';
			$next ='';
			$before = '';
            break;
        case "interview":
            $titre = "Rencontrez Juan Carlos Méndez Guédez";
    		$current = '';
			$next ='';
			$before = '';
	}
}

session_start();

if ($dossier == "livre" || $dossier == "immeuble" || $dossier == "profil"){
		if(!isset($_SESSION['id'])){
			header('location: ../403bis.php');
		}
	}
	
if(isset($_SESSION['id'])){
	$password = $_SESSION['id'];
	include('../default/page/bdd.php');

//Récupération des informations de l'utilisateur
		if($bdd){
			$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
			$res = $login->fetch();
			$IDuser = $res['iduser'];
		}
		$current_etape = $res['current_etape'];
	
	if ($dossier == "livre" || $dossier == "immeuble" || $dossier == "profil"){
		if(!isset($IDuser)){
			header('location: ../403bis.php');
		}
	}	
}
/* A DECOMMENTER EN PROD !!!!!!!!!
if($dossier == "interview"){
	if(!isset($_SESSION['id']) || $res['progression'] != 12){
		header('location: ../default/page/pasvalide.php');
	}
}
*/
?>


<!doctype html>


<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
    <!-- lien vers les css -->

    <link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="../../vendor/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="../default/page/CSS/style.css"/>
    <link rel="stylesheet" href="../default/page/CSS/font.css"/>
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.css">
	
 