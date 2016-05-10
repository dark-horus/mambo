<?php 
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
<link rel="stylesheet" href="style.css">

<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

<script>
			
			
			
			<?php if(!isset($_SESSION['id'])){ ?>
			
			$(document).ready(function() { 
				
							
					$(".fancybox").fancybox().trigger('click');
					
						}
					); 
			
			
			
			<?php }?>
</script>

<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->
 <!-- Set your background image for this header on the line below. -->
 <div id="haut_page" class="col-lg-12 col-md-12 col-xs-12">

    <div class="col-lg-2 col-lg-offset-5 col-md-5 col-md-offset-4 col-xs-6 col-xs-offset-3">
        <h1 id="text_accueil">Zinnia Editions<br>Présente<br>Mambo Canaille</h1>
    </div>
    <!-- Main Content -->
    <a class="fancybox" data-fancybox-type="iframe" href="../default/page/index.php"></a>

        <div id="top_site"class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-10 col-xs-12">
             <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/123630710?color=1da7bf" width="100%" height="395px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 col-lg-offset-3 col-md-10 col-xs-12">
             <p>Vous êtes en train de lire <em>Mambo Canaille</em> ? <br/> 
                Parcourez au fil d’icônes l’univers fantasque de Juan Carlos Méndez Guédez,
                 déambulez dans les rues de Madrid, créez vos recettes, 
                 devenez à votre tour écrivain, évadez-vous au delà des frontières du livre...</p>
            </div>
        </div>
</div>
    



     <!--Content Mambo Canaille-->
          <div id="bas_page"class="co-lg-12 col-md-12 col-xs-12">
                    <div id="map">
                        <img src="../default/page/img/ecranmapOK.jpg" style="width:100%;"></img>
                    </div>
                    
                    <!-- Bouton scroll mais enfet on verra si on le garde ou pas
                    <div class="col-lg-4 col-md-4" id="bouton_soutenance">

                        <button id="next" type="button" class="btn btn-success">Next</button>
                    </div>
                    -->
            </div>

            <footer class="footer_provisoir">
              <div class="container">
                <p class="text-muted">Mentions Légales</p>
              </div>
            </footer>
    
</div>



<script type="text/javascript"src="../default/page/js/etape.js"></script>


<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>


    
    

