<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "adsignad1";
    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die("Failed to connect to database" .mysqli_error());
    }
?>