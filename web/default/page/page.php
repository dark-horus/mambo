<?php 

//connexion à la bdd
//a remplacer par variables de sessions ? ou de bdd ? 
$icone = "<img src='images/icone.png' title='test' >" ;
$titre = "Expulsez la voisine Marie Carmen !" ;


?>


<!doctype html>


<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- lien vers le css -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" /> 

 
<!-- lien vers scripts -->
<!-- <script src="#"></script> -->
<script src="vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
<script src="vendor/jquery-2.2.1/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>

<title>page</title>
</head>

<body>
<div class="container-fluid">
<header class="row">
	<nav id="topmenu" class="col-md-12">
		<ul class="list-inline">
        <li>
			<div id="burger">
			<!-- menu burger -->
				<div class="dropdown">
					<a href="#" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="images/burger.png" title="burger">
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" aria-labelledby="dLabel">
						<div id="topdropdown" class="col-md-12">
                        	<li class="col-md-6"><a href="#">HOME</a></li>
                        	<li class="col-md-6"><a href="#">Profil</a></li>
                     	</div>
                        <div id="botdropdown">
							<li class="col-md-12"><a href="#">Etape précédente</a></li>
							<li class="col-md-12"><a href="#">Etape actuelle</a></li>
							<li class="col-md-12"><a href="#">Etape suivante</a></li>
                        </div>	
					</ul>
				</div>
			</div>
        </li>
        <li>
			<div id="icone">
				<!-- placer ici l'icone, remplacer par la bonne  à mettre en php -->
				<?php echo $icone ?>
			</div>
        </li>
        <li>
			<div id="consigne">
			<!-- placer ici le titre/consigne de l'étape en php -->
			<h1><?php echo $titre ?></h1>
			</div>
        </li>
        </ul>
	</nav>
</header>
<div id="content">
<!-- placer ici le contenu -->
</div>

<footer>
	<ul>
		<li><a href="#">Mentions Légales</a></li>
		<li><a href="#">A propos</a></li>
	</ul>
</footer>
</div>
</body>
</html>
