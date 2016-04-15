<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
<link href="mambo-ours.css" rel="stylesheet" type="text/css">


<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->



<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->

<img class="blason" src="image/blason.png" border="0" usemap="#panneaux" />
<map name="panneaux">

	<!-- Partie Arbre vert -->
  <area shape="poly" coords="171,262,291,254,314,323,238,319,165,330" class="fancybox" data-fancybox-type="iframe" href="places.html" title="Madrid et ses places emblématiques" />
  
  <!-- Partie Couronne jaune -->
  <area shape="rect" coords="50,46,415,172" class="fancybox" data-fancybox-type="iframe" href="caudillo.html" title="Madrid et son caudillo" />
  
  <!-- Partie Ours marron -->
    <area shape="poly" coords="225,336,270,335,303,426,236,462,167,426" class="fancybox" data-fancybox-type="iframe" href="arbre.html" title="Madrid, l’arbre et la bête" />
  
  <!-- Partie Bordure bleu -->
  
  		<!-- rectangle top -->
  <area shape="rect" coords="89,185,372,240" class="fancybox" data-fancybox-type="iframe" href="guerre.html" title="Madrid et la guerre civile" />
  
  		<!-- rectangle right -->
   <area shape="rect" coords="319,238,376,513" class="fancybox" data-fancybox-type="iframe" href="guerre.html" title="Madrid et la guerre civile" />
   
        <!-- rectangle down -->
 	  <area shape="poly" coords="320,513,322,429,233,476,145,427,124,519" class="fancybox" data-fancybox-type="iframe" href="guerre.html" title="Madrid et la guerre civile" />
      
        <!-- rectangle left -->
     <area shape="rect" coords="87,239,143,492" class="fancybox" data-fancybox-type="iframe" href="guerre.html" title="Madrid et la guerre civile" />
  
  
</map>





<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>