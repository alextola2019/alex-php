<?php


$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql1 = "delete from contar";
$conn->query($sql1) === TRUE;

$sql = "insert into contar(num) values (0)";
$conn->query($sql) === TRUE;

header("Location: proyecto.php");
$conn->close();
?>