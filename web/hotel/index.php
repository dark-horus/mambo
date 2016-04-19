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
<div class="distribution-map"> 
    <!-- This was broken for a while because imgur :( -->
    <!-- I don't trust this host. Image here if it goes down: http://i.imgur.com/M7aUkuS.png -->
	
    <!--<img src="images/carte2.jpg">-->
	
    <!--In the original application, these points are injected with Javascript, but ideally, they'd be injected with a haml loop. Because I'm hardcoding content, I'm presenting this as prerendered HTML-->
    <div class="map-point" style="top:15%;left:35%">
	
        <div class="content">
			<a class="fancybox" data-fancybox-type="iframe" href="images/webalcala.jpg"></a>
                <h2>Puerta del sol</h2>
				<h3>« Porte du soleil  »</h3>
			<p>Au XVème siècle, La Puerta del Sol fait partie de l'une des portes permettant d’entrer dans Madrid. Son nom vient du cadran solaire placé en son fronton. Au fil des siècles, la place prend de plus en plus importante. A partir du XVIIème, un bureau de poste est construit sur la place. Il devient un lieu d'arrivée des messages de tout le pays. Plus tard, ce bureau de poste accueille le siège du ministère de l'intérieur et de la sécurité de l’Etat pendant la dictature de Francisco Franco. Aujourd'hui, cet ancien bureau de poste héberge la présidence de la communauté de Madrid. </p>	
				<!--<img src="images/Alcala.jpg">-->
				
               <!--<p>You can put plenty of details in here. In the original, I listed contact information and linked phone numbers and email addresses.</p> -->
            
        </div>
    </div>
    <div class="map-point" style="top:35%;left:50%">
        <div class="content">
            <div class="centered-y">
				<a class="fancybox" data-fancybox-type="iframe" href="images/webcibele.jpg"></a>
					<h2>Plaza de Cibeles</h2>
					<h3>« La place de Cybèle »</h3>
                <p>A ses débuts, la Plaza de Cibeles porte le nom de place de Madrid. En 1900, la place est renommée par l'écrivain et politicien Emilio Castelar y Ripoll. En 2011, lors des journées mondiales de la jeunesse, le pape Benoît XVI est accueilli sur la place. Le nom « Cíbeles », vient de la fontaine représentant la déesse grecque et romaine Cybèle, personnifiant la nature sauvage. La fontaine est placée au centre du carrefour routier qui crée l'intersection entre les cours des Récollets et du Padro ainsi que les arrondissements du centre, du Retiro et de Salamanca.</p>
            </div>
        </div>
    </div>
    <div class="map-point" style="top:76%;left:82.5%">
        <div class="content">
            <div class="centered-y">
				<a class="fancybox" data-fancybox-type="iframe" href="images/webmayor.jpg"></a>
					<h2>Plaza Mayor</h2>
					<h3>« La grande place »</h3>
                <p>La Plaza Mayor se trouve à proximité de la Puerta del Sol dans le quartier de Sol. L'histoire de cette place remonte au XVIème siècle. Elle se nomme alors Place du Faubourg et accueille le principal marché municipal de Madrid. En 1580, le roi Philippe II fait appel à l'architecte Juan de Herrera pour réaménager la place. Ainsi les travaux débutent-ils en 1590. En 1617, Philippe III souhaite continuer les travaux et demande à l'architecte Juan Gómez de Mora de poursuivre le projet, qu’il termine en 1618. La place connaît par la suite trois incendies et est ainsi reconstruite à de multiples reprises.</p>
            </div>
        </div>
    </div>
    <div class="map-point" style="top:45%;left:16%">
        <div class="content">
            <div class="centered-y">
				<a class="fancybox" data-fancybox-type="iframe" href="images/weboriente.jpg"></a>
					<h2>Logan's Mum</h2>
                <p>I&rsquo;m a marshmallow</p>
            </div>
        </div>
    </div>
    <div class="map-point" style="top:60%;left:53%">
        <div class="content">
            <div class="centered-y">
				<a class="fancybox" data-fancybox-type="iframe" href="images/webalcala.jpg"></a>
					<h2>Toto</h2>
                <p><img src="images/burger.png" width="70%" ></p>
            </div>
        </div>
    </div>
    <div class="map-point" style="top:25%;left:70%">
        <div class="content">
            <div class="centered-y">
				<a class="fancybox" data-fancybox-type="iframe" href="images/websol.jpg"></a>
					<h2>With Love</h2>
                <p>&mdash; 007</p>
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