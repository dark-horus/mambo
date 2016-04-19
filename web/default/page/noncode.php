<?php
session_start();
if($_SESSION['id'] != NULL){
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Votre code</title>
    <link rel="stylesheet" href="style.css">
    <script src="/projet/vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
<script src="/projet/vendor/jquery-2.2.1/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/projet/vendor/fancybox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="/projet/vendor/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/projet/vendor/fancybox/source/jquery.mousewhell.js"></script>

  </head>

  <body>
      
      <h1>Je n'ai pas de code</h1>

      <h2> Voici votre code personnel,<br> pensez bien à le conserver pour pouvoir sauvegarder votre avancée. </h2>
      
      <!-- Le code : -->
      <h3><?php echo $_SESSION['id']; ?></h3>
    
	
	<div id="retour">
   
   <a href"#">Fermer la fenêtre</a>
   </div>
		
      
  </body>
</html>
<?php } else { header('location: index.php'); } ?>