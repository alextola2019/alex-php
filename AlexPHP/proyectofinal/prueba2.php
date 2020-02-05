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
            padding-bottom:100px;
        }
</style>
<?php

session_start();
if ($_SESSION['x'] == 1) {
    ?><h1><a href="login.html">DEBES INICIAR SESION PRIMERO</a></h1><?php   
    //sleep(5);
    //header('Location: '."login.html");
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
echo $z;

$sql2 = "SELECT * from imagen";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
echo $result2->num_rows; 

if ($result2->num_rows == $z){
    header("Location: siguiente2.php");
    $z = 0;
}
echo '<br>';
echo $z;

$sql = "SELECT * FROM imagen limit $z, 1";
$result = $conn->query($sql);
//echo $z;

require 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\ImageManager;
Image::configure(array('driver' => 'imagick'));


if ($result->num_rows > 0 and $y==1) {
$row = $result->fetch_assoc();

$z = $z + 1;
?>
<form id="grado" action='siguiente.php' method='POST'>
siguiente<br> 
<input type='text' name='num' value="<?php echo $z ?>">
<br>
<input type='submit' value='siguiente'>
</form>
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
    echo "<img src=$base64>";
    ?>
    <h1>HOLA</h1>
    </div>
    <?php
    $z=$z + 1;
    //echo $z;
?>
<script>
    function change()
    {
    document.getElementById('d').style.visibility="visible";
    }
</script>
<?php  
    /*$img = Image::canvas(200, 200, '#ddd');
    $img->circle(200, 100, 100, function ($draw) {
    $draw->border(5, '000000');});
    $img->encode('png');
    $type = 'png';
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
    echo "<img src=$base64>";
*/

    ?>
        <form id="grado" action='rotate.php' method='POST'>
        ROTACION(°)<br> 
        <input class='oculto' type='text' name='titulo1' value="<?php echo $row['id'] ?>">
        <input type='text' name='titulo' value="<?php echo $row['rotar'] ?>">
        <br>
        <input type='submit' value='rotar'>
        </form>

        <button class="boton"  onclick="change()">New User</button>
        <form id="grado2" action='rotate2.php' method='POST'>
        <input id='d' class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input id='' class='oculto' type='text' name='grado' value="90">
        <br>
        <input type='submit' value='ROTAR 90°'>
        </form>

        <form id="brillo" action='brillo.php' method='POST'>
        BRILLO(-100/100)<br> 
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input type='text' name='brillo' value="<?php echo $row['brillo'] ?>">
        <br>
        <input type='submit' value='aplicar'>
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
        <input type='submit' value='aplicar'>
        </form>


        <form id="contraste" action='contraste.php' method='POST'>
        CONTRASTE(-100/100)<br> 
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input type='text' name='contraste' value="<?php echo $row['contraste'] ?>">
        <br>
        <input type='submit' value='aplicar'>
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
        <input type='submit' value='aplicar'>
        </form>

        <form id="size" action='size.php' method='POST'>
        REDIMENSIONAR<br> 
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        
        <input type='text' name='size1' value="<?php echo $row['size1'] ?>">
        
        <input type='text' name='size2' value="<?php echo $row['size2'] ?>">
        <br>
        <input type='submit' value='aplicar'>
        </form>

        <form id="gris2" action='gris.php' method='POST'>
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input class='oculto' type='text' name='gris' value="1">
        <input type='submit' value='GRIS'>
        </form>

        <form id="gris3" action='gris.php' method='POST'>
        <input class='oculto' type='text' name='id' value="<?php echo $row['id'] ?>">
        <input class='oculto' type='text' name='gris' value="0">
        <input type='submit' value='QUITAR GRIS'>
        </form>
        
    <?php

};
?>


