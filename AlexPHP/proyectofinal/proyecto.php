<style>
     .oculto{
        /*display:none;*/
        visibility:hidden;
        position:absolute;
    }
    #gris{
        display:none;
    }
    .foto{
        text-align:center;
        padding-top:20px;
        margin-right:500px;
    }
    .foto2{
    }
    body{
        background-image:url(fondo2.jpg);
        color:white;
        padding:10px;
    }
    .fondo{
        margin:auto;
        background-image:url(fondo.jpg);
        padding:50px;
    }
    .titulo{
        text-align:center;
        font-size:50px;
    }
    .nada{
        display:none;
    }
    .boton{
        width:180px;
        height:50px;
        font-size:24px;
    }
    .boton2{
        width:180px;
        height:50px;
        font-size:24px;
    }
    .boton2:hover{
        cursor:text;
    }
    .boton1{
        width:180px;
    }
    .menu10{
        border:2px solid grey;
        width:360px;
        height:101px;
        float:right;
        margin-right:150px;
        margin-left:-400px;
        margin-top:200px;
    }
    .primero{
        width:180px;
        height:51px;
        float:left;
        width:180px;

    }
    .segundo{

        width:180px;
        height:51px;
        float: right;

    }
    .tercero{
        width:180px;
        height:51px;
        float:left;

    }
    .cuarto{
        width:180px;
        height:51px;
        float: right;
    }
    .boton:hover{
        background-color: green;
        cursor:pointer; 

    }
    #d{
        display:none;
    }
    .ultimo{
        margin-left:15%;
    }
    .ultimo2{
        margin-left:18%;
    }
    .cursor2:hover{
        cursor:pointer;
    }
    .log{
        float:right;
        margin-top:-80px;
    }
    .centro{
        width:40%;
        text-align:center;
        margin-top:20%;
        height:60px;
        padding-left:30%
    }
    .centro2{
        background-color:orange;
    }
</style>
<?php
session_start();

if ($_SESSION['x'] != 1) {
    ?><div class='centro'><h1 class='centro2'><a href="login.html">DEBES INICIAR SESION PRIMERO</a></h1></div><?php   
    echo '<script>
    setTimeout(function(){ 
    window.location="login.php"
    }, 3000);
    </script>';
}else{
    $y=1;
}


$servername = "192.168.71.72";
$username = "cualquiera";
$password = "";
$dbname = "proyecto";


$conn = new mysqli($servername, $username, $password, $dbname);

$sql1 = "SELECT num FROM contar order by num desc limit 1";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$z = $row1['num'];


$sql2 = "SELECT * from imagen";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();

if ($result2->num_rows == $z){
    header("Location: siguiente2.php");
    $z = 0;
}
if ($result2->num_rows < $z){
    header("Location: siguiente2.php");
    $z = 0;
}

$sql = "SELECT * FROM imagen limit $z, 1";
$result = $conn->query($sql);


require 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\ImageManager;
Image::configure(array('driver' => 'imagick'));


if ($result->num_rows > 0 and $y==1) {
    $row = $result->fetch_assoc();
    $z = $z + 1;

    ?>
    <div class='fondo'>

        <h1 class='titulo'>EDITA LA IMAGEN COMO QUIERAS<h1>

        <a class='log' href="login3.php"><button class='boton'>LOG OUT</button></a>

        <div class='menu10'>
        <div class='primero'>
            <form id="siguiente" action='siguiente.php' method='POST'>
                <input class='nada' type='text' name='num' value="<?php echo $z ?>">
                <input class='boton' type='submit' value='SIGUIENTE <?php echo $z; echo '/';echo $result2->num_rows; ?>'>
            </form>
        </div>

        <div class='segundo'>
            <form id="delete" action='delete.php' method='POST'>
                <input class='nada' type='text' name='borrar' value="<?php echo $row['id'] ?>">
                <input class='boton' type='submit' value='ELIMINAR'>
            </form>
        </div>


        <div class='tercero'>
            <form id="deshacer" action='deshacer.php' method='POST'>
                <input class='nada' type='text' name='id' value="<?php echo $row['id'] ?>"> 
                <input class='boton' type='submit' value='DESHACER'>
            </form>
        </div>

        <div class='cuarto'>
            <button class="boton" onclick="change()">NUEVO</button>
            <form id='d' id="insert" action='insert.php' method='POST'>
                <input class='boton2' type='text' name='nombre' value="">
                <input class='boton' type='submit' value='AÑADIR FOTO'>
            </form>
        </div>
    </div>

<div class='foto'>
    <?php

    $image = Image::make($row['imagen']);
    if($row['gris']==1){
        $image = Image::make($row['imagen'])->greyscale();
    }
    $image->resize($row['size1'], $row['size2']);
    $image->crop($row['ancho'], $row['altura'],$row['x'], $row['y']);
    $image->contrast($row['contraste']);
    $image->brightness($row['brillo']);
    $image->rotate($row['rotar']);
    $image->colorize($row['red'], $row['green'] , $row['blue']);
    $image->encode('png');
    $type = 'png';
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);
    ?><p class='foto2'><?php
    echo "<img src=$base64>";
    ?>
    </p>
    </div>

    <?php
    $z=$z + 1;

