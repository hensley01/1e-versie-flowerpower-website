<?php


$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "examen_flowerpower";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connectie is niet gelukt: " . mysqli_connect_error());
}


