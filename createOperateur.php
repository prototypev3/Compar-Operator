<?php

include ('partials/Connexion.php');



// Récupération des données du formulaire d'inscription
$nom = $_POST['name'];
$operateur = $_POST['operateur'];


echo $nom . "<br>";
echo $operateur . "<br>";

// Requête SQL pour insérer les données de l'administrateur dans la table 'ajout_operateur'
$sql = "INSERT INTO ajout_operateur (nom, operateur) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);

// Exécution de la requête SQL
$stmt->execute([$nom, $operateur]);


header('Location: indexO.html');
?>