?>

<?php  

if ($_SESSION['n'] == 1){
    $_SESSION['n'] = 0;
    ?>
    <div class='ultimo'>
        <form id="grado" action='rotate.php' method='POST'>
        ROTACION(°)<br> 
        <input class='oculto' type='text' name='titulo1' value="<?php echo $row['id'] ?>">
        <input type='text' name='titulo' value="<?php echo $row['rotar'] ?>">
        <br>
        <input class='cursor2' type='submit' value='rotar'>
        </form>
        <form id="grado2" action='rotate2.php' method='POST'>
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input class='oculto' type='text' name='grado' value="90">
        <br>
        <input class='cursor2' type='submit' value='ROTAR 90°'>
        </form>

        <form id="brillo" action='brillo.php' method='POST'>
        BRILLO(-100/100)<br> 
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input type='text' name='brillo' value="<?php echo $row['brillo'] ?>">
        <br>
        <input class='cursor2' type='submit' value='aplicar'>
        </form>

        <form id="color" action='color.php' method='POST'>
        COLOR(RGB(-100/100))<br> 
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        RED
        <input type='text' name='red' value="<?php echo $row['red'] ?>">
        GREEN
        <input type='text' name='green' value="<?php echo $row['green'] ?>">
        BLUE
        <input type='text' name='blue' value="<?php echo $row['blue'] ?>">
        <br>
        <input class='cursor2' type='submit' value='aplicar'>
        </form>


        <form id="contraste" action='contraste.php' method='POST'>
        CONTRASTE(-100/100)<br> 
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input type='text' name='contraste' value="<?php echo $row['contraste'] ?>">
        <br>
        <input class='cursor2' type='submit' value='aplicar'>
        </form>

        <form id="recortar" action='recortar.php' method='POST'>
        RECORTAR(Nº Enteros)<br> 
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        ANCHO
        <input type='text' name='ancho' value="0">
        ALTURA
        <input type='text' name='alto' value="0">
        X
        <input type='text' name='x' value="0">
        Y
        <input type='text' name='y' value="0">
        <br>
        <input class='cursor2' type='submit' value='aplicar'>
        </form>

        <form class='oculto' id="gris2" action='gris.php' method='POST'>
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input class='oculto' type='text' name='gris' value="1">
        <input class='cursor2' type='submit' value='GRIS'>
        </form>

        <form class='oculto' id="gris3" action='gris.php' method='POST'>
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input class='oculto' type='text' name='gris' value="0">
        <input class='cursor2' type='submit' value='QUITAR GRIS'>
        </form>

        <form id="size" action='proyecto.php' method='POST'>
        <input class='cursor2' type='submit' value='volver atras para redimensionar'>
        </form>

        <?php
    }else{
    ?>
    <div class='ultimo2'>
        <form id="size" action='size.php' method='POST'>
        Da las medidas medidas para continuar:<br> 
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input class='oculto' type='text' name='parasize' value="1">
        <input type='text' name='size1' value="<?php echo $row['size1'] ?>">
        <input type='text' name='size2' value="<?php echo $row['size2'] ?>">
        <br>
        <input class='cursor2' type='submit' value='aplicar'>
        </form>
    </div>
</div>
</div>
<?php
    }
}

?>

<script>
function change()
{
document.getElementById("d").style.display="block";
}


</script>

<?php

?>