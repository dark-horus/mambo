<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->


<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="html2canvas.js"></script>



<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->
<div class="container" id="body_fictif">

	<script type="text/javascript">
	

	$(function(){
		$('#boutton').click(function(){

          html2canvas([ document.getElementById('slider_chien') ],{
          onrendered: function(canvas) 


          {
          var canvasData = canvas.toDataURL();
          window.open(canvas.toDataURL());
      		}
});
      })}); 




	</script>

	<div id="portraits">
		<div id="henry">
			<img class="img-responsive" src="img/henry.png"/>
		</div>
		<div id="simao">
			<img class="img-responsive" src="img/simao.png"/>
		</div>
		<div id="alejandro">
			<img class="img-responsive" src="img/alejandro.png"/>
		</div>

	</div>

<!-- SLIDER DES TETE-->
<div class="col-md-10" id="slider_chien">
	<!--Cheveux-->
	<div class="col-md-10 col-md-offset-2" id="slider1">
		<div id="cheveux" class="carousel slide" data-pause="pause" style="width: 40%; margin: 0 auto">
		  <!-- Indicators -->
		  <ol class="pas_defini">
		    <li data-target="#cheveux" data-slide-to="0"></li>
		    <li data-target="#cheveux" data-slide-to="1"></li>
		    <li data-target="#cheveux" data-slide-to="2"></li>
		    <li data-target="#cheveux" data-slide-to="3"></li>
		    <li data-target="#cheveux" data-slide-to="4"></li>
		    <li data-target="#cheveux" data-slide-to="5"></li>
		    <li data-target="#cheveux" data-slide-to="6"></li>
		    <li data-target="#cheveux" data-slide-to="7"></li>
            <li data-target="#cheveux" data-slide-to="8"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/Cheveux/C_1.png" alt="C_1">
		    </div>

		    <div class="item">
		      <img src="img/Cheveux/C_2.png" alt="C_2">
		    </div>

		    <div class="item">
		      <img src="img/Cheveux/C_3.png" alt="C_3">
		    </div>
              
		    <div class="item active">
		      <img src="img/Cheveux/C_4.png" alt="C_4">
		    </div>

		    <div class="item">
		      <img src="img/Cheveux/C_5.png" alt="C_5">
		    </div>

		    <div class="item">
		      <img src="img/Cheveux/C_6.png" alt="C_6">
		    </div>
              
		    <div class="item">
		      <img src="img/Cheveux/C_7.png" alt="C_7">
		    </div>

		    <div class="item">
		      <img src="img/Cheveux/C_8.png" alt="C_8">
		    </div>
              
              <div class="item">
		      <img src="img/Cheveux/C_9.png" alt="C_9">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#cheveux" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Precedent</span>
		  </a>
		  <a class="right carousel-control" href="#cheveux" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Suivant</span>
		  </a>
		</div>
	</div>

<!--Yeux-->
	<div class="col-md-10 col-md-offset-2" id="slider2">
		<div id="Yeux" class="carousel slide" data-pause="pause" style="width: 40%; margin: 0 auto">
		  <!-- Indicators -->
		  <ol class="pas_defini">
		    <li data-target="#Yeux" data-slide-to="0"></li>
		    <li data-target="#Yeux" data-slide-to="1"></li>
		    <li data-target="#Yeux" data-slide-to="2"></li>
		    <li data-target="#Yeux" data-slide-to="3"></li>
		    <li data-target="#Yeux" data-slide-to="4"></li>
		    <li data-target="#Yeux" data-slide-to="5"></li>
		    <li data-target="#Yeux" data-slide-to="6"></li>
		    <li data-target="#Yeux" data-slide-to="7"></li>
            <li data-target="#Yeux" data-slide-to="8"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/Yeux/Y_1.png" alt="Y_1">
		    </div>

		    <div class="item">
		      <img src="img/Yeux/Y_2.png" alt="Y_2">
		    </div>

		    <div class="item">
		      <img src="img/Yeux/Y_3.png" alt="Y_3">
		    </div>
              
		    <div class="item">
		      <img src="img/Yeux/Y_4.png" alt="Y_4">
		    </div>

		    <div class="item">
		      <img src="img/Yeux/Y_5.png" alt="Y_5">
		    </div>

		    <div class="item">
		      <img src="img/Yeux/Y_6.png" alt="Y_6">
		    </div>
              
		    <div class="item">
		      <img src="img/Yeux/Y_7.png" alt="Y_7">
		    </div>

		    <div class="item">
		      <img src="img/Yeux/Y_8.png" alt="Y_8">
		    </div>
              
            <div class="item">
		      <img src="img/Yeux/Y_9.png" alt="Y_9">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#Yeux" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Precedent</span>
		  </a>
		  <a class="right carousel-control" href="#Yeux" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Suivant</span>
		  </a>
		</div>
	</div>

