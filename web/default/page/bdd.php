<?php
// Connexion à la base de données
try {
    $bdd = new PDO( 'mysql:host=localhost;dbname=mambo;charset=utf8', 'root', '' );
} catch ( Exception $e ) {
    // Merci de mettre le fichier sql permettant de créer la bdd pour ceux qui ne l'ont pas ;)
//    die( 'Erreur : ' . $e->getMessage() );
}
