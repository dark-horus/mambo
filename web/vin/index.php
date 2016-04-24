<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->

	<style>
	.tele{
		width: 20%;
		margin-left: auto;
		margin-right: auto;
		z-index:8;
		}
	
	.vali{
		width: 16%;
		height: 100%;
		background-image: url(img/valider.png);
		background-repeat: no-repeat;
		background-position: center;
		background-color: white;
		border: none;
		outline: none;
		margin-bottom: 5%;
		margin-left: auto;
		margin-right: auto;
		padding: 2%;
		z-index:8;
		}
		
	</style>

<!-- fin CSS -->


<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

<!-- Fin Scripts -->

<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->

	
		<img src="img/pagevinweb2.jpg" width="100%" >
		
		</br>
		</br>
		<div class="tele">
			<a  href="http://localhost/mambo/web/vin/img/pagevinweb2.jpg" download="Infographie_Mambo_Canaille"> 
			<img src="img/telecharger.png" width="100%"> </a>
		</div>
		</br>
	

	<!-- bouton valider + enregistrement bdd -->
	<form action="../default/page/recEtape.php" method="post">
		<input type="hidden" name="field" id="field" value="">
		<input type="hidden" name="value" id="value" value="">
		<input type="hidden" name="etape" id="etape" value="<?php echo $dossier; ?>">
		<!-- Si tout est ok, mettre la variable $validate à true -->
		<input type="hidden" name="validate" id="validate" value="true">
		
        <div>
			<center> <button type="submit" class="vali" id="valide" name="valide" ></button>  </center>   
        </div>
	</form>

       

<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>

<link rel="stylesheet" href="../default/page/CSS/font.css">