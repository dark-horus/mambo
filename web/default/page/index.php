<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Code</title>
    <link rel="stylesheet" href="style.css">
    
  </head>

  <body>
      <h1> Possédez-vous un code pour vous connecter ?</h1>
<p><?php if (isset($_SESSION['id'])) { echo "Bonjour " .$_SESSION['id']. ", ce message est temporaire. " ; } ?>
      <div id="ouicode">
          
        <!-- Bouton "J'ai un code" -->
        
        <a href="ouicode.php">J'ai un code</a>
        
      </div>
      
      <div id="noncode">
        <!-- Bouton "J'ai un code" -->
        
        <a href="create.php">Je n'ai pas de code</a>
        
      </div>
        
      
  </body>
</html>
