
<?php 
session_start();
if (!isset($_SESSION['id'])){
	header('location: ../../index.php');
}
else {
	?>
<!-- bouton valider + enregistrement bdd -->
	<form action="../default/page/recEtape.php" method="post">
		<input type="hidden" name="field" id="field" value="">
		<input type="hidden" name="value" id="value" value="">
		<input type="hidden" name="etape" id="etape" value="<?php echo $dossier; ?>">
		<!-- Si tout est ok, mettre la variable $validate à true -->
		<input type="hidden" name="validate" id="validate" value="true">
		
        <div>
					<button type="submit" class="vali" id="valide" name="valide" >
						<img src="img/valider.png" onclick="javascript:lafonctiondeRomane();" alt="Texte en gras" style="cursor:pointer;"></img>

					</button>    
        </div>
	</form>
<?php } ?>