<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->

<link rel="stylesheet" type="text/css" href="style.css">

<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->

<div class="carreaux"> </div>
<div class="container">
	<div class="background">

		<div class="icone d_videos" data-window="f_videos">

		</div>

		<div class="icone d_musiques" data-window="f_musiques">

		</div>

		<div class="icone d_admirateurs" data-window="f_admirateurs">

		</div>

		<div class="barre">

			<div class="internet">
				
			</div>

			<div class="player">

			</div>

			<div class="dossier_simple">

			</div>

		</div>

		<div class="demarrer">

		</div>

		<div class="window f_videos" id="f_videos" style="display:none;">

			<div class="window-head b_videos">

				<div class="bouton_fermer1" onclick="javascript:visibilite('f_videos'); return false;" >

				</div>

			</div>

			<div class="video_1">

			</div>

			<div class="video_2">

			</div>

			<div class="video_3">

			</div>

			<div class="video_4">

			</div>

			<div class="video_5">

			</div>

			<div class="video_6">

			</div>

		</div>

		<div class="window f_musiques" id="f_musiques" style="display:none;">

			<div class="window-head b_musiques">

				<div class="bouton_fermer2" onclick="javascript:visibilite('f_musiques'); return false;">

				</div>

			</div>

			<div class="musique_1">

			</div>

			<div class="musique_2">

			</div>

			<div class="musique_3">

			</div>

			<div class="musique_4">

			</div>

			<div class="musique_5">

			</div>

			<div class="musique_6">

			</div>

			<div class="musique_7">

			</div>

			<div class="musique_8">

			</div>

			<div class="musique_9">

			</div>

			<div class="musique_10">

			</div>

			<div class="musique_11">

			</div>

			<div class="musique_12">

			</div>

			<div class="musique_13">

			</div>
			
			<div class="musique_14">

			</div>

			<div class="musique_15">

			</div>
		</div>

		<div class="f_admirateurs">

			<div class="b_admirateurs">

				<div class="bouton_fermer3">

				</div>

			</div>

		</div>


	</div>
</div>
<script>
	$(function () {
		$('.icone').draggable();
		$('.window').draggable({handle: '.window-head',
  			containment: [270,80,720,430]
		});
	});


	$('.icone').on('dblclick',function(event) {

event.preventDefault();

var window = $(this).attr('data-window');

$('.'+window).fadeIn();

	});

/* test disparition  */

function visibilite(thingId)
{
var targetElement;
targetElement = document.getElementById(thingId) ;
if (targetElement.style.display == "none")
{
targetElement.style.display = "" ;
} else {
targetElement.style.display = "none" ;
}
}

/* test disparition arthur */

	/* $('.bouton_fermer1').on('onlclick',function(event) {

event.preventDefault();

var window = $(this).attr('data-window');

$('.'+window).fadeOut();

	}); */

</script>


<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>
























