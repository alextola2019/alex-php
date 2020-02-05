<?php
$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

$nombre=$_POST['nombre'];

$sql = "insert into imagen(imagen) values ('$nombre')";
$conn->query($sql) === TRUE;
header("Location: proyecto.php");
$conn->close();
?>