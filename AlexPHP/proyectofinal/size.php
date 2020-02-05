<style>
.oculto{
/*display:none;*/
visibility:hidden;
position:absolute;
}
</style>

<?php


session_start();
$_SESSION['n']= 1;
$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

$ancho=$_POST['size1'];
$alto=$_POST['size2'];
$titulo1=$_POST['id'];
$sql = "update imagen set size1=$ancho, size2=$alto, ancho=$ancho, altura=$alto, x=0, y=0 where id='$titulo1'";
$conn->query($sql) === TRUE;
header("Location: proyecto.php");
$conn->close();
?>