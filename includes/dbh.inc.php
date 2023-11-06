<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "ram@2002";
$dBName = "Project";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
?>

