<?php


$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$num=$_POST['num'];
$sql = "insert into contar(num) values ($num)";
$conn->query($sql) === TRUE;

header("Location: proyecto.php");
$conn->close();
?>