<?php
// Variables de connexion à la base de données MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "admin";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier si la connexion a réussi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Récupération des données du formulaire d'inscription
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];

// Hashage du mot de passe avant de l'enregistrer dans la base de données
$motdepasse = password_hash($motdepasse, PASSWORD_DEFAULT);

// Requête SQL pour insérer les données de l'administrateur dans la table 'admin'
$sql = "INSERT INTO admin (nom, prenom, email, motdepasse) VALUES ('$nom', '$prenom', '$email', '$motdepasse')";

// Exécution de la requête SQL
if (mysqli_query($conn, $sql)) {
  echo "Compte administrateur créé avec succès.";
} else {
  echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>
