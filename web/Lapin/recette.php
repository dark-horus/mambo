<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
<!-- Fancy-->
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../vendor/fancybox/source/jquery.fancybox.css">
	<script type="text/javascript" src="../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>

	<script type="text/javascript" src="../vendor/fancybox/source/jquery.fancybox.js"></script>
	<script type="text/javascript" src="../vendor/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="../vendor/fancybox/source/jquery.mousewhell.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	</script>
<!-- FONT -->
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<!-- CSS -->
<link href="css/lapin.css" rel="stylesheet" type="text/css">

</head>
    
    <?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "RECETTE" ) ;
 
  //récupération des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //pays:
  $pays = $_POST["pays"] ;
  //description:
  $desciption = $_POST["desciption"] ;
  //UserId:
  $auteur        = $_POST["auteur"] ;
  //Position:
  $position       = $_POST["position"] ;
 
  //création de la requête SQL:
  $sql = "INSERT  INTO personnes (nom, pays, description, auteur, position)
            VALUES ( '$nom', '$pays', '$desciption', '$auteur', '$position') " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("l'ajout de recette a été fait") ;
  }
  else
  {
    echo("Echec de l'ajout de la recette") ;
  }
?>

<body class="body_ajout">
<!-- form -->
<form id="msform">
  <!-- champs -->
  <fieldset>
    <h2 class="fs-title">Ajoutez une recette</h2>
    <input type="text" name="nom" placeholder="nom" />
    <input type="text" name="pays" placeholder="pays" />
    <textarea name="description" placeholder="description"></textarea>
    <input type="button" name="valider" class="next action-button" value="valider" />
  </fieldset>
</form>
</body>

