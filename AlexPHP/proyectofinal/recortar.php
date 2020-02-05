<?php

session_start();
$_SESSION['n']= 1;

$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$ancho=$_POST['ancho'];
$alto=$_POST['alto'];
$x=$_POST['x'];
$y=$_POST['y'];
$titulo1=$_POST['id'];
$sql = "update imagen set ancho=ancho - $ancho, altura=altura - $alto, x=x + $x ,y=y + $y where id='$titulo1'";
$conn->query($sql) === TRUE;

header("Location: proyecto.php");
$conn->close();
?>