<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";


$conn = new mysqli($servername, $username, $password, $dbname);

$user=$_POST['user'];
$password=$_POST['password'];

$sql = "SELECT password FROM login where user='$user'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();




if (password_verify($password, $result)) {
    header("Location: proyexto.php");
};

