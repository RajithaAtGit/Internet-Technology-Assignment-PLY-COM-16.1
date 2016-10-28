<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "nsbmlms";  

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password );
}catch(PDOException $e){
    die("Connection faild:" . $e->getMessage());
}

?>