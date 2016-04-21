<?php
include('../default/page/start_header.php');
?>

<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
 <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

<!-- Fin Scripts -->

<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->   

<div class="row">
<div class="col-md-12">

<!-- box gauche jeu -->
<div id="gauche" class="col-md-4">
    <div id="actions">
    </div>
    <nav id="controls"></nav>
</div>
    
<!-- box jeu milieu  -->

<div class="col-md-4">
    <div id="jeu">
    <div id="game"></div>
    </div>
</div>

<!-- box bas -->
<div class="col-md-4">
    <div id="boutons">
        <div id="fleche">
            <img class="img-responsive" src="images/fleche.png"/>
        </div>
    </div>

<div id="valider"> <!-- AJOUTER LE CODE POUR LA VALIDATION -->
    <img src="images/valider.png"/>
</div>

<div id="recommencer">
    <a href="javascript:window.location.reload()">
        <img src="images/recommencer.png"/>
    </a>
</div>
    
    </div>
    </div>
    </div>




<script src="js/index.js"></script>

<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?> 


  
   
    

    
        





