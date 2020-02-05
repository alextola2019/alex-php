<?php

$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM imagen";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['imagen'];}}