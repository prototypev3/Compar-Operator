

<?php
require_once ('Connexion.php');

if (isset($_POST['nom']) &&  isset($_POST['prenom']))
{
    $admin = new Admin([
        'prenom'=>$_POST['prenom'],
        'nom'=>$_POST['nom']
    ]);
    $adminManager = new AdminManager($pdo);

    $adminManager->connect($admin);


    if ($admin->getId()) {
        $_SESSION['nom']=$_POST['nom'];
        $_SESSION['prenom']=$_POST['prenom'];
        
        header('Location: /View/Admin.php');
    }else
    {
        header('Location: /indexD.html');
    }

}

?>