<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$eliminar=$_POST['id'];


$sql2 = "DELETE FROM inventario WHERE id='$eliminar'";
$conn->query($sql2) === TRUE;

header("Location: ventas.php");

$conn->close();