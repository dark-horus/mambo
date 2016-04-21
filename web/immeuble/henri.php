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
<div id="image">
<img class="img-responsive" src="images/henriHD.png" width="100%" usemap="#maparthur">
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

<input type="radio" name="henri" id="r1" value="Alejandro" onclick="reponse()">
Alejandro
<input type="radio" name="henri" id="r2" value="Henri" onclick="reponse()">
Henri
<input type="radio" name="henri" id="r3" value="Simao" onclick="reponse()">
Simao
<input type="submit" name="valider" id="valider" value="Valider l'étape">

</form>
</div>
   
   
   
<script>
	var count = 0;
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