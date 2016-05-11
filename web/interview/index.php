<?php
include( '../default/page/start_header.php' );
?>
    <!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
    <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="fancybox/source/jquey.fancybox.css"/>
    <link rel="stylesheet" href="boutons/styles.css"/>



    <!-- fin CSS -->
<?php include( '../default/page/header.php' ); ?>

    <!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

    <script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../../vendor/fancybox/source/jquery.fancybox.js"></script>

    <!-- Fin Scripts -->


<?php include( '../default/page/end_header.php' ); ?>


    <!-- Place ici ton contenu -->

    <div class="wrap">
        <div class="content">


            <div class="container-fluid">


                    <div id="container" class="col-sm-12 col-md-12 col-lg-12" style=margin-bottom:20px;>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                        <h1 style=font-size:25px;>Rencontrez Juan Carlos Méndez Guédez !</h1>
                    </div>

                          

                        

                    </div><!--container-->

                    <div id="container" class="col-sm-12 col-md-12 col-lg-12 col-sm-offset-3 col-md-offset-3 col-md-offset-3 col-lg-offset-3">

                   <video controls="controls" autoplay="true">
  <source src="video/Q1.mp4" type="video/mp4" />
  <source src="video/" type="video/webm" />
  <source src="video/" type="video/ogg" />
  J'ai rien trouvé wesh
</video>

                    </div>

<section>
                     <div id="container" class="col-sm-12 col-md-12 col-lg-12">

                        <div class="row-fluid">  
                              
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                <button class='lined thin' onclick="location.href='questions2.php'">Vous êtes-vous inspiré de personnes réelles pour les personnages du livre ?</button>
                            </div>

                             <div class="col-sm-12 col-md-4 col-lg-4">
                                <button class='lined thin' onclick="location.href='questions2.php'">A quoi aurait ressemblé le roman si les personnages principaux étaient des femmes ?</button>
                            </div>

                             <div class="col-sm-12 col-md-4 col-lg-4">
                                <button class='lined thin' onclick="location.href='questions2.php'">Quel est le rôle et la place du chien Tarzan dans l’histoire ?</button>
                            </div>

                            
                        </div> 
                    

                </div>

            </section>

            </div>

        </div>
    </div>

    <a class="error fancybox" href="#error"></a>
    <a class="errorRecipe fancybox" href="#errorRecipe"></a>
    <a class="valid fancybox" href="#valid"></a>

    <div style="display:none" id="error">
        ERREUR !
    </div>
    <div style="display:none" id="errorRecipe">
        ERREUR RECETTE !
    </div>
</br>
    <div style="display:none" id="valid">
        
        <h2>Félicitations votre gaspacho semble plaire à Henry !</h2>
    
    </br>

<object type="application/x-shockwave-flash" width="540px" height="360px" data="https://www.youtube.com/watch?v=4GrHsKmEWTE&spfreload=10">
        <param name="movie" value="http://www.youtube.com/v/_etwz7NkemE&hl=fr" />
        <param name="wmode" value="transparent" />
    </object>

    </div>

<!--[if lte IE 6 ]>
    <embed src="http://www.youtube.com/v/_etwz7NkemE&hl=fr" type="application/x-shockwave-flash" wmode="transparent" width="425" height="355"></embed>
<![endif]-->

<?php
include( '../default/page/footer.php' );
?>