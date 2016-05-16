<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
<link href="mambo-ours.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../default/page/CSS/font.css">


<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->



<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->

<div id="image">

<img class="blason" src="image/blason2.png" border="0" usemap="#mapelisa" alt="blasonmadrid" />

<map name="mapelisa">

	<!-- Partie Arbre vert -->
  <area shape="poly" coords="154,233,274,225,297,294,221,290" class="fancybox" data-fancybox-type="iframe" href="places.html" alt="Madrid et ses places emblématiques" title="Madrid et ses places emblématiques" />
  
  <!-- Partie Couronne jaune -->
  <area shape="rect" coords="29,23,394,149" class="fancybox" data-fancybox-type="iframe" href="caudillo.html" title="Madrid et son caudillo" />
  
  <!-- Partie Ours marron -->
    <area shape="poly" coords="209,304,254,303,287,394,220,430,151,394" class="fancybox" data-fancybox-type="iframe" href="arbre.html" title="Madrid, l’arbre et la bête" />
  
  <!-- Partie Bordure bleu -->
  
  		<!-- rectangle top -->
  <area shape="rect" coords="76,163,359,218" class="fancybox" data-fancybox-type="iframe" href="guerre.html" title="Madrid et la guerre civile" />
  
  		<!-- rectangle right -->
   <area shape="rect" coords="312,206,369,481" class="fancybox" data-fancybox-type="iframe" href="guerre.html" title="Madrid et la guerre civile" />
   
        <!-- rectangle down -->
 	  <area shape="poly" coords="308,475,310,391,221,438,133,389,112,481" class="fancybox" data-fancybox-type="iframe" href="guerre.html" title="Madrid et la guerre civile" />
      
        <!-- rectangle left -->
     <area shape="rect" coords="71,214,127,467" class="fancybox" data-fancybox-type="iframe" href="guerre.html" title="Madrid et la guerre civile" />
  
  
</map>

</div>





<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>