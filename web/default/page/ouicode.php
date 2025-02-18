<style>
* {outline: none;}    
    
h1 {
text-align: center;
font-size: 25px;
font-family: 'Lato', sans-serif;
color:#35201e;
margin-top:200px;
font-weight: normal;
font-style: normal;
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

/** Page pour ceux ayant déjà le code **/

#insertioncode {
    text-align:center;
    font-size:25px;
    font-family: 'Lato', sans-serif;
}

#validation {
    text-align:center;
    font-family: 'Lato', sans-serif;
    margin-top:20px;
}
            
a, a:hover{
	text-decoration:none;
    color: #000; 
	text-align: center;
	
}
	#retour{
		text-align:center;
	}

h2 {
text-align: center;
font-size: 22px;
font-family: 'Lato', sans-serif;
color:#35201e;
margin-top:50px;
}

h3 {
    text-align:center;
    margin-top:50px;
    color:white;
    font-family: 'Lato', sans-serif;
    font-size:20px;
    background:35201e;
    padding-bottom:15px;
    padding-top:15px;
    max-width:200px;
    margin-left: auto;
    margin-right: auto; 
    border-radius:10px; 
}

.bouton {
	border:0;
    font-family: 'Lato', sans-serif;
    background-color:#ecddbe;
    text-align:center;
    outline: none;
}

    
.formulaire {
    border-color:#35201e;
    border-radius:5px;
    font-family: 'Lato', sans-serif;
    font-size:15px;
}

    
#retour {
    text-align:center;
    margin-bottom:20px;
    margin-top:20px;
    max-width:100%;
    margin-left: auto;
    margin-right: auto;
}

#fermerfenetre {
    text-align:center;
    margin-bottom:10px;
    margin-top:20px;
    max-width:100%;
    margin-left: auto;
    margin-right: auto;
}

.validation{
	background:url(img/valider.png);
	border:none;
	width: 200px;
	background-repeat: no-repeat; /* largeur à spécifier */
	height: 40px; /* longueur à spécifier */
	cursor: pointer;
}
</style>
      
      <h1>J'ai un code</h1>

<form action="connect.php" method="post" name="formulaire_co">
    
  <div id="insertioncode">
    <input type="password" class="formulaire" name="password" id="password" placeholder="Insérez votre code" size=50 maxlength=40>
  </div>
    
<div id="validation">
<center><input type="submit" class="validation" value=""></center>
</div>
    
    <br>
</form>
<div id="retour">
   <a href="index.php">
   <img src="img/retour.png"/>
   </a>
</div>

<div id="fermerfenetre">
   <a href="javascript:parent.$.fancybox.close();">
   <img src="img/fermerfenetre.png"/> 
   </a>
</div>