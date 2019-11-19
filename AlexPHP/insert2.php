



<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$titulo=$_POST['titulo'];
$imagen=$_POST['imagen'];
$texto=$_POST['descripcion'];

$sql = "INSERT INTO texto(titulo, imagen, texto)
VALUES ('$titulo','$imagen','$texto')";


$conn->query($sql) === TRUE;

header("Location: proyexto.php");



$conn->close();
?>
