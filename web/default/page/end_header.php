<title><?php echo $titre ?></title>
</head>

<body>
<div id="toutelecontenu">
    <header class="row">
        <nav id="mambo-topmenu" class="col-md-12">
            <ul class="list-inline">
                <li>
                    <div id="mambo-burger">
                        <!-- menu burger -->
                        <div class="dropdown">
                            <a href="#" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../default/page/img/burger.png" title="burger">

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <div id="mambo-topdropdown" class="col-md-12">
                                    <li class="col-md-6"><a href="../accueil/index.php">Accueil </a></li>
                                    <li class="col-md-6"><a href="../profil/profil.php">Profil</a></li>
                                </div>
                                <div id="mambo-botdropdown">
                                    <?php echo $before; ?>
                                    <?php echo $current; ?>
                                    <?php echo $next; ?>
									<?php if(!isset($_SESSION['id'])){ ?>
									<li class="col-md-12"><a href="../accueil/index.php">Connexion</a></li>
									<?php } 
									else { ?>
								
									<li class="col-md-12"><a href="../default/page/deconnexion.php">Déconnexion</a></li>
									<?php } ?>
                                </div>
                            </ul>
                        </div>
                    </div>
                </li>
				<?php if ($dossier != "accueil" && $dossier != "profil" && $dossier != "mentions") { ?>
                <li>
                    <div id="mambo-icone">
                        <!-- icone de l'étape -->
                        <img src="../default/page/img/<?php echo $icone; ?>">
                    </div>
                </li>
                    <?php } if ($dossier != "accueil" && $dossier != "profil") { ?>
                <li>
                    <div id="mambo-consigne">
                        <!-- titre/consigne de l'étape-->
                        <h1><?php echo $titre ?></h1>
                    </div>
                </li>
                    <?php } if ($dossier != "accueil" && $dossier != "profil" && $dossier != "mentions") { ?>
				<li>
				
					<a href="#"><img src="../default/page/img/interrogation.png" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo $consigne; ?>"></a>
				
				</li>
				<?php } ?>
            </ul>
        </nav>
		<script>
$(function () {
	if($('[data-toggle="popover"]').length){
		$('[data-toggle="popover"]').popover()
	}
	});
</script>
    </header>
	<div id="etape">