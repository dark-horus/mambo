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
<img src="images/chambre3.png" width="1920" height="1080" usemap="#maparthur">
 <map name="maparthur" id="maparthur">
		<area shape="rect" title="vin" coords="-2,862,56,1022" href="#" alt="vin" onclick="showElem()"/>  		
        <area shape="rect" coords="473,750,566,814" href="#" title="os" alt="os" onclick="showElem2()"/>
     	<area shape="rect" coords="708,796,758,846" href="#" title="telephone" alt="telephone" onclick="showElem3()"/>
        <area shape="rect" coords="962,640,1050,676" href="#" title="journal" alt="journal" onclick="showElem4()"/>
     	<area shape="rect" coords="1612,560,1684,784" href="#" title="batte" alt="batte" onclick="showElem5()"/>
 </map>
</div>
<div id="minimenu">
 <div id="obj" class="col-md-4">
 <div class="col-md-12">
 <h2>Objets trouvés :</h2>
 <br>
 </div>
 <ul class="list-inline">
	<li id="vin" style="visibility:hidden;"><img width="50px" height="50px" class="img-responsive" src="images/vin.png"></li>
	<li id="os" style="visibility:hidden;"><img width="50px" height="50px" class="img-responsive" src="images/os.png"></li>
	<li id="telephone" style="visibility:hidden;"><img width="50px" height="50px" class="img-responsive" src="images/telephone.png"></li>
 	<li id="journal" style="visibility:hidden;"><img width="50px" height="50px" class="img-responsive" src="images/journal.png"></li>
	<li id="batte" style="visibility:hidden;"><img width="50px" height="50px" class="img-responsive" src="images/batte.png"></li>
 </ul>
   </div>
 
 <div id="question" class="col-md-4" style="visibility:hidden">
 <div class="col-md-12">
 <h2>La chambre appartient à :</h2>
 </div>
 <form action="verif.php" method="post" name="param" onsubmit="return confirmation()">
<div class="col-md-12">
<input type="radio" name="chambre3" id="r1" value="Alejandro" onclick="reponse()">
Alejandro
<input type="radio" name="chambre3" id="r2" value="Henry" onclick="reponse()">
Henry
<input type="radio" name="chambre3" id="r3" value="Simao" onclick="reponse()">
Simao
</div>
<input type="submit" name="valider" id="valider" class="mmmvalider" value="">

</form>
</div>
   
   <div id="portes" class="col-md-4">
   <h2>Changer de chambre :</h2>
   <div class="col-md-12">
	<ul class="list-inline responsivportes">
	<li class="col-md-2"><div class="img-thumbnail"><a href="chambre1.php"><img class="col-md-12" width="50px" height="60px" src="images/porte1.png" alt="chambre1" title="chambre1"><div class="col-md-12"><?php if(isset($henry)){ echo $henry ; } ?></div></a></div></li>
	<li class="col-md-2"><div class="img-thumbnail"><a href="chambre2.php"><img class="col-md-12" width="50px" height="60px" src="images/porte2.png" alt="chambre2" title="chambre2"><div class="col-md-12"><?php  if(isset($alejandro)){ echo $alejandro ; } ?></div></a></div></li>
	<li class="col-md-2"><div class="img-thumbnail"><a href="chambre3.php"><img class="col-md-12" width="50px" height="60px" src="images/porte3.png" alt="chambre3" title="chambre3"><div class="col-md-12"><?php  if(isset($simao)){ echo $simao ;} ?></div></a></div></li>
 </ul>
  </div>  
   </div>
   </div>
<script>
	var count = 0;
	var count1 = 0;
	var count2 = 0;
	var count3 = 0;
	var count4 = 0;

function showElem() {
    document.getElementById("vin").style.visibility = "visible";
	if(count == 0){
		count = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	
	}
}
function showElem2() {
    document.getElementById("os").style.visibility = "visible";
	if(count1 == 0){
		count1 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	
	}
}
function showElem3() {
    document.getElementById("telephone").style.visibility = "visible"; 
	if(count2 == 0){
		count2 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	

	}
}
function showElem4() {
    document.getElementById("journal").style.visibility = "visible"; 
	if(count3 == 0){
		count3 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	

	}
}function showElem5() {
    document.getElementById("batte").style.visibility = "visible"; 
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