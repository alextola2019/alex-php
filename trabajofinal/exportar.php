<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM log";
$result = $conn->query($sql);
$fp = fopen("log.json", "w");
fwrite($fp,'');
fclose($fp);
while($row = $result->fetch_assoc()){
$fp = fopen("log.json", "a");
fwrite($fp, '{"log":"');
fwrite($fp, $row['log']);
fwrite($fp, '","fecha":"');
fwrite($fp, $row['fecha']);
fwrite($fp, '","idarticulo":"');
fwrite($fp, $row['idarticulo']);
fwrite($fp, '"}');
fclose($fp);
}



echo exec('mongoimport --host solomuebles-shard-0/solomuebles-shard-00-00-hxq1v.azure.mongodb.net:27017,solomuebles-shard-00-01-hxq1v.azure.mongodb.net:27017,solomuebles-shard-00-02-hxq1v.azure.mongodb.net:27017 --ssl --username solomuebles --password unieibar1 --authenticationDatabase admin --db solomuebles --collection logs --drop --type json --file C:\xampp\htdocs\log.json');

header("Location: admin.php");
?>