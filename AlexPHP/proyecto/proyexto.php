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
    .oculto{
        display:none;
    }
    .cuadro{
        border:1px solid black;
        margin-right:75%;
        text-align:center;
        margin-left:2%;
    }
    .izquierda{
        float:left;
        width:50%;
        height:5%;
        font-size:120%;
    }
    .derecha{
        float:right;
        width:50%;
        margin-top:-34px;
        height:5%;
        font-size:120%;
    }
    .boton{
        margin-left:3%;
        width:10%;
        height:10%;
        font-size:150%;
        margin-top:-10px;
    }
    .boton2{
        float:right;
        margin-right:5%;
        margin-top:-45px;
        width:10%;
        height:5%;
    }
    .boton3{
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
echo "<a class='boton2' href='proyecto1.php'><button class='boton3'>Cerrar Sesión</button></a>";
$result = $conn->query($sql);





$row = $result->fetch_assoc();?>

<button class="boton" onclick="change()">Nuevo</button>
<div id="d" class="oculto">

<form id="insert" action='insert2.php' method='POST'>
Titulo.<br> 
<input type='text' name='titulo' value="<?php echo $row['titulo'] ?>">
<br>
Imagen:<br>
<input type='text' name='imagen' value="<?php echo $row['imagen'] ?>">
<br>
Descripcion.<br>
<input type='text' name='descripcion' value="<?php echo $row['texto'] ?>">
<br><br>
<input type='submit' value='insertar'>
</form>

</div>

<?php





if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<div class='contenedor'><img class='imagen' src=imagen/" . $row["imagen"] . "><div class='cont'><h1 class='titulo'>" . $row["titulo"]. "</h1><p class='texto'>" . $row["texto"] . "</p></div><br></div>";
    ?>
    <div class="cuadro">

    <div>
        <form action='update2.php' method='POST'>
        <input class='oculto' type='text' name='titulo1' value="<?php echo $row['id'] ?>">
        <br>
        Titulo.<br> 
        <input type='text' name='titulo' value="<?php echo $row['titulo'] ?>">
        <br>
        Imagen:<br>
        <input type='text' name='imagen' value="<?php echo $row['imagen'] ?>">
        <br>
        Descripcion.<br>
        <input type='text' name='descripcion' value="<?php echo $row['texto'] ?>">
        <br><br>
        <input class="izquierda"  type='submit' value='Actualizar'>
        </form>
    </div>
    <div>
        <form action='delete2.php' method='POST'>
        <input class='oculto' type='text' name='delete' value="<?php echo $row['id'] ?>">
        <br> 
        <input class="derecha" type='submit' value='Eliminar'>
        </form>
    </div>
    </div>

    <?php
        
    }





} else {

}

?>

<script>
function change()
{
document.getElementById("d").style.display="block";
}


</script>

<?php

$conn->close();
?>

