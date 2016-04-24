<?php
session_start();
if($_SESSION['id'] != NULL){
?>

<style>
h1 {
text-align: center;
font-size: 25px;
font-family: 'Lato', sans-serif;
color:#35201e;
margin-top:200px;
}

body {
  background-image: url(img/fondlightbox.png);
  margin:0;
  padding:0;
  background-position:center;
  background-repeat: no-repeat; 
  background-attachment:scroll;
  -webkit-background-size: cover;
  background-size: cover; 
}        
    
/** Page pour ceux n'ayant pas le code **/

h2 {
text-align: center;
font-size: 22px;
font-family: 'Lato', sans-serif;
color:#35201e;
margin-top:50px;
}

.validation{
	background:url(img/fondcode.png);
	border:none;
	width: 342px;
	background-repeat: no-repeat; /* largeur à spécifier */
	height: 50px; /* longueur à spécifier */
	margin: 0 auto;
}
h3 {
    text-align: center;
    margin-top: 50px;
    padding-top: 20px;
    color: white;
    font-size: 20px;
    font-weight: normal;
    font-style: normal;
    font-family: 'Lato', sans-serif;
}
.bouton {
	border:1px solid firebrick;
    background-color:white;
    border-radius: 5px;
    font-family: 'Lato', sans-serif;
    text-align:center;
}

.formulaire {
    border-color:firebrick;
    border-radius:5px;
    font-family: 'Lato', sans-serif;
}
    
</style>
      
      <h1>Je n'ai pas de code</h1>

      <h2> Voici votre code personnel,<br> pensez bien à le conserver pour pouvoir sauvegarder votre avancée. </h2>
      
      <!-- Le code : -->
	  <div class="validation">
      <center><h3><?php echo $_SESSION['id']; ?></h3></center>
	  </div>
	
	<div id="retour">
   
   <!-- <a href="javascript:parent.$.fancybox.close();">Fermer la fenêtre</a> -->
   </div>
		
      
  
<?php } else { header('location: ../../accueil/index.php'); } ?>