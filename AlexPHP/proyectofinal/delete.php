



<?php


$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$borrar=$_POST['borrar'];

$sql = "delete from imagen where id='$borrar'";


$conn->query($sql) === TRUE;

header("Location: proyecto.php");



$conn->close();
?>
