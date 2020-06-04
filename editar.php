

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_POST['id'];
$imagen=$_POST['imagen'];
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];
$precio=$_POST['precio'];

$sql = "update inventario set nombre='$titulo' , imagen='$imagen' , descripcion='$texto', precio='$precio' where id='$id'";


$conn->query($sql) === TRUE;

header("Location: ventas.php");



$conn->close();
?>