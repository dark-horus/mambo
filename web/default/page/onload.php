
<?php session_start(); ?>
<html>
<header>
<title>coucou</title>
<link rel="stylesheet" type="text/css" href="/projet/vendor/fancybox/source/jquery.fancybox.css">
<script src="/projet/vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
<script src="/projet/vendor/jquery-2.2.1/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/projet/vendor/fancybox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="/projet/vendor/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/projet/vendor/fancybox/source/jquery.mousewhell.js"></script>
</header>
<body>




<script>



			<?php if(!isset($_SESSION['id'])){ ?>

			$(document).ready(function() {


					$(".fancybox").fancybox().trigger('click');
						}
					);



			<?php }?>

</script>
<a class="fancybox" data-fancybox-type="iframe" href="/projet/web/default/page/index.php">TEST I-FRAME</a>
</body>




</html>