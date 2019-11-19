<style>
    .contenedor{
        width: auto;
        height:auto;
        border: 1px solid red;
        margin:10px;
    }
    .cont{
        width:80%;
        float:right;
        border: 1px solid blue;
        margin-right:2.5%;
 
    }
    .titulo{
        font-size:30px;
    }
    .imagen{
        width:15%;
        height:15%;

    }
    .texto{
        width:70%;

        margin-right:2.5%;
        border: 1px solid blue;

    }
    .oculto{
        visibility:hidden;
    }
</style>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM texto";

echo "<div><h1>COMPRA Y VENTA DE PRODUCTOS VARIADOS</h1></div>";
$result = $conn->query($sql);
$y=2;
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<div class='contenedor'><img class='imagen' src=imagen/" . $row["imagen"] . "><div class='cont'><h1 class='titulo'>" . $row["titulo"]. "</h1><p class='texto'>" . $row["texto"] . "</p></div><br></div>";
        ?>
        <form action='delete2.php' method='POST'>
        <input class='oculto' type='text' name='delete' value="<?php echo $row['id'] ?>">
        <br> 
        <input type='submit' value='delete'>
        </form>
        <?php
    }





} else {
    echo "0 results";
}

$conn->close();
?>

