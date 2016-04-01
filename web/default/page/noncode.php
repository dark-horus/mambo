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
    
  </head>

  <body>
      
      <h1>Je n'ai pas de code</h1>

      <h2> Voici votre code personnel,<br> pensez bien à le conserver pour pouvoir sauvegarder votre avancée. </h2>
      
      <!-- Le code : -->
      <h3><?php echo $_SESSION['id']; ?></h3>
    
	
	<div id="retour">
   <a href="index.php">Retour</a>
   <a href="deconnexion.php">deconnexion</a>
   </div>
		
      
  </body>
</html>
<?php } else { header('location: index.php'); } ?>