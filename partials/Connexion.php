<?php
try
{
$pdo = new PDO('mysql:host=localhost;dbname=comparo_full.sql;charset=utf8','root','');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>