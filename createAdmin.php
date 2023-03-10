<?php

include ('partials/Connexion.php');



// Récupération des données du formulaire d'inscription
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$motdepasse = $_POST['motdepasse'];

echo $nom . "<br>";
echo $prenom . "<br>";
echo $motdepasse . "<br>";



// Requête SQL pour insérer les données de l'administrateur dans la table 'admin'
$sql = "INSERT INTO admin (nom, prenom, motdepasse) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);

// Exécution de la requête SQL
$stmt->execute([$nom, $prenom, $motdepasse]);

echo "Bonjour";
header('Location: Administrateur.php');
?>
