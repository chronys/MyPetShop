<?php 

// Débugage

function debug($param) {
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}



// Fonctions des requêtes

function executeRequete (string $requete, array $param = []) {
    global $pdo;
    $resultat = $pdo -> prepare($requete);
    $resultat -> execute($param);
    return $resultat;
};


?>