<?php
require_once 'modele/modele.php';

try {
    $db = connect_db();
    echo "Connexion réussie à la base de données !";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
