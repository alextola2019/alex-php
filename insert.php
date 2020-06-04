



<?php

session_start();
$a=$_SESSION['y'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$titulo=$_POST['titulo'];
$imagen=$_POST['imagen'];
$texto=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql = "INSERT INTO inventario(nombre, imagen, descripcion, precio, idusuario)
VALUES ('$titulo','$imagen','$texto','$precio','$a')";


$conn->query($sql) === TRUE;

header("Location: ventas.php");



$conn->close();
?>
