<?php
$host="localhost";
$db="pfe1";
$admin="root";
$pass="";
try {
    $pdo=new PDO("mysql:host=$host;dbname=$db", $admin, $pass);
} catch (PDOException $e) {
    die(prinr_r("erreur bdd:".$e->getMessage()));
}
?>