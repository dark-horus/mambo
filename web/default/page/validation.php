<head>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- FONT -->
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<!-- CSS -->
<link href="css/box_etape.css" rel="stylesheet" type="text/css">
    
</head>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <body>
        <form action="recEtape.php" method="post" onsubmit="return verifForm(this)">
		
        <div class="box">
            <!-- VALIDER E + 1 -->
			
			
            <button type="submit" class="btn btn-success" id="valide" name="valide" value="valide">VALIDER</button>
                    

            
			
			
			<!-- RECOMMENCER -->
            <button type="submit" class="btn btn-warning" id="reroll" name="reroll" value="reroll" >RECOMMENCER</button>
             <?php if(!empty($_POST['reroll'])) { echo "c'est reparti !";} // rester etape courante ?>

            <!-- QUITTER -->
            <a href="http://accueil_mambo.com"><button type="button" class="btn btn-danger">QUITTER</button></a>
            
        </div>
    

 

      </form>
       <script>
	    function verifForm(){
				//si tout est ok, retourne true
				//if( verification du resultat de l'utilisateur si ok){
				return true;
				//} 
				//else {
				//sinon retourne false
				//return false;
				//}
		}
	   </script>
	  
    </body>
</html>