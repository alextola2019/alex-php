<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$user=$_POST['user'];
$password=$_POST['password'];



$sql = "UPDATE users SET password='$password' WHERE name='$user'";
echo '<br>';
echo $sql;
echo '<br>';
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
