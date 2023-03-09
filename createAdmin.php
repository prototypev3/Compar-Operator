<?php

include ('../partials/Connexion.php');



// Récupération des données du formulaire d'inscription
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$motdepasse = $_POST['motdepasse'];



// Requête SQL pour insérer les données de l'administrateur dans la table 'admin'
$sql = "INSERT INTO admin (nom, prenom, motdepasse) VALUES ('$nom', '$prenom', '$motdepasse')";

// Exécution de la requête SQL
$sql->execute([
    'nom' =>$_POST['nom'],
    'prenom' =>$_POST['prenom'],
    'motdepasse' =>$_POST['motdepasse']

]);
header("Location indexD.php");
?>
