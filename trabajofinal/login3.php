<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

$cuser=$_POST['cuser'];
$cpassword=$_POST['cpassword'];
$hash=password_hash($cpassword, PASSWORD_DEFAULT)."\n";

$sql = "INSERT INTO login(user,password)
VALUES ('$cuser','$hash')";

$conn->query($sql) === TRUE;

header("Location: login2.html"); 