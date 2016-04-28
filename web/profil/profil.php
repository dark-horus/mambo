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
$stepOrdinateurM = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$IDuser.'" and etape_ID = "ordinateur" and field = "musique" ORDER BY field');
$stepOrdinateurV = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$IDuser.'" and etape_ID = "ordinateur" and field = "video" ORDER BY field');

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
     <img class="img-circle img-responsive" width="300px" src="<?php echo "avatar/". $resUser['img_avatar']; ?>" alt="">
	  <?php } else { echo '<img class="img-circle img-responsive" width="300px" src="avatar/arthur.png" alt="">'; } ?>
	 <br>
     <br>
     
	 
	 <form method="post" action="upload.php" enctype="multipart/form-data" onsubmit="return verifFile(this)">
     <label for="avatar">Changer sa photo de profil (JPG, PNG ou GIF | max. 2 MO) :</label><br />
     <input type="file" name="avatar" id="avatar" /><br />
     <input type="submit" name="submit" value="Envoyer" />
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
     
     Etape courante : <a href="<?php echo "../".$imagEtape;?>"><?php if(isset($imgEtape)){ ?><img src="../default/page/img/<?php echo $imgEtape; ?>" alt="Etape_courante" class="img-thumbnail">
     <?php } else { echo "<img src='../default/page/img/gaspacho.png'>"; } ?></a>
     
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
          Naviguez à travers l’ordinateur d’Henry
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php 
		$z = 1;
		$testsong = "";
		$y = 1;
		?>
		<h3>Mes musiques : </h3>
		<?php
		while ($chose = $stepOrdinateurM->fetch()){
			if($chose['field'] == "musique"){
				$testsong = "<a href=''>Musique ".$z." : ".$chose['value']. "</a> <br> ";
				echo $testsong;
			}
			$z = $z+1;
		}
		?>
		<h3>Mes vidéos</h3>
		<?php
		while ($choseV = $stepOrdinateurV->fetch()){
			if($choseV['field'] == "video"){
				$testvideo = "<a href=''>Vidéo ".$y." : ".$choseV['value']. "</a> <br> ";
				echo $testvideo;
			}
			$y = $y+1;
		}
			
			
			
		
		?>
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
    
	<!--<table class="table">
        <tbody>

          <tr class="success">
            <td>Icone 1</td>
            <td>Imaginez le visage des principaux personnages</td>
          </tr>

            <tr>

            <td><i class="fa fa-eye fa-5x" aria-hidden="true"></i></td>
            <td><h1> ICI le visuel des etape echo("rendu_Etape")</h1></td>

          </tr>

          <tr class="success">
            <td>Icone 2</td>
            <td>Parcourez le monde entier</td>
            </tr>
         <tr>

            <td><i class="fa fa-eye fa-5x" aria-hidden="true"></i></td>
            <td><h1> ICI le visuel des etape echo("rendu_Etape")</h1></td>

          </tr>

          <tr class="success">
            <td>Icone 3</td>
            <td>Naviguez à travers l'ordinateur</td>
          </tr>
             <tr>

            <td><i class="fa fa-eye fa-5x" aria-hidden="true"></i></td>
            <td><h1> ICI le visuel des etape echo("rendu_Etape")</h1></td>

          </tr>

        </tbody>
      </table>
    -->
	
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

       