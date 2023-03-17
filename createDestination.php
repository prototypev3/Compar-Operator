<?php

include ('partials/Connexion.php');



// Récupération des données du formulaire d'inscription
$nom = $_POST['name'];
$destination = $_POST['destination'];


echo $nom . "<br>";
echo $destination . "<br>";

// Requête SQL pour insérer les données de l'administrateur dans la table 'ajout_destination'
$sql = "INSERT INTO ajout_destination (nom, destination) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);

// Exécution de la requête SQL
$stmt->execute([$nom, $destination]);


header('Location: index.php');
?>
