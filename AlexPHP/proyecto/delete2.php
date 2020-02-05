<?php


$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$delete=$_POST['delete'];
$sql2 = "DELETE FROM texto WHERE id='$delete'";
$conn->query($sql2) === TRUE;
header("Location: proyexto.php");