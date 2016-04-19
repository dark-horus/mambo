<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
<link rel="stylesheet" href="css/example.css"  />


<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

 <script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../../vendor/jInvertScroll/dist/js/jquery.jInvertScroll.min.js"></script>
    <script type="text/javascript">
    (function($) {
        $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
            {
            height: 60000,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
                console.log(percent);
            }
        });
    }(jQuery));
    </script>

<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->

    
<div class="texture scroll">
        <img src="images/Fond1.png" alt="" />
    </div>

 <div class="imgdercity scroll">
        <img src="images/imgdercity1.png" alt="" />
</div> 
          <div class="imgdevcity scroll">
        <img src="images/imgdevcity.png" alt="" />
    </div>
    
        <div class="city scroll">
        <img src="images/city1.png" alt="" />
</div>
    
            <div class="ferrari scroll">
        <img src="images/drawferrari.png" alt="" />
</div>
    



<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>