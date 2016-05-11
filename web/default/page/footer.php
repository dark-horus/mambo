</div>
<script src="../../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>

<script>
    $(document).ready(function () {
            if ($(".fancybox").length) {
                $(".fancybox").fancybox();
            }
           
        }
    );
	</script>
	<script type="text/javascript" src="../../vendor/fancybox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="../../vendor/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="../../vendor/fancybox/source/jquery.mousewhell.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.js" type="text/javascript"></script>

<script src="../../vendor/rwdImageMaps/jquery.rwdImageMaps.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	if($('img[usemap]').length){
	$('img[usemap]').rwdImageMaps();
	}
	$('area').on('click', function() {
		alert($(this).attr('alt') + ' clicked');
	});
});
</script>

<!-- <div class="row">

<footer>

	
	<ul class="list-inline">
		<li><a href="#">Mentions Légales</a></li>
		<li><a href="#">À propos</a></li>
	</ul>
	

</footer>

</div>
</div>
-->
</body>
</html>

