<?php

session_start();
$_SESSION['n']= 1;

$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$red=$_POST['red'];
$blue=$_POST['blue'];
$green=$_POST['green'];
$titulo1=$_POST['id'];

$sql = "update imagen set red=$red, blue=$blue, green=$green where id='$titulo1'";


$conn->query($sql) === TRUE;




header("Location: proyecto.php");



$conn->close();
?>