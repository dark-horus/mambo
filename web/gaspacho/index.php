<?php
include( '../default/page/start_header.php' );
?>
    <!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
    <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="style.css">
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
        <div class="content">


            <div class="container-fluid">

                <div class="row-fluid">

                    <div id="container" class="col-sm-6 col-md-6 col-lg-6">

                        <div class="row-fluid">
                            <div id="base container" class="col-md-offset-1 col-md-11" style="margin-bottom:30px;">
                                <h2 style=color:#B54643;>Base</h2>
                                <p>(choisir une base)</p>

                                <div class="col-sm-4 col-md-4 col-lg-4 ingredient" onclick="afficher(this,'base','tomate');"><img
                                        id="S37" src="images/tomate_test.png" alt=""/>
                                    <p class="text-center">Tomate</p></div>
                                <div class="col-sm-4 col-md-4 col-lg-4  ingredient" onclick="afficher(this,'base','potiron');"><img
                                        id="S38" src="images/potiron_test.png" alt=""/>
                                    <p class="text-center">Potiron</p></div>
                                <div class="col-sm-4 col-md-4 col-lg-4 ingredient" onclick="afficher(this,'base','lentille');"><img
                                        id="S39" src="images/lentille_test.png" alt=""/>
                                    <p class="text-center">Lentille</p></div>

                                       <!-- <div class="col-sm-6 col-md-6 col-lg-6 ingredient"><img 
                                         src="images/yo.png" alt=""/> 
                                     <p class="text-center" style="opacity:0;">yooo</p></div> -->
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div id="legumes container" class="col-md-offset-1 col-md-11" style="margin-bottom:30px;">
                                <h2 style=color:#B54643;>Légumes</h2>
                                <p>(choisir deux légumes)</p>

                                <div class="col-sm-6 col-md-6 col-lg-6  ingredient" onclick="afficher(this,'legumes','concombre');">
                                    <img id="S2" src="images/concombre_test.png" alt=""/>
                                    <p class="text-center">Concombre</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6  ingredient" onclick="afficher(this,'legumes','poivron');">
                                    <img id="S3" src="images/poivron_test.png" alt=""/>
                                    <p class="text-center">Poivron</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6  ingredient" onclick="afficher(this,'legumes','chou_fleur');">
                                    <img id="S4" src="images/choux_fleur_test.png" alt=""/>
                                    <p class="text-center">Chou-fleur</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'legumes','poireau');"><img
                                        id="S5" src="images/poireau_test.png" alt=""/>
                                    <p class="text-center">Poireau</p></div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div id="condiments container" class="col-md-offset-1 col-md-11" style="margin-bottom:30px;">
                                <h2 style=color:#B54643;>Condiments</h2>
                                <p>(choisir quatres condiments)</p>

                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'condiments','oignon');">
                                    <img id="S9" src="images/oignon_test.png" alt=""/>
                                    <p class="text-center">Oignon</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'condiments','ail');"><img
                                        id="S10" src="images/ail_test.png" alt=""/>
                                    <p class="text-center">Ail</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'condiments','basilic');">
                                    <img id="S11" src="images/basilic_test.png" alt=""/>
                                    <p class="text-center">Basilic</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'condiments','piment');">
                                    <img id="S12" src="images/piment_test.png" alt=""/>
                                    <p class="text-center">Piment</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'condiments','capres');">
                                    <img id="S13" src="images/capres_test.png" alt=""/>
                                    <p class="text-center">Capres</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient"
                                     onclick="afficher(this,'condiments','pois_chiche');">
                                    <img id="S14" src="images/pois_chiche_test.png" alt=""/>
                                    <p class="text-center">Pois-chiche</p>
                                </div>
                            </div>

                        </div>

                        <div class="row-fluid">
                            <div id="assaisonement container" class="col-md-offset-1 col-md-11" style="margin-bottom:30px;">
                                <h2 style=color:#B54643;>Assaisonnement</h2>
                                <p>(choisir cinq assaisonements)</p>

                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient"
                                     onclick="afficher(this,'assaisonement','citron');"
                                ><img id="S25"
                                      src="images/citron_test.png"
                                      alt=""/>
                                    <p class="text-center">Citron</p></div>

                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient"
                                     onclick="afficher(this,'assaisonement','vinaigre');"
                                ><img id="S25"
                                      src="images/vinaigre_test.png"
                                      alt=""/>
                                    <p class="text-center">Vinaigre</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient"
                                     onclick="afficher(this,'assaisonement','huile_olive');">
                                    <img id="S26"
                                         src="images/huile_olive_test.png"
                                         alt=""/>
                                    <p class="text-center">Huile d'olive</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient"
                                     onclick="afficher(this,'assaisonement','poivre');">
                                    <img id="S27" src="images/poivre_test.png"
                                         alt=""/>
                                    <p class="text-center">Poivre</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'assaisonement','sel');">
                                    <img id="S28" src="images/sel_test.png" alt=""/>
                                    <p class="text-center">Sel</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'assaisonement','curry');">
                                    <img id="S29" src="images/curry_test.png" alt=""/>
                                    <p class="text-center">Curry</p></div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div id="temperature container" class="col-md-offset-1 col-md-11" style="margin-bottom:30px;">
                                <h2 style=color:#B54643;>Température</h2>
                                <p>(un choix possible)</p>

                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'temperature','chaud');">
                                    <img id="S35" src="images/chaud2.png" alt=""/>
                                    <p class="text-center">Chaud</p></div>
                                <div class="col-sm-6 col-md-6 col-lg-6 ingredient" onclick="afficher(this,'temperature','froid');">
                                    <img id="S36" src="images/froid_2.png" alt=""/>
                                    <p class="text-center">Froid</p></div>
                            </div>
                        </div>

                    </div><!--container-->

                    <div class="col-sm-5 col-md-5 col-lg-5 pull-right side">
                        <h2>Saurez-vous préparer le gaspacho de Henry ?</h2>

                        <p>Composez votre gaspacho avec les ingrédients disponibles, en espérant qu'il plaira à Henry...</p>
                        <div id="bol">

                        </div>

                        <div id="envoi">
                            <input type="image" src="images/gouter.png" onclick="test();"></button>
                            <input type="image" src="images/vider.png" onclick="empty();"></button>
                        </div>
                    </div><!--side-->

                </div>

            </div>

        </div>
    </div>

    <a class="error fancybox" href="#error"></a>
    <a class="errorRecipe fancybox" href="#errorRecipe"></a>
    <a class="valid fancybox" href="#valid"></a>

    <div style="display:none" id="error">
        <h2>Il manque des ingrédients, vérifiez les dosages !</h2>
        <a href="index.php"><img src="images/recommencer.png" alt="recommencer"/></a>

    </div>
    <div style="display:none" id="errorRecipe">
        <h2>Oups, il semble y avoir un erreur dans les ingrédients !</h2>
                <a href="index.php"><img src="images/recommencer.png" alt="recommencer"/></a>

    </div>
</br>
    <div style="display:none" id="valid">
                                
        <h2>Félicitations votre gaspacho semble plaire à Henry !</h2>

    
    </br>

<video width="1024" height="768" controls src="images/gaspacho.mp4">Ici la description alternative</video>


        
        
    

    </div>

<!--[if lte IE 6 ]>
    <embed src="http://www.youtube.com/v/_etwz7NkemE&hl=fr" type="application/x-shockwave-flash" wmode="transparent" width="425" height="355"></embed>
<![endif]-->

<?php
include( '../default/page/footer.php' );
?>