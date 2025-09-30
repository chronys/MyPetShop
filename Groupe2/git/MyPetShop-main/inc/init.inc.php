<!-- Connexion à la base de données -->

<?php

$pdo = new PDO (
    'mysql:host=localhost;dbname=',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION,
        PDO:: ATTR_DEFAULT_FETCH_MODE => PDO :: FETCH_ASSOC,
    )
    );

session_start();



?>