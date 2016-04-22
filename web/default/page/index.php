<style>
h1 {
text-align: center;
font-size: 25px;
font-family:'futura';
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
    
/** Page principale **/

#ouicode {
    text-align:center;
    margin-bottom:20px;
    margin-top:30px;
    max-width:100%;
    margin-left: auto;
    margin-right: auto;
}

#noncode {
    text-align:center;
    margin-bottom:15px;
    margin-top:15px;
    max-width:100%;
    margin-left: auto;
    margin-right: auto;
}
    
#testersite {
    text-align:center;
    max-width:100%;
    margin-bottom:15px;
    margin-top:25px;
    margin-left: auto;
    margin-right: auto;      
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
    font-weight: normal;
    font-style: normal;
    font-family:'futura';
    font-size: 14px;
}
    
	#retour{
		text-align:center;
	}
    
/** Page pour ceux n'ayant pas le code **/

h2 {
    text-align: center;
    font-size: 18px;
    font-family:sans-serif;
    color:firebrick;
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
	border:none;
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

<h1>Possédez-vous un code pour vous connecter ?</h1>
        
<!-- Bouton "J'ai un code" -->
    <div id="ouicode">
        
        <a href="ouicode.php">
            <img src="img/code.png"/>
        </a>
        
    </div>

<!-- Bouton "Je n'ai pas de code" -->
    
    <div id="noncode">    
        <a href="create.php">
            <img src="img/pascode.png"/>
        </a>
    </div>

        <center><a href="javascript:parent.$.fancybox.close();">
            <img src="img/testersite.png"/>
            </a> </center>

        
      
  