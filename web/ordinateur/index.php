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



	<div class="background">

		<div class="icone d_videos" data-window="f_videos">

		</div>

		<div class="icone d_musiques" data-window="f_musiques">

		</div>

		<div class="icone d_admirateurs" data-window="f_admirateurs">

		</div>

		<div class="barre">

		</div>

		<div class="demarrer">

		</div>

		<div class="window f_videos">

			<div class="window-head b_videos">

				<div class="bouton_fermer1">

				</div>

			</div>
			
			<ul>
			<li>
				<div class="video_1">

				</div>
			</li>
			<li>
			<div class="video_2">
			
			</div>
			</li>
			<li>
				<div class="video_3">

				</div>
			</li>
			</ul>
			

		<div class="window f_musiques">

			<div class="window-head b_musiques">

				<div class="bouton_fermer2">

				</div>

			</div>

			<div class="musique_1">

			</div>

			<div class="musique_2">

			</div>

			<div class="musique_3">

			</div>
		</div>

		<div class="f_admirateurs">

			<div class="b_admirateurs">

				<div class="bouton_fermer3">

				</div>

			</div>

		</div>


	</div>

<script>
	$(function () {
		$('.icone').draggable();
		$('.window').draggable({handle: '.window-head',
  			containment: [0,0,470,400]
		});
	});


	$('.icone').on('dblclick',function(event) {

event.preventDefault();

var window = $(this).attr('data-window');

$('.'+window).fadeIn();

	});

	$('.bouton_fermer1').on('onlclick',function(event) {

event.preventDefault();

var window = $(this).attr('data-window');

$('.'+window).fadeOut();

	});
</script>


<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>
























