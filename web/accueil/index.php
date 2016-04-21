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
 <div id="haut_page" class="col-lg-12">
    <!-- Main Content -->
	<!-- //placer le titre correctement et enlever les br -->
	<br>
	<br>
	<br>
	<h1>Mambo canaille</h1>
    <a class="fancybox" data-fancybox-type="iframe" href="../default/page/index.php"></a>

        <div id="top_site"class="row">
            <div class="col-lg-8 col-lg-offset-0 col-md-6 col-md-offset-0">
            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/123630710?color=1da7bf" width="720" height="520" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 col-lg-offset-0 col-md-6 col-md-offset-0">
                <p>Vous êtes en train de lire Mambo Canaille ? <br/> Parcourez au fil d’icônes l’univers         fantasque de Juan Carlos Mendez Guédez, déambulez dans les rues de Madrid, créez vos recettes, devenez à votre tour écrivain, évadez-vous au delà des frontières du livre...</p>
            </div>
        </div>
        <!-- Down to map -->

    <div> <p>down button</p></div>
</div>
    



     <!--Content Mambo Canaille-->
      <div class="col">
            <div id="map_container" class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0">
                <div id="map">
                    
                </div>
                <br>
                <div class="col-lg-2 col-lg-offset-5 col-md-12 col-md-offset-1">

                <button id="next" type="button" class="btn btn-success">Next</button>
                </div>
            </div>
        </div>
    
</div>



<script type="text/javascript"src="../default/page/js/etape.js"></script>
<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>


    
    

