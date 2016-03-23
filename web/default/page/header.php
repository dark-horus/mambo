<?php


$chemin = getcwd();
$pouet = explode('\\', $chemin);
$dossier = end($pouet);
$icone = $dossier . ".png" ;

switch($dossier){
	case "crotte":
	$titre = "Expulsez Mary Carmen !";
	break;
	case "livre":
	$titre = "À votre tour, devenez écrivain !";
}


?>






<!doctype html>


<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- lien vers les css -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="../default/page/CSS/style.css" /> 

 
<!-- liens vers scripts -->
<script src="../../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
<script src="../../vendor/jquery-2.2.1/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="../../vendor/fancybox/source/jquery.fancybox.css">
	<script type="text/javascript" src="../../vendor/fancybox/source/jquery.fancybox.js"></script>
	<script type="text/javascript" src="../../vendor/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="../../vendor/fancybox/source/jquery.mousewhell.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	</script>


<title><?php echo $titre ?></title>
</head>

<body>
<div class="container-fluid">
<header class="row">
	<nav id="mambo-topmenu" class="col-md-7">
		<ul class="list-inline">
        <li>
			<div id="mambo-burger">
			<!-- menu burger -->
				<div class="dropdown">
					<a href="#" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="../default/page/img/burger.png" title="burger">
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" aria-labelledby="dLabel">
						<div id="mambo-topdropdown" class="col-md-12">
                        	<li class="col-md-6"><a href="#">HOME</a></li>
                        	<li class="col-md-6"><a href="#">Profil</a></li>
                     	</div>
                        <div id="mambo-botdropdown">
							<li class="col-md-12"><a href="#">Etape précédente</a></li>
							<li class="col-md-12"><a href="#">Etape actuelle</a></li>
							<li class="col-md-12"><a href="#">Etape suivante</a></li>
                        </div>	
					</ul>
				</div>
			</div>
        </li>
        <li>
			<div id="mambo-icone">
				<!-- icone de l'étape -->
				<img src="../default/page/img/<?php echo $icone; ?>">
			</div>
        </li>
        <li>
			<div id="mambo-consigne">
			<!-- titre/consigne de l'étape-->
			<h1><?php echo $titre ?></h1>
			</div>
        </li>
        </ul>
	</nav>
</header>
<div id="mambo-content">


