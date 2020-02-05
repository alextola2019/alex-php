
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



$sql3 = "SELECT name FROM users where name='Javi'";
    $result3 = $conn->query($sql3);
        $row3 = $result3->fetch_assoc();

$sql4 = "SELECT name FROM users where name='Lander'";
    $result4 = $conn->query($sql4);
        $row4 = $result4->fetch_assoc();

$sql1 = "SELECT password FROM users where name='Javi'";
    $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();

$sql2 = "SELECT password FROM users where name='Lander'";
    $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();


$user=$_POST['user'];
$password=$_POST['password'];

//echo '<br>';
echo password_hash('admin', PASSWORD_DEFAULT)."\n";






/*if($user=='Javi'){
    if($password=='user1'){
        echo '<h1>OK</h1>';
        $x=1;
    }else echo '<h1>KO</h1>' , $x=2;
           
}else if($user=='Lander'){
    if($password=='user2'){
        echo '<h1>OK</h1>';
        $x=1;
    }else echo '<h1>KO</h1>' , $x=2;
           
}else echo '<h1>KO</h1>' , $x=2;
        */

/*

switch($x){
    case 1: echo '<h1>OK</h1>' ;
    break;
    case 2: echo '<h1>KO</h1>' ;
    break;
}



*/




echo '<br>';



$hash1 = implode($row1);

//echo $hash1;

//echo "<br>";

$hash2 = implode($row2);

//echo $hash2;
//echo "<br>";

$name1 = implode($row3);

//echo $name1;
//echo "<br>";

$name2 = implode($row4);

//echo $name2;
//echo "<br>";



if (password_verify($password, $hash1) && $user== $name1) {
    echo '<h1>hash is valid!</h1>';
} else if (password_verify($password, $hash2) && $user== $name2){
    echo '<h1>hash is valid!</h1>';
}else {
    echo '<h1>hash is not valid</h1>';
}





$conn->close();
?>


