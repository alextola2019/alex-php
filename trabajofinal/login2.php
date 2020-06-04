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
$sql2 = "SELECT id FROM login where user='$user'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$hash1 = implode($row);

if (password_verify($password,$hash1)) {
    session_start();
    if($user == 'administrador') {
    $_SESSION['p'] = 1; 
    header("Location: admin.php");
    }else{
    $_SESSION['x'] = 1;
    $_SESSION['y'] = $row2['id'];
    $_SESSION['z'] = substr($user, 0, 1);
    header("Location: proyecto.php");
    }
}else{
    header("Location: login2.html");
};




