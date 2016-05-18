

<?php include( '../default/page/start_header.php' ); ?>
<link rel="stylesheet" type="text/css" href="lapin.css">
<?php include( '../default/page/header.php' ); ?>
<?php include( '../default/page/end_header.php' ); ?>

    <html>
        <body id="lapin">

            <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox();
            });
            </script>
            
       <!-- <h1>Serez-vous le nouveau conquistador culinaire de mambo canaille ?</h1>-->
            
            <img src="./img/backgfinal.jpg" alt="" usemap="#Map" />
<map name="Map" id="Map">
    <area class="fancybox" data-fancybox-type="iframe" href="img/recette_lapin.jpg" id="recette" shape="poly" coords="630,309,574,373,637,478,691,357" />
    <area class="fancybox" data-fancybox-type="iframe" href="img/recette_potaje.jpg" id="recette" shape="poly" coords="786,404,706,467,785,563,851,437" />
    <area class="fancybox" data-fancybox-type="iframe" href="img/recette_tapas.jpg" id="recette" shape="poly" coords="692,646,629,726,690,821,757,716" />
    <area class="fancybox" data-fancybox-type="iframe" href="img/recette_tortilla.jpg" id="recette" shape="poly" coords="480,400,414,454,475,578,538,457" />
    <area class="fancybox" data-fancybox-type="iframe" href="img/recette_gaspa.jpg" id="recette" shape="poly" coords="1231,237,1162,297,1240,420,1299,299" />
</map>
        </body>
        <!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>
    </html>
