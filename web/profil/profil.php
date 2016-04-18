   <?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
 <!-- Latest compiled and minified CSS -->
    


<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->
 <!-- Latest compiled and minified JavaScript -->

<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>
<?php include('../default/page/bdd.php'); ?>
<?php 

$stepChien = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$IDuser.'" and etape_ID = "chien" ORDER BY field');
$stepLapin = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$IDuser.'" and etape_ID = "lapin" ORDER BY field');
$stepOrdinateurM = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$IDuser.'" and etape_ID = "ordinateur" and field = "musique" ORDER BY field');
$stepOrdinateurV = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$IDuser.'" and etape_ID = "ordinateur" and field = "video" ORDER BY field');

/* MaJ progression pour test avec bdd
$id = $res['iduser'];
$requete = $bdd->query('SELECT etape_ID FROM `etape` WHERE user_ID = "'.$id.'" GROUP BY etape_ID');
$progression = 0;
while($donnees = $requete->fetch())
{
	$progression = $progression+1;
}

$req3 = "UPDATE `user` SET progression = '$progression' WHERE iduser = '$id'";
$req3 = $bdd->exec($req3);
*/

//calcul progression
$progress = $res['progression'];
$pourcent = round($progress * 8.4);
if($pourcent > 100){
	$pourcent = 100;
}

$imgEtape = $res['current_etape'];
$imgEtape = $imgEtape . ".png" ;




?>
<!-- Place ici ton contenu -->


<div class="container">
    <div class="row"> 
 <div class="col-md-6">
    
      <h2>Profil <?php echo $res['password']; ?></h2>
     <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAZHAAAAJDI3Y2MzNzhmLThjYjctNDZmZC1iN2JmLWQ5ZjkwOGVlZjFmNw.jpg" alt="" class="img-circle">
     <br>
     <br>
     
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $pourcent; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $pourcent; ?>%">
          <?php echo $pourcent; ?>%
        </div>
      </div>
     
     Etape courante : <img src="../default/page/img/<?php echo $imgEtape; ?>" alt="Etape_courante" class="img-thumbnail">
     <!-- <img src="../default/page/img/" alt="Etape_suivante" class="img-thumbnail"> -->
     
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




<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?> 

       