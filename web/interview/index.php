<?php
include( '../default/page/start_header.php' );
?>
    <!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
    <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="fancybox/source/jquey.fancybox.css"/>


    <!-- fin CSS -->
<?php include( '../default/page/header.php' ); ?>

    <!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

    <script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../../vendor/fancybox/source/jquery.fancybox.js"></script>
    <script type="text/javascript" src="gaspacho.js"></script>

    <!-- Fin Scripts -->


<?php include( '../default/page/end_header.php' ); ?>


    <!-- Place ici ton contenu -->

    <div class="wrap">
        <div class="conetnt">


            <div class="container-fluid">

                <div class="row-fluid">

                    <div id="container" class="col-sm-12 col-md-12 col-lg-12">

                        <h1>Rencontez Juan Carlos Méndez Guédez !</h1>

                          

                        

                    </div><!--container-->

                    <div id="container" class="col-sm-12 col-md-12 col-lg-12">

                         <!-- taille en 16/9 -->
                        <div class="embed-responsive embed-responsive-16by9">
                           <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/pYf5deeiPf4" width="300" height="150"></iframe>
                        </div>
                        

                    </div>


                     <div id="container" class="col-sm-12 col-md-12 col-lg-12">

                        <div class="row-fluid">  
                            <div id="base container" class="col-sm-12 col-md-12 col-lg-12">
                              

                                <div class="col-sm-6 col-md-6 col-lg-6"><img
                                        id="S37" src="" alt=""/>
                                    <p class="text-center">Question 1</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6"><img
                                        id="S38" src="" alt=""/>
                                    <p class="text-center">Question 2</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6"><img
                                        id="S39" src="" alt=""/>
                                    <p class="text-center">Question 3</p></div>

                                  
                            </div>
                        </div> 
                    

                </div>

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