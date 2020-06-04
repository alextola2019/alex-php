<?php



session_start();

$a=$_SESSION['y'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$imagen=$_POST['imagen'];
$precio=$_POST['precio'];
$idusuario=$_POST['idusuario'];

$sql2 = "call comprar($id,'$nombre','$descripcion','$imagen',$precio,$idusuario,$a)";
$conn->query($sql2) === TRUE;

$sql3 = "call borrar($id)";
$conn->query($sql3) === TRUE;

header("Location: comprar.php");

$conn->close();