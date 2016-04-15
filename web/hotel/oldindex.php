<?php
include('../default/page/header.php');
?>
<!-- Place en dessous ton contenu + tes liens vers CSS et JS ! -->
<!-- lien css hotel -->

<!-- Plugin carte -->

<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../../vendor/fancybox/source/jquery.fancybox.css">
	<script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>

	<script type="text/javascript" src="../../vendor/fancybox/source/jquery.fancybox.js"></script>
	<script type="text/javascript" src="../../vendor/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="../../vendor/fancybox/source/jquery.mousewhell.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	</script>
 
<div class="distribution-map"> 
    <!-- This was broken for a while because imgur :( -->
    <!-- I don't trust this host. Image here if it goes down: http://i.imgur.com/M7aUkuS.png -->
	
    <!--<img src="images/carte2.jpg">-->
	
    <!--In the original application, these points are injected with Javascript, but ideally, they'd be injected with a haml loop. Because I'm hardcoding content, I'm presenting this as prerendered HTML-->
    <div class="map-point" style="top:15%;left:35%">
	
        <div class="content">
			<a class="fancybox" data-fancybox-type="iframe" href="images/Alcala.jpg"></a>
            <div class="centered-y">
                <h2>A Place</h2>
				<!--<img src="images/Alcala.jpg">-->
				
               <!--<p>You can put plenty of details in here. In the original, I listed contact information and linked phone numbers and email addresses.</p> -->
            </div>
        </div>
    </div>
    <div class="map-point" style="top:35%;left:50%">
        <div class="content">
            <div class="centered-y">
                <h2>Another Place</h2>
                <p>Lorem ipsum something something</p>
            </div>
        </div>
    </div>
    <div class="map-point" style="top:76%;left:82.5%">
        <div class="content">
            <div class="centered-y">
                <h2>Marauder Town</h2>
                <p>I solemnly swear that I am up to no good</p>
            </div>
        </div>
    </div>
    <div class="map-point" style="top:45%;left:16%">
        <div class="content">
            <div class="centered-y">
                <h2>Logan's Mum</h2>
                <p>I&rsquo;m a marshmallow</p>
            </div>
        </div>
    </div>
    <div class="map-point" style="top:60%;left:53%">
        <div class="content">
            <div class="centered-y">
                <h2>Toto</h2>
                <p><img src="images/burger.png" width="70%" ></p>
            </div>
        </div>
    </div>
    <div class="map-point" style="top:25%;left:70%">
        <div class="content">
            <div class="centered-y">
                <h2>With Love</h2>
                <p>&mdash; 007</p>
            </div>
        </div>
    </div>
</div>
<p class="description">It&rsquo;s been brought to my attention that OSX/Safari doesn&rsquo;t support :active for buttons with default settings, so you guys will have to resort to JS or hold down your mouse button to keep :focus triggered.</p>
    <script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script>

<!-- fin plugin -->



<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>