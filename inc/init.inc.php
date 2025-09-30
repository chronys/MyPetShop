<!-- Connexion à la base de données -->

<?php

$pdo = new PDO (
    'mysql:host=localhost;dbname=petshop', // mettre le nom de la base de données ici
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION,
        PDO:: ATTR_DEFAULT_FETCH_MODE => PDO :: FETCH_ASSOC,
    )
    );

session_start();

require_once "fonctions.inc.php";

?>