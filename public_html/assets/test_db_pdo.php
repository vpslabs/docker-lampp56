<?php

$DBuser = 'root';
$DBpass = 'secret';
$pdo = null;

try{
    $database = 'mysql:host=db';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "Success: A proper connection to MySQL was made! The docker database is great. <br><br>Intinya koneksi MySQL berhasil";    
} catch(PDOException $e) {
    echo "Error: Unable to connect to MySQL. Error:\n $e";
}

$pdo = null;
