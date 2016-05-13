<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

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
<img src="images/chambre2.png" width="1920" height="1080" usemap="#maparthur">
 <map name="maparthur" id="maparthur">
		<area shape="rect" title="canard" coords="1406,754,1498,800" href="#" alt="canard" onclick="showElem()"/>  		
        <area shape="rect" coords="959,765,1204,830" href="#" title="cravate" alt="cravate" onclick="showElem2()"/>
     	<area shape="rect" coords="2,969,51,1001" href="#" title="clef" alt="clef" onclick="showElem3()"/>
        <area shape="rect" coords="1406,581,1476,615" href="#" title="lunette" alt="lunette" onclick="showElem4()"/>
        <area shape="rect" coords="1645,277,1712,519" href="#" title="portrait" alt="portrait" onclick="showElem5()"/>
 </map>
</div>
 <div id="obj" class="col-md-4">
 <div class="col-md-12">
 <h2>Objets trouvés :</h2>
 </div>
 <ul class="list-inline col-md-12">
	<li id="canard" style="visibility:hidden;"><img width="50px" height="50px" src="images/canard.png"></li>
	<li id="cravate" style="visibility:hidden;"><img width="50px" height="50px" src="images/cravate.png"></li>
	<li id="clef" style="visibility:hidden;"><img width="50px" height="50px" src="images/clef.png"></li>
 	<li id="lunette" style="visibility:hidden;"><img width="50px" height="50px" src="images/lunette.png"></li>
	<li id="portrait" style="visibility:hidden;"><img width="50px" height="50px" src="images/portrait.png"></li>
 </ul>
   </div>
 
 <div id="question" class="col-md-4" style="visibility:hidden">
 <div class="col-md-12">
 <h2>La chambre appartient à :</h2>
 </div>
 <form action="verif.php" method="post" name="param" onsubmit="return confirmation()">
<div class="col-md-12">
<input type="radio" name="chambre2" id="r1" value="Alejandro" onclick="reponse()">
Alejandro
<input type="radio" name="chambre2" id="r2" value="Henry" onclick="reponse()">
Henry
<input type="radio" name="chambre2" id="r3" value="Simao" onclick="reponse()">
Simao
</div>
<input type="submit" class="mmmvalider" name="valider" id="valider" value="">

</form>
</div>
<div id="portes" class="col-md-4">
   <div class="col-md-12">
		<h2>Changer de chambre :</h2>
   </div>
   <div class="col-md-12">
		<ul class="list-inline responsivportes">
			<li class="col-md-2"><div class="img-thumbnail"><a href="chambre1.php"><img class="col-md-12" width="50px" height="60px" src="images/porte1.png" alt="chambre1" title="chambre1"><div class="col-md-12"><?php if(isset($henry)){ echo $henry ; } ?></div></a></div></li>
			<li class="col-md-2"><div class="img-thumbnail"><a href="chambre2.php"><img class="col-md-12" width="50px" height="60px" src="images/porte2.png" alt="chambre2" title="chambre2"><div class="col-md-12"><?php  if(isset($alejandro)){ echo $alejandro ; } ?></div></a></div></li>
			<li class="col-md-2"><div class="img-thumbnail"><a href="chambre3.php"><img class="col-md-12" width="50px" height="60px" src="images/porte3.png" alt="chambre3" title="chambre3"><div class="col-md-12"><?php  if(isset($simao)){ echo $simao ;} ?></div></a></div></li>
		</ul>
	</div> 
</div>

   
   
<script>
	var count = 0;
	var count1 = 0;
	var count2 = 0;
	var count3 = 0;
	var count4 = 0;
function showElem() {
    document.getElementById("canard").style.visibility = "visible";
	if(count == 0){
		count = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	
	}
}
function showElem2() {
    document.getElementById("cravate").style.visibility = "visible";
	if(count1 == 0){
		count1 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	
	}
}
function showElem3() {
    document.getElementById("clef").style.visibility = "visible"; 
	if(count2 == 0){
		count2 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	

	}
}
function showElem4() {
    document.getElementById("lunette").style.visibility = "visible"; 
	if(count3 == 0){
		count3 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	

	}
}function showElem5() {
    document.getElementById("portrait").style.visibility = "visible"; 
	if(count4 == 0){
		count4 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	

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