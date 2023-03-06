<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=comparo_full;charset=utf8','root','');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>