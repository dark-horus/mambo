<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->
  <link rel="stylesheet" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->



<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox({
				'padding':0
			});
        });
</script>


<!-- Place ici ton contenu -->
<div class="bat1">

<div class="distribution-map"> 
   
	
	<!--  alcala  -->
	<a class="fancybox" href="#alcala">
	
	<div class="map-point" id="point1">
	</div>
	
	</a>
	
	<div style="display:none">
	
	<div id="alcala">
	<div class="title1">
	<h2>Puerta de Alcalà</h2>
	</div>
		<img class="img_light" src="images/webalcala.jpg">
		<div class="content_light">
					<h3> « Porte d'Alcalà » </h3>	
					<p>Faisant partie des cinq portes permettant l'accès à la ville, La Puerta de Alcalà est érigée sous le règne de Charles III pour 
					remplacer une ancienne porte du XVIème siècle. Construite par l'architecte italien Franceso Sabatini, les travaux durent douze ans (1769-1778).
					La Puerta de Alcalà est la première arche construite depuis la chute de l'Empire Romain, ce qui en 
					fait un précurseur à l’arc de triomphe. La Puerta de Alcalà est aujourd’hui un des monuments majeurs de Madrid longeant un des 
					magnifiques parcs de la ville. </p> 
		</div>
					
	</div>
	
	</div>
	
	
	<!--  sol  -->
	<a class="fancybox" id="inline" href="#sol">
	<div class="map-point" id="point2"></div>
	</a>
	<div style="display:none">
		
		
	<div id="sol">
			
		<div class="title2">
			<h2>Puerta del sol</h2> 
		</div>
			<img class="img_light2" src="images/websol.jpg">
		<div class="content_light2">
                    <h3>« Porte du soleil »</h3>
					
                <p>Au XVème siècle, La Puerta del Sol fait partie de l'une des portes permettant d’entrer dans Madrid. Son nom vient du cadran solaire placé en son fronton. Au fil des siècles, la place prend de plus en plus importante. A partir du XVIIème, un bureau de poste est construit sur la place. Il devient un lieu d'arrivée des messages de tout le pays. Plus tard, ce bureau de poste accueille le siège du ministère de l'intérieur et de la sécurité de l’Etat pendant la dictature de Francisco Franco. Aujourd'hui, cet ancien bureau de poste héberge la présidence de la communauté de Madrid.</p>
	
	
		</div>			
	</div>
	
	</div>
	
	<!--  oriente  -->
	<a  class="fancybox" id="inline" href="#oriente">
	<div class="map-point" id="point3"></div>
	</a>
	<div style="display:none">
	
	<div id="oriente">
	
		<div class="title3">	
		<h2>Plaza de Oriente</h2>
		</div>
		<img class="img_light3" src="images/weboriente.jpg">
		<div class="content_light3">
                    <h3>« Place de l'Orient »</h3>
                <p>Entre le palais royal et le théâtre royal, La Plaza de Oriente est connue pour sa statue du roi Philippe IV à cheval et pour son jardin somptueux. La forme rectangulaire de la place est conçue en 1844 par l'architecte espagnol Narciso Pascual y Colomer. A l’époque, le roi Joseph Ier souhaite la démolition des maisons médiévales. De nos jours, les alentours de la place sont peuplés de bars et de restaurants.</p>
	</div>
	
	</div>
	</div>
	
	<!--  cibele  -->
	<a class="fancybox" id="inline" href="#cibele">
	<div class="map-point" id="point4"></div>
	</a>
	<div style="display:none">
	
	<div id="cibele">
		<div class="title4">
		<h2>Plaza de Cibeles</h2>
		</div>
		<img class="img_light4" src="images/webcibele.jpg">
		<div class="content_light4">
        <h3>« Place de Cybèle »</h3>
        <p>A ses débuts, la Plaza de Cibeles porte le nom de place de Madrid. En 1900, la place est renommée par l'écrivain et politicien Emilio Castelar y Ripoll. En 2011, lors des journées mondiales de la jeunesse, le pape Benoît XVI est accueilli sur la place. Le nom « Cíbeles », vient de la fontaine représentant la déesse grecque et romaine Cybèle, personnifiant la nature sauvage. La fontaine est placée au centre du carrefour routier qui crée l'intersection entre les cours des Récollets et du Padro ainsi que les arrondissements du centre, du Retiro et de Salamanca.</p>
	
	</div>
	
	</div>
	</div>
	
	<!--  mayor  -->
	<a class="fancybox" id="inline" href="#mayor">
	<div class="map-point" id="point5"></div>
	</a>
	<div style="display:none">
	
	<div id="mayor">
	<div class="title5">
			<h2>Plaza Mayor</h2>
	</div>
		<img class="img_light5" src="images/webmayor.jpg">
		<div class="content_light5">
			<h3>« La grande place »</h3>
			<p>La Plaza Mayor se trouve à proximité de la Puerta del Sol dans le quartier de Sol. L'histoire de cette place remonte au XVIème siècle. Elle se nomme alors Place du Faubourg et accueille le principal marché municipal de Madrid. En 1580, le roi Philippe II fait appel à l'architecte Juan de Herrera pour réaménager la place. Ainsi les travaux débutent-ils en 1590. En 1617, Philippe III souhaite continuer les travaux et demande à l'architecte Juan Gómez de Mora de poursuivre le projet, qu’il termine en 1618. La place connaît par la suite trois incendies et est ainsi reconstruite à de multiples reprises.</p>
	</div>
	
	</div>
        
    </div>
</div>
<!-- ass="description">It&rsquo;s been brought to my attention that OSX/Safari doesn&rsquo;t support :active for buttons with default settings, so you guys will have to resort to JS or hold down your mouse button to keep :focus triggered.</p>-->
    <script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script>
	



<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>