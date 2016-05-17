   <?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
<link rel="stylesheet" type="text/css" href="style.css">
    


<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->
 <!-- Latest compiled and minified JavaScript -->

<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>
<?php include('../default/page/bdd.php'); ?>
<?php 
if(isset($IDuser)){
$stepChien = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$IDuser.'" and etape_ID = "chien" ORDER BY field');
$stepLapin = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$IDuser.'" and etape_ID = "lapin" ORDER BY field');
$stepLivre = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$IDuser.'" and etape_ID = "livre" ORDER BY field');

//Récupération des informations de l'utilisateur
$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
$resUser = $login->fetch();
$id = $resUser['iduser'];




//calcul progression
$progress = $res['progression'];

$pourcent = round($progress * 8.4);
if($pourcent > 100){
	$pourcent = 100;
}

$imagEtape = strtolower($res['current_etape']);
if($imagEtape){
$imgEtape = $imagEtape . ".png" ;
}




?>
<!-- Place ici ton contenu -->

<div id="profil">
<div class="container">
    <div class="row"> 
 <div class="col-md-6">
    
      <h2>Profil <?php echo $res['password']; ?></h2>
	  <?php if($resUser['img_avatar']){ ?>
     <img class="img-circle img-responsive" width="300px" src="avatar/<?php echo $resUser['img_avatar']; ?>"/>
	  <?php } else { echo '<img class="img-circle img-responsive" width="300px" src="avatar/default.png" alt="avatar">'; } ?>
	 <br>
     <br>
     
	 
	 <form method="post" action="upload.php" enctype="multipart/form-data" onsubmit="return verifFile(this)">
     <p>Changez votre photo de profil (JPG, PNG ou GIF | max. 2 MO) :</p>
	 <label for="avatar"><div id="photo"></div></label><br />
     <div id="photo2">
		<input type="file" value="" name="avatar" id="avatar" /><br />
	 </div>
	 <input type="submit" class="mmmvalider" name="valider" id="valider" value="">
	 </form>
	  
	  <br>
	  <br>
	  <br>
	  <p>Progression dans le dispositif :</p>
	  <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $pourcent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $pourcent; ?>%">
          <?php echo $pourcent; ?>%
        </div>
      </div>
     <?php if(isset($imgEtape)){ ?>Etape courante : <a href="<?php echo "../".$imagEtape;?>"><img src="../default/page/img/<?php echo $imgEtape; ?>" alt="Etape_courante" class="img-thumbnail">
     <?php } else { ?>
     Etape courante : <a href="<?php echo "../gaspacho/";?>"><img src='../default/page/img/gaspacho.png'><?php } ?></a>
     
    </div>
    
 <div class="col-md-6">
  
  
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-success">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Imaginez le visage des personnages principaux !
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php 
		$x = 1;
		while ($chose = $stepChien->fetch()){
			switch ($chose['field']){
				case "visage":
				echo "<h3>Visages :</h3> <br>";
				echo "visage ".$x." : ".$chose['value']. " <br> ";
				break;
				case "points":
				echo "<h3>Points :</h3> <br>";
				echo "Vous avez gagnez tant de points : ".$chose['value']. " ";
			}
			$x = $x+1;
			
		}	?>
      </div>
    </div>
  </div>
  <div class="panel panel-success">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Devenez le nouveau conquistador culinaire de mambo canaille
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php 
		$y = 1;
		while ($chose = $stepLapin->fetch()){
			switch ($chose['field']){
				case "recette":
				echo "<h3>recettes</h3> <br>";
				echo "recette ".$y." : ".$chose['value']. " <br> ";
				break;
				case "points":
				echo "<h3>Points :</h3> <br>";
				echo "Vous avez gagnez tant de points : ".$chose['value']. " ";
			}
			$y = $y+1;
			
		}	?>
		</div>
    </div>
  </div>
  <div class="panel panel-success">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          À votre tour, devenez écrivain !
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">

		<h3>Mon oeuvre : </h3>
		<?php
		while ($chose = $stepLivre->fetch()){
			echo "<h3>" . $chose['field'] . "</h3> <p>" . $chose['value'] . "</p>";
		}
		?>

      </div>
    </div>
  </div>
</div>
	 <?php if($res['progression'] == 12){ echo "<p>Félicitations, vous avez terminé l'aventure Mambo Canaille. Vous avez maintenant accès à une partie bonus : <br><a href='../interview'><img src='img/carlos.png' alt='Carlos Mendez Guedez'></a></p>"; } ?>
     <script>
		function verifFile()
        {
			var size = document.getElementById("avatar").files[0].size;
			if(size > 2097152){
				alert("Taille du fichier trop grande !");
				return false;
			}
			else {
				return true;
			}
        }
		</script>
	
	
	</div>
    </div>

    </div>
	</div>
<?php
}
else {
	echo "<center>Aucune information à afficher, vous n'êtes pas connecté !</center>";
}
?>
<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?> 

       