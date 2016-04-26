<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->



<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->
<?php 
$password = $_SESSION['id'];

//Récupération des informations de l'utilisateur
$login = $bdd->query('SELECT * FROM `user` WHERE password = "'.$password.'"');
$res = $login->fetch();
$id = $res['iduser'];
//Récupération des informations de l'étape
$step = $bdd->query('SELECT * FROM `etape` WHERE user_ID = "'.$id.'" GROUP BY value');

while($values = $step->fetch()){
	if ($values['value'] == "Henry"){
		$henry = "Henry";
	}
	if ($values['value'] == "Alejandro"){
		$alejandro = "Alejandro";
	}
	if ($values['value'] == "Simao"){
		$simao = "Simao";
	}
}
?>
<div id="image">
<img src="images/chambre3.png" width="100%" usemap="#maparthur">
</div>
 <map name="maparthur" id="maparthur">
		<area shape="rect" title="livre" coords="2,804,96,850" href="#" onclick="showElem()"/>  		
        <area shape="rect" coords="1263,944,1298,960" href="#" title="appareil" onclick="showElem2()"/>
     	<area shape="rect" coords="1846,746,1888,767" href="#" title="Stylo" onclick="showElem3()"/>

 </map>

 <div id="obj">
 <h2>Objets trouvés :</h2>
 <ul class="list-inline">
	<li id="livre" style="visibility:hidden;"><img class="img-responsive" src="images/livre.png"></li>
	<li id="appareil" style="visibility:hidden;"><img class="img-responsive" src="images/livre.png"></li>
	<li id="stylo" style="visibility:hidden;"><img class="img-responsive" src="images/livre.png"></li>
 </ul>
   </div>
 
 <div id="question" style="visibility:hidden">
 <p>Avez vous deviné à qui appartient cette chambre ?</p>
 <form action="verif.php" method="post" name="param" onsubmit="return confirmation()">

<input type="radio" name="chambre3" id="r1" value="Alejandro" onclick="reponse()">
Alejandro
<input type="radio" name="chambre3" id="r2" value="Henry" onclick="reponse()">
Henry
<input type="radio" name="chambre3" id="r3" value="Simao" onclick="reponse()">
Simao
<input type="submit" name="valider" id="valider" value="Valider l'étape">

</form>
</div>
   
   <div id="portes">
   <h2>Changer de chambre :</h2>
	<ul class="list-inline col-md-12">
	<li class="col-md-2"><div class="img-thumbnail"><a href="chambre1.php"><img class="col-md-12" width="50px" height="60px" src="images/porte1.png" alt="chambre1" title="chambre1"><div class="col-md-12"><?php if(isset($henry)){ echo $henry ; } ?></div></a></div></li>
	<li class="col-md-2"><div class="img-thumbnail"><a href="chambre2.php"><img class="col-md-12" width="50px" height="60px" src="images/porte2.png" alt="chambre2" title="chambre2"><div class="col-md-12"><?php  if(isset($alejandro)){ echo $alejandro ; } ?></div></a></li>
	<li class="col-md-2"><div class="img-thumbnail"><a href="chambre3.php"><img class="col-md-12" width="50px" height="60px" src="images/porte3.png" alt="chambre3" title="chambre3"><div class="col-md-12"><?php  if(isset($simao)){ echo $simao ;} ?></div></a></li>
 </ul>
  </div>  
   
<script>
	var count = 0;
	//au lieu du count : mettre une condition si id machin et truc style visible, montrer la question
function showElem() {
    document.getElementById("livre").style.visibility = "visible";
	count = count + 1;
	if (count > 2) {
		document.getElementById("question").style.visibility = "visible";
	}
}
function showElem2() {
    document.getElementById("appareil").style.visibility = "visible";
	count = count + 1;
		if (count > 2) { 	
			document.getElementById("question").style.visibility = "visible";
		}
}
function showElem3() {
    document.getElementById("stylo").style.visibility = "visible"; 
	count = count + 1;
		if (count > 2) {
			document.getElementById("question").style.visibility = "visible";
		}
}
</script>
<?php 
if(isset($_SESSION['badanswer'])){
	?>
	<script>
	alert("Mauvaise réponse !");
	</script>
	<?php
	}
?>
<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>