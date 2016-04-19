<?php
session_start();
if($_SESSION['id'] != NULL){
?>

<style>
h1 {
text-align: center;
font-size: 25px;
font-family:sans-serif;
color:firebrick;
margin-top:200px;
}

/** Page principale **/

#ouicode {
    text-align:center;
    margin-bottom:20px;
    margin-top:30px;
    background:firebrick;
    padding-bottom:15px;
    padding-top:15px;
    max-width:200px;
    margin-left: auto;
    margin-right: auto;
    border-radius:10px;
}

#noncode {
    text-align:center;
    margin-top:20px;
    background:firebrick;
    padding-bottom:15px;
    padding-top:15px;
    max-width:200px;
    margin-left: auto;
    margin-right: auto;
    border-radius:10px;
}

#ouicode a, #noncode a:link {color:white;
}
#ouicode a, #noncode a:hover {color:black;
}
#ouicode a, #noncode a:visited {color:white;
}

#ouicode a , #noncode a{
    text-decoration:none;
    font-family: sans-serif;
    text-align:center;
    font-size:18px;
}

/** Page pour ceux ayant déjà le code **/

#insertioncode {
    text-align:center;
    font-size:25px;
    font-family:sans-serif;
}

#validation {
    text-align:center;
    font-family:sans-serif;
    margin-top:15px;
	
}
a, a:hover{
	text-decoration:none;
    color: #000; 
	text-align: center;
	
}
	#retour{
		text-align:center;
	}
/** Page pour ceux n'ayant pas le code **/

h2 {
text-align: center;
font-size: 18px;
font-family:sans-serif;
color:black;
margin-top:50px;
}

h3 {
    text-align:center;
    margin-top:50px;
    color:white;
    font-family:sans-serif;
    font-size:25px;
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