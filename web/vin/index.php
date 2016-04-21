<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->


<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

<!-- Fin Scripts -->

<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->

	<img src="img/pagevinweb2.jpg" width="100%" >

	<a href="http://localhost/mambo/web/vin/img/pagevinweb2.jpg"  download="Infographie_Mambo_Canaille"> 
	<img src="img/telecharger.png" width="200px"> </a>
 
 
 
 <!-- bouton valider + enregistrement bdd -->
 <form action="../default/page/recEtape.php" method="post">
		<input type="hidden" name="field" id="field" value="">
		<input type="hidden" name="value" id="value" value="">
		<input type="hidden" name="etape" id="etape" value="<?php echo $dossier; ?>">
		<!-- Si tout est ok, mettre la variable $validate à true -->
		<input type="hidden" name="validate" id="validate" value="true">
        <div class="box">
        <button type="submit" class="btn btn-success" id="valide" name="valide" value="valide">VALIDER</button>     
        </div>
 </form>
       

<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>