<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

$user=$_POST['user'];
$password=$_POST['password'];


$sql = "SELECT left(password,60) FROM login where user='$user'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();



$hash1 = implode($row);

if (password_verify($password,$hash1)) {
    header("Location: proyexto.php");
}else{
    header("Location: login2.html");
};




