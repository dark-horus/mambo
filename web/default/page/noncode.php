<?php
session_start();
if($_SESSION['id'] != NULL){
?>

<style>
h1 {
text-align: center;
font-size: 25px;
font-family:'futura';
color:firebrick;
margin-top:200px;
}

/** Page pour ceux n'ayant pas le code **/

h2 {
text-align: center;
font-size: 20px;
font-family:'futura';
color:black;
margin-top:50px;
}

h3 {
    text-align:center;
    margin-top:50px;
    color:white;
    font-family:'futura';
    font-size:25px;
    font-weight: normal;
    font-style: normal;
    background:firebrick;
    padding-bottom:15px;
    padding-top:15px;
    max-width:200px;
    margin-left: auto;
    margin-right: auto; 
    border-radius:10px;
}

.bouton {
	border:1px solid firebrick;
    background-color:white;
    border-radius: 5px;
    font-family:sans-serif;
    text-align:center;
}

.formulaire {
    border-color:firebrick;
    border-radius:5px;
    font-family:sans-serif;
}
</style>
      
      <h1>Je n'ai pas de code</h1>

      <h2> Voici votre code personnel,<br> pensez bien à le conserver pour pouvoir sauvegarder votre avancée. </h2>
      
      <!-- Le code : -->
      <h3><?php echo $_SESSION['id']; ?></h3>
    
	
	<div id="retour">
   
   <a href="javascript:parent.$.fancybox.close();">Fermer la fenêtre</a>
   </div>
		
      
  
<?php } else { header('location: ../../accueil/index.php'); } ?>