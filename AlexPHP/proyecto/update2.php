

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

$titulo1=$_POST['titulo1'];
$titulo=$_POST['titulo'];
$imagen=$_POST['imagen'];
$texto=$_POST['descripcion'];

$sql = "update texto set titulo='$titulo' , imagen='$imagen' , texto='$texto' where id='$titulo1'";


$conn->query($sql) === TRUE;

header("Location: proyexto.php");



$conn->close();
?>