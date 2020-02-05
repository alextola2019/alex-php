
<?php


$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$id=$_POST['id'];

$sql = "update imagen set rotar='0', brillo='0', red='0', green='0', blue='0', contraste='0', ancho='0', altura='0', x='0', y='0', gamma='0', size1='640', size2='480', gris='0' where id='$id'";


$conn->query($sql) === TRUE;

header("Location: proyecto.php");



$conn->close();
?>
