<?php
include('../default/page/header.php');
?>
<!-- Place en dessous ton contenu + tes liens vers CSS et JS ! -->

  <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Fancy-->
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../vendor/fancybox/source/jquery.fancybox.css">
        <script type="text/javascript" src="../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>

        <script type="text/javascript" src="../vendor/fancybox/source/jquery.fancybox.js"></script>
        <script type="text/javascript" src="../vendor/fancybox/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="../vendor/fancybox/source/jquery.mousewhell.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
        </script>
    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <!-- CSS -->
    <link href="css/lapin.css" rel="stylesheet" type="text/css">

    </head>
    <html>
    <body>
   <!-- <h1>Serez-vous le nouveau conquistador culinaire de mambo canaille ?</h1>-->
        
   <a class="fancybox" data-fancybox-type="iframe" href="http://www.marmiton.org/recettes/recette_gaspacho_92502.aspx" id="recette">
    <div class="marker" id="m1">

    </div>
    </a> 
    <div class="marker"id="m2">

    </div>
        <div class="marker"id="m3">

    </div>
        <div class="marker"id="m4">

    </div>
    <div class="ajout">

        <form>
              <a class="fancybox" data-fancybox-type="iframe" href="recette.php" id="recette">

    <button type="button" class="btn btn-warning">Ajouter une recette</button>

              </a>
        </form>
    </div>
    </body>
    </html>
<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>