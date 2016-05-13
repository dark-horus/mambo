<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<?php include('../default/page/end_header.php'); ?>

<!-- CONTENT -->
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
<img src="images/chambre1.png" width="1920" height="1080" usemap="#maparthur" alt="chambre1" />
 <map name="maparthur" id="maparthur">
		<area shape="rect" coords="18,690,108,758" href="#" title="livre" alt="livre" onclick="showElem()"/>  		
        <area shape="rect" coords="1262,795,1316,843" href="#" title="appareil" alt="appareil" onclick="showElem2()"/>
     	<area shape="rect" coords="1845,656,1892,687" href="#" title="Stylo" alt="stylo" onclick="showElem3()"/>
        <area shape="poly" coords="1866,647,1905,574,1875,542,1828,625,1699,623,1695,647" href="#" title="ordinateur" alt="ordinateur" onclick="showElem4()"/>
        <area shape="rect" coords="264,857,432,929" href="#" title="chaussures" alt="chaussures" onclick="showElem5()"/>
 </map>
</div>
 <div id="obj" class="col-md-4"> 
 <div class="col-md-12">
 <h2>Objets trouvés : </h2>
 <br>
 </div>
 <ul class="list-inline">
	<li id="livre" style="visibility:hidden;"><img width="50px" height="50px" src="images/livre.png"></li>
	<li id="appareil" style="visibility:hidden;"><img width="50px" height="50px" src="images/appareil.png"></li>
	<li id="stylo" style="visibility:hidden;"><img width="50px" height="50px" src="images/stylo.png"></li>
 	<li id="ordinateur" style="visibility:hidden;"><img width="50px" height="50px" src="images/ordinateur.png"></li>
 	<li id="chaussures" style="visibility:hidden;"><img width="50px" height="50px" src="images/chaussures.png"></li>
	</ul>
   </div>
 
 <div id="question" class="col-md-4" style="visibility:hidden">
 <div class="col-md-12">
	<h2>La chambre appartient à :</h2>
 </div>
 <form action="verif.php" method="post" name="param" onsubmit="return confirmation()">
<div class="col-md-12">
<input type="radio" name="chambre1" id="r1" value="Alejandro" onclick="reponse()">
Alejandro
<input type="radio" name="chambre1" id="r2" value="Henry" onclick="reponse()">
Henry
<input type="radio" name="chambre1" id="r3" value="Simao" onclick="reponse()">
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
    document.getElementById("livre").style.visibility = "visible";
	if(count == 0){
		count = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	
	}
}
function showElem2() {
    document.getElementById("appareil").style.visibility = "visible";
	if(count1 == 0){
		count1 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	
	}
}
function showElem3() {
    document.getElementById("stylo").style.visibility = "visible"; 
	if(count2 == 0){
		count2 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	

	}
}
function showElem4() {
    document.getElementById("ordinateur").style.visibility = "visible"; 
	if(count3 == 0){
		count3 = 1;
		if(count + count1 + count2 + count3 + count4 > 2 )
{  
        document.getElementById("question").style.visibility = "visible";     
}	

	}
}
function showElem5() {
    document.getElementById("chaussures").style.visibility = "visible"; 
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