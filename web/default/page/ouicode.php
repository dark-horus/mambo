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

#ouicode a, #noncode a{
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
      
      <h1>J'ai un code</h1>

<form action="connect.php" method="post" name="formulaire_co">
    
  <div id="insertioncode">
    <input type="password" class="formulaire" name="password" id="password" placeholder="Insérez votre code" size=50 maxlength=40>
  </div>
    
  <div id="validation">
  
  <button type="submit" class="bouton">Valider</button>
     
  </div>
    <br>
</form>
<div id="retour">
   <a href="index.php">Retour</a>
   <a href="javascript:parent.$.fancybox.close();">Fermer la fenêtre</a>

   </div>
  