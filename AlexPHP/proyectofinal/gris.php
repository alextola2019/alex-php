<?php

session_start();
$_SESSION['n']= 1;

$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$titulo1=$_POST['id'];
$gris=$_POST['gris'];
$sql = "update imagen set gris=$gris where id='$titulo1'";
$conn->query($sql) === TRUE;

header("Location: proyecto.php");
$conn->close();
?>