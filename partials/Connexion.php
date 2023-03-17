<?php
try
{
$pdo = new PDO('mysql:host=57.128.65.58;dbname=comparo_full;charset=utf8','root','');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>