<?php
require_once ('Connexion.php');
require_once ('Autoload.php');
if (isset($_POST['nom']) &&  isset($_POST['password']))
{
    $admin = new Admin([
        'password'=>$_POST['password'],
        'nom'=>$_POST['nom']
    ]);
    $adminManager = new AdminManager($pdo);

    $adminManager->connect($admin);


    if ($admin->getId()) {
        session_start();
        $_SESSION['nom']=$_POST['nom'];
        $_SESSION['password']=$_POST['password'];
        
        header('Location: /View/Admin.php');
    }else
    {
        header('Location: /index.php');
    }

}

?>