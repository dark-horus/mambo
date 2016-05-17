<?php
include('../default/page/start_header.php');
?>

<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../default/page/CSS/font.css">

<!-- fin CSS -->
<?php include( '../default/page/header.php' ); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

<!-- Fin Scripts -->

<?php include( '../default/page/end_header.php' ); ?>

<!-- Place ici ton contenu -->

<div class="row">
    <div class="col-md-12">

        <!-- box gauche jeu -->
        <div id="gauche" class="col-md-offset-1 col-md-2">
            <div id="actions"></div>
            <h3 class="text-center">Vos actions</h3>
            <nav id="controls"></nav>
            <div id="fleche">
                <img class="img-responsive" src="images/fleche.png"/>
            </div>
        </div>

        <!-- box jeu milieu  -->

        <div class="col-md-4">
            <div id="jeu">
                <div id="game"></div>
            </div>
        </div>

        <!-- box bas -->
        <div class="col-md-4">
			
            <div id="valider" style="visibility: hidden;"> <!-- AJOUTER LE CODE POUR LA VALIDATION - Si la personne a la bonne combinaison et clique sur “validez” alors l’étape est validée-->
                <?php if(isset($res['iduser'])){ ?>
				<form action="../default/page/recEtape.php" method="post">
				<input type="hidden" name="field" id="field" value="">
				<input type="hidden" name="value" id="value" value="">
				<input type="hidden" name="etape" id="etape" value="<?php echo $dossier; ?>">
				<!-- Si tout est ok, mettre la variable $validate à true -->
				<input type="hidden" name="validate" id="validate" value="true">
		        <input type="submit" class="validera" name="valide" value="">  
				</form>
				<?php } ?>
            </div>
			
            <div id="recommencer">
                <!-- <a href="javascript:clearGameSlots()"> EN ATTENTE DE CORRECTION -->
                    <a href="javascript:window.location.reload()">
                    <img src="images/recommencer.png"/>
                </a>
            </div>

        </div>
    </div>
</div>



<!-- Fin du contenu -->
<?php
include( '../default/page/footer.php' );
?> 
<script src="js/index.js"></script>
  
   
<!--Copyright (c) 2016 by Neil McCallion (http://codepen.io/njmcode/pen/Myapmr)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.-->