<!--Nez-->
	<div class="col-md-10 col-md-offset-2" id="slider3">
		<div id="Nez" class="carousel slide" data-pause="pause" style="width: 40%; margin: 0 auto">
		  <!-- Indicators -->
		  <ol class="pas_defini">
		    <li data-target="#Nez" data-slide-to="0"></li>
		    <li data-target="#Nez" data-slide-to="1"></li>
		    <li data-target="#Nez" data-slide-to="2"></li>
		    <li data-target="#Nez" data-slide-to="3"></li>
		    <li data-target="#Nez" data-slide-to="4"></li>
		    <li data-target="#Nez" data-slide-to="5"></li>
		    <li data-target="#Nez" data-slide-to="6"></li>
		    <li data-target="#Nez" data-slide-to="7"></li>
            <li data-target="#Nez" data-slide-to="8"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/Nez/N_1.png" alt="N_1">
		    </div>

		    <div class="item">
		      <img src="img/Nez/N_2.png" alt="N_2">
		    </div>

		    <div class="item">
		      <img src="img/Nez/N_3.png" alt="N_3">
		    </div>
              
		    <div class="item">
		      <img src="img/Nez/N_4.png" alt="N_4">
		    </div>

		    <div class="item">
		      <img src="img/Nez/N_5.png" alt="N_5">
		    </div>

		    <div class="item">
		      <img src="img/Nez/N_6.png" alt="N_6">
		    </div>
              
		    <div class="item">
		      <img src="img/Nez/N_7.png" alt="N_7">
		    </div>

		    <div class="item">
		      <img src="img/Nez/N_8.png" alt="N_8">
		    </div>
              
              <div class="item">
		      <img src="img/Nez/N_9.png" alt="N_9">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#Nez" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Precedent</span>
		  </a>
		  <a class="right carousel-control" href="#Nez" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Suivant</span>
		  </a>
		</div>
	</div>

	<!--Bouche-->
	<div class="col-md-10 col-md-offset-2" id="slider4">
		<div id="Bouche" class="carousel slide" data-pause="pause" style="width: 40%; margin: 0 auto">
		  <!-- Indicators -->
		  <ol class="pas_defini">
		    <li data-target="#Bouche" data-slide-to="0"></li>
		    <li data-target="#Bouche" data-slide-to="1"></li>
		    <li data-target="#Bouche" data-slide-to="2"></li>
		    <li data-target="#Bouche" data-slide-to="3"></li>
		    <li data-target="#Bouche" data-slide-to="4"></li>
		    <li data-target="#Bouche" data-slide-to="5"></li>
		    <li data-target="#Bouche" data-slide-to="6"></li>
		    <li data-target="#Bouche" data-slide-to="7"></li>
            <li data-target="#Bouche" data-slide-to="8"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/Bouche/B_1.png" alt="B_1">
		    </div>

		    <div class="item">
		      <img src="img/Bouche/B_2.png" alt="B_2">
		    </div>

		    <div class="item">
		      <img src="img/Bouche/B_3.png" alt="B_3">
		    </div>
              
		    <div class="item">
		      <img src="img/Bouche/B_4.png" alt="B_4">
		    </div>

		    <div class="item">
		      <img src="img/Bouche/B_5.png" alt="B_5">
		    </div>

		    <div class="item">
		      <img src="img/Bouche/B_6.png" alt="B_6">
		    </div>
              
		    <div class="item">
		      <img src="img/Bouche/B_7.png" alt="B_7">
		    </div>

		    <div class="item">
		      <img src="img/Bouche/B_8.png" alt="B_8">
		    </div>
              
              <div class="item">
		      <img src="img/Bouche/B_9.png" alt="B_9">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#Bouche" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Precedent</span>
		  </a>
		  <a class="right carousel-control" href="#Bouche" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Suivant</span>
		  </a>
		</div>
	</div>


	<!--Menton-->
	<div class="col-md-10 col-md-offset-2" id="slider5">
		<div id="Menton" class="carousel slide" data-pause="pause" style="width: 40%; margin: 0 auto">
		  <!-- Indicators -->
		  <ol class="pas_defini">
		    <li data-target="#Menton" data-slide-to="0"></li>
		    <li data-target="#Menton" data-slide-to="1"></li>
		    <li data-target="#Menton" data-slide-to="2"></li>
		    <li data-target="#Menton" data-slide-to="3"></li>
		    <li data-target="#Menton" data-slide-to="4"></li>
		    <li data-target="#Menton" data-slide-to="5"></li>
		    <li data-target="#Menton" data-slide-to="6"></li>
		    <li data-target="#Menton" data-slide-to="7"></li>
            <li data-target="#Menton" data-slide-to="8"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/Menton/M_1.png" alt="M_1">
		    </div>

		    <div class="item">
		      <img src="img/Menton/M_2.png" alt="M_2">
		    </div>

		    <div class="item">
		      <img src="img/Menton/M_3.png" alt="M_3">
		    </div>
		    <div class="item">
		      <img src="img/Menton/M_4.png" alt="M_4">
		    </div>

		    <div class="item">
		      <img src="img/Menton/M_5.png" alt="M_5">
		    </div>

		    <div class="item">
		      <img src="img/Menton/M_6.png" alt="M_6">
		    </div>
		    <div class="item">
		      <img src="img/Menton/M_7.png" alt="M_7">
		    </div>

		    <div class="item">
		      <img src="img/Menton/M_8.png" alt="M_8">
		    </div>
              
            <div class="item">
		      <img src="img/Menton/M_9.png" alt="M_9">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#Menton" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Precedent</span>
		  </a>
		  <a class="right carousel-control" href="#Menton" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Suivant</span>
		  </a>

		</div>
	</div>



	</div>

		<button class="valider">
			<img src="img/valider.png" onclick="javascript:lafonctiondecyril();" alt="Texte en gras" style="cursor:pointer;"></img>
		</button>
		<button class="btn btn-success" id="boutton">copie du portrait</button>
	<canvas></canvas>

</div>
<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>