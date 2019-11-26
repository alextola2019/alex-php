<style>
    body{
        background-image:url(imagen/fondo.jpeg)
    }
    h1{
        text-align:center;
    }
    .contenedor{
        width: auto;
        height:auto;
        border: 1px solid black;
        margin-top:2%;
        margin-left:2%;
    }
    .cont{
        width:80%;
        float:right;
        margin-right:2.5%;
        font-size:85%;
        padding-top:;
        text-align:left;
    }
    .imagen{
        width:15%;
        height:15%;
        border:1px solid black;
    }
    .texto{
        width:80%;
        margin-right:2.5%;
        border-top:1px solid black;
    }
    .boton{
        float:right;
        margin-right:5%;
        margin-top:-45px;
        width:10%;
        height:5%;
    }
    .boton2{
        width:100%;
        height:100%;
    }
    .titulo{
        padding-right:30%;
    }
</style>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM texto";

echo "<div><h1>EXPOSICIÓN DE PRODUCTOS VARIADOS</h1></div>";
echo "<a class='boton' href='login2.html'><button class='boton2'>Iniciar Sesión</button></a>";
$result = $conn->query($sql);
$row = $result->fetch_assoc();



if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='contenedor'><img class='imagen' src=imagen/" . $row["imagen"] . "><div class='cont'><h1 class='titulo'>" . $row["titulo"]. "</h1><p class='texto'>" . $row["texto"] . "</p></div><br></div>";
}} else {

}


$conn->close();
?>

