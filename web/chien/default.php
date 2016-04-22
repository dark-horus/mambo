<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->


<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->



<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->
<style type="text/css">
#slider1{

height: 200px;
margin-top: 100px;

}
#body_fictif{


height: 1080px;
width: 100%;
margin: 0px;
background-image: url("img/fond.png");


}


</style>

<div class="container" id="body_fictif">
	<!--Cheveux-->
	<div class="col-md-12" id="slider1">
		<div id="cheveux" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#cheveux" data-slide-to="0"></li>
		    <li data-target="#cheveux" data-slide-to="1"></li>
		    <li data-target="#cheveux" data-slide-to="2"></li>
		    <li data-target="#cheveux" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/alejandro.png" alt="alejandro">
		    </div>

		    <div class="item">
		      <img src="img/henry.png" alt="henry">
		    </div>

		    <div class="item">
		      <img src="img/simao.png" alt="siamo">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#cheveux" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#cheveux" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>


	<!--yeux slider-->
	<div class="col-md-12" id="slider1">
		<div id="yeux" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#yeux" data-slide-to="0"></li>
		    <li data-target="#yeux" data-slide-to="1"></li>
		    <li data-target="#yeux" data-slide-to="2"></li>
		    <li data-target="#yeux" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/alejandro.png" alt="alejandro">
		    </div>

		    <div class="item">
		      <img src="img/henry.png" alt="henry">
		    </div>

		    <div class="item">
		      <img src="img/simao.png" alt="siamo">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#yeux" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#yeux" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>