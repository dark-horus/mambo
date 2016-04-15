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
<htlm>
    
<div id="fleche">
    <img src="images/fleche.png"/>
</div> 

<div id="game"> </div>
<nav id="controls"></nav>

<div id="recommencer">
    <a href="javascript:window.location.reload()">
        <img src="images/recommencer.png"/>
    </a>
</div>

<div id="valider"> <!-- AJOUTER LE CODE POUR LA VALIDATION -->
        <img src="images/valider.png"/>
</div>
    
<htlm>


<script src="js/index.js"></script>

<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?> 

  
   
    

    
        





