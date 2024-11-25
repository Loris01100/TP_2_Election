<?php

$infoBdd = array(
    'interface'  =>  'pdo' ,
    'type'    =>  'mysql' ,
    'host'    =>  'localhost' ,
    'port'    =>   3306 ,
    'charset'  =>  'UTF8' ,
    'dbname'  =>  'tp2_Election' ,
    'user'    =>  'root' ,
    'pass'    =>  '',
);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp2_Election";

try
{
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Erreur de connexion : " . $e->getMessage();
}