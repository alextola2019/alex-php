<style>
    body{
        margin:0;
        background-image:url(imagen/fondo.jpg)
    }
    .centro{
        border:10px solid grey;
        border-radius:10px;
        width:700px;
        margin:auto;
        margin-top:20%;
        background-color:black;
        color:#5D4037;
    }
    .centro2{
        width:100%;
        text-align:center;
        color:#5D4037;
    }
</style>
<?php
session_start();
if (isset($_SESSION['x'])){
if ($_SESSION['x'] != 1) {
    ?><div class='centro'><h1 class='centro2'><a href="login2.html">DEBES INICIAR SESION PRIMERO</a></h1></div><?php   
    echo '<script>
    setTimeout(function(){ 
    window.location="login2.php"
    }, 5000);
    </script>';
}else{

$a=$_SESSION['y'];
?>
<style>
    .primero{
        width:250px;
        height:100px;
        border:1px solid red;
        background-color:black;
        float:left;
    }
    .titulo2{
     color:#5D4037;
     font-size: 50px;
     position:absolute;
     margin-left:60px;
     font-family:Bradley Hand, cursive;
 }
 .titulo4{
     color:#795548;
     font-size: 50px;
     position:absolute;
     margin-left:200px;
     font-family:Bradley Hand, cursive;
 }
 .titulo1{
     color: #4E342E;
     font-size: 100px;
     position:absolute;
     margin-top:-15px;
     font-family: Brush Script MT, Brush Script Std, cursive;
 }
 .titulo3{
     color:#6D4C41;
     font-size: 100px;
     position:absolute;
     margin-top:-15px;
     margin-left:105px;
     font-family:Brush Script MT, Brush Script Std, cursive;
 }
 .tit{
     width:483px;
     height:200px;
     position:absolute;
 }
 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  height:100%;
}

li {
  float: left;

}

li a {
  font-size:24px;
  display: block;
  color: white;
  text-align: center;
  padding: 30px;
  text-decoration: none;
  height:100%;
}
.active{
      background-color: #122;
}
li a:hover {
  background-color: #111;
}
.menu{
    width:700px;
    height:100%;
    border:1px solid red;
    float:right;
}
.topside{
    width:100%;
    height:100px;
    border:1px solid red;
    background-image:url(imagen/madera.jpg)
}
.letra{
    width:100px;
    height:100px;
    border:1px solid blue;
    background-color:black;
    float:right;
}
.letra:hover{
    cursor:pointer;
    opacity:0.5;
}
.menu2{
  display: none;
  position: absolute;
  background-color: red;
  width: 100px;
  height:20px;
  margin-left:600px;
  margin-top:100px;
  text-align:center;
}
.boton:hover .menu2 {display: block;}
.medio1{
    width:100%;
    height:100px;
    border:1px solid red;
}
.medio2{
    width:25%;
    height:300px;
    border:1px solid red;
    float:left;
}
.medio3{
    width:25%;
    height:300px;
    border:1px solid blue;
    margin-left:25%;

}
.medio4{
    width:24.7%;
    height:300px;
    border:1px solid yellow;
    margin-left:50%;
    margin-top:-302px;
}
.medio5{
    width:25%;
    height:300px;
    border:1px solid black;
    float:right;
    margin-top:-302px;
}
.medio{
    width:90%;
    height:300px;
    border:1px solid red;
    margin:auto;
    margin-top:15px;
    background-image:url(imagen/fondo1.jpg)
}
.foto1{
    width:150px;
    height:150px;
    margin-left: -webkit-calc(50% - 60px);
}
.foto1 img:hover{
    width:150px;
    height:150px;
    margin-left:-15px;
    margin-top:-1px;
}
.foto1 img{
    width:120px;
    height:120px;
    margin-top:15px;
}
.texto1{
    width:100%;
    height:50px;
    border:1px solid green;
    font-size:18px;
}
.nombre{
    width:100%;
    height:30px;
    border:1px solid purple;
    font-size:24px;
}
.precio{
    width:40%;
    height:63px;
    border:1px solid purple;
    float:right;
    text-align:center;
    font-size:30px;
}
.precio1{
    width:40%;
    height:63px;
    border:1px solid purple;
    margin-left:60%;
}
.prec{
    position:absolute;
    margin-top:-1px;
    padding-top:15px;
    margin-left:2%;
    font-size:30px;
}
.letra1{
    margin-top:-40px;
    margin-left:22px;
    position:absolute;
    color:white;
    font-size:70px;
}
.comprados{
    padding-left:5%;
    margin-bottom:50px;
    width:40%;
}
.comprados2{
    float:right;
    width:35%;
    margin-top:-80px;
}
</style>

<div class="topside">
    <div class="primero">
                <div class="tit">
                    <h1 class="titulo1">S</h1>
                    <h1 class="titulo2">O</h1>
                    <h1 class="titulo3">M</h1>
                    <h1 class="titulo4">U</h1>
                </div>
    </div>
    <div class="menu">
        <ul>
            <li><a class="active" href="">Mis Compras</a></li>
            <li><a href="ventas.php">Mis Ventas</a></li>
            <li><a href="proyecto.php">Tienda</a></li>
            <div class="boton">
            <button class="letra"><h1 class="letra1"><?php echo strtoupper($_SESSION['z'])?></h1></button>
                <div class="menu2">
                    <a href="cerrarsesion.php">cerrar sesion</a>
                </div> 
            </div>
        </ul>
    </div>
    <div class="medio1"></div>



<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyecto";


    $conn = new mysqli($servername, $username, $password, $dbname);


    $sql = "SELECT * FROM comprado where idcompra=$a";
    $result = $conn->query($sql);

    $z=$result->num_rows;

    $y=$z / 4;
    $x=$y;
    $x=round($x);
    
    
    if ($x > $y){
        $x = round($y) - 1;
    }
    
    $o= 2 * $x;
    $i= 3 * $x;
    

    
    $sql5 = "SELECT * FROM comprado where idcompra=$a limit $x";
    $result5 = $conn->query($sql5);
    $sql6 = "SELECT * FROM comprado where idcompra=$a limit $x, $x";
    $result6 = $conn->query($sql6);
    $sql7 = "SELECT * FROM comprado where idcompra=$a limit $o, $x";
    $result7 = $conn->query($sql7);
    $sql8 = "SELECT * FROM comprado where idcompra=$a limit $i, $x";
    $result8 = $conn->query($sql8);
    $p = $y - $x;
    

    $sql25 = "SELECT sum(precio) FROM comprado where idcompra=$a";
    $result25 = $conn->query($sql25);
    $row25 = $result25->fetch_assoc();


    echo "<h1 class='comprados'>Articulos comprados (". $z. ")</h1>";
    echo "<h1 class='comprados2'>Total gastado: ".$row25['sum(precio)'] . "€</h1>";
        if ($result->num_rows > 3) {
            $j=3000;
            $k=0;
            $h=2000;
            $g=2000;
            $s=1000;
            $b=1000;
            $v=0;
            $f=3000;
            ?>
            <script>
            var primera =  new Array(); 
            var $j=0;
            </script>
            <?php
        while(($row5 = $result5->fetch_assoc() ) && ($row6 = $result6->fetch_assoc() ) && ($row7 = $result7->fetch_assoc() ) && ($row8 = $result8->fetch_assoc() )) {
 $j= $j+1;   
 $v= $v+1;
 $s= $s+1;
 $g= $g+1;
            ?>

            <div class="medio">
            <div class="medio2">
                <div class="foto1"><img src="imagen/<?php echo $row5['imagen'] ?>"></div>
                <div class="nombre"><?php echo $row5['nombre'] ?></div>
                <div class="texto1"><?php echo $row5['descripcion'] ?></div>
                <div class="precio"><p class="prec"><?php echo $row5['precio'] ?>€</p></div>
            </div>
            <div class="medio3">
                <div class="foto1"><img src="imagen/<?php echo $row6['imagen'] ?>"></div>
                <div class="nombre"><?php echo $row6['nombre'] ?></div>
                <div class="texto1"><?php echo $row6['descripcion'] ?></div>
                <div class="precio"><p class="prec"><?php echo $row6['precio'] ?>€</p></div>
            </div>
            <div class="medio4">
                <div class="foto1"><img src="imagen/<?php echo $row7['imagen'] ?>"></div>
                <div class="nombre"><?php echo $row7['nombre'] ?></div>
                <div class="texto1"><?php echo $row7['descripcion'] ?></div>
                <div class="precio1"><p class="prec"><?php echo $row7['precio'] ?>€</p></div>
            </div>
            <div class="medio5">
                <div class="foto1"><img src="imagen/<?php echo $row8['imagen'] ?>"></div>
                <div class="nombre"><?php echo $row8['nombre'] ?></div>
                <div class="texto1"><?php echo $row8['descripcion'] ?></div>
                <div class="precio"><p class="prec"><?php echo $row8['precio'] ?>€</p></div>
            </div>
        </div>
    
            <?php
    
            
    }}
    
    
    if($p == 0.5){
        $sql3 = "SELECT * FROM comprado where idcompra=$a order by id desc limit 1";
        $result3 = $conn->query($sql3);
        $row3 = $result3->fetch_assoc();
        $sql13 = "SELECT * FROM comprado where idcompra=$a order by id desc limit 1,1";
        $result13 = $conn->query($sql13);
        $row13 = $result13->fetch_assoc();
        ?>
        <div class="medio">
        <div class="medio2">
            <div class="foto1"><img src="imagen/<?php echo $row3['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row3['nombre'] ?></div>
            <div class="texto1"><?php echo $row3['descripcion'] ?></div>
            <div class="precio"><p class="prec"><?php echo $row3['precio'] ?>€</p></div>
        </div>
        <div class="medio3">
            <div class="foto1"><img src="imagen/<?php echo $row13['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row13['nombre'] ?></div>
            <div class="texto1"><?php echo $row13['descripcion'] ?></div>
            <div class="precio"><p class="prec"><?php echo $row13['precio'] ?>€</p></div>
            </div>
        </div>
        <?php
    
    }
    if($p == 0.25){
        $sql2 = "SELECT * FROM comprado where idcompra=$a order by id desc limit 1";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
        ?>
        <div class="medio">
        <div class="medio2">
            <div class="foto1"><img src="imagen/<?php echo $row2['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row2['nombre'] ?></div>
            <div class="texto1"><?php echo $row2['descripcion'] ?></div>
            <div class="precio"><p class="prec"><?php echo $row2['precio'] ?>€</p></div>
        </div>
        </div>
        <?php
    }
    if($p == 0.75){
        $sql1 = "SELECT * FROM comprado where idcompra=$a order by id desc limit 1";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
        $sql11 = "SELECT * FROM comprado where idcompra=$a order by id desc limit 1,1";
        $result11 = $conn->query($sql11);
        $row11 = $result11->fetch_assoc();
        $sql21 = "SELECT * FROM comprado where idcompra=$a order by id desc limit 2,1";
        $result21 = $conn->query($sql21);
        $row21 = $result21->fetch_assoc();
        ?>
        <div class="medio">
        <div class="medio2">
            <div class="foto1"><img src="imagen/<?php echo $row1['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row1['nombre'] ?></div>
            <div class="texto1"><?php echo $row1['descripcion'] ?></div>
            <div class="precio"><p class="prec"><?php echo $row1['precio'] ?>€</p></div>
        </div>
        <div class="medio3">
            <div class="foto1"><img src="imagen/<?php echo $row11['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row11['nombre'] ?></div>
            <div class="texto1"><?php echo $row11['descripcion'] ?></div>
            <div class="precio"><p class="prec"><?php echo $row11['precio'] ?>€</p></div>
        </div>
        <div class="medio4">
            <div class="foto1"><img src="imagen/<?php echo $row21['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row21['nombre'] ?></div>
            <div class="texto1"><?php echo $row21['descripcion'] ?></div>
            <div class="precio1"><p class="prec"><?php echo $row21['precio'] ?>€</p></div>
        </div>
        </div>


</div> 
<?php
}


while($x>0){

    $f=  $f +1; 
    $k = $k +1;
    $b = $b +1;
    $h = $h +1;
?>
<script>
    function a<?php echo $k;?>()
    {
    document.getElementById(<?php echo $k;?>).style.display="block";
    }
    function a<?php echo $b;?>()
    {
    document.getElementById(<?php echo $b;?>).style.display="block";
    }
    function a<?php echo $h;?>()
    {
    document.getElementById(<?php echo $h;?>).style.display="block";
    }
    function a<?php echo $f;?>()
    {
    document.getElementById(<?php echo $f;?>).style.display="block";
    }

</script>

<?php
$x= $x-1;

}

?>

<script>
function change()
{
document.getElementById("d").style.display="block";
}
function change2()
{
document.getElementById("a").style.display="block";
document.getElementById("ab").style.display="none";
}
function change3()
{
document.getElementById("b").style.display="block";
document.getElementById("ba").style.display="none";
}
function change4()
{
document.getElementById("c").style.display="block";
document.getElementById("ca").style.display="none";
}
function change5()
{
document.getElementById("e").style.display="block";
document.getElementById("ea").style.display="none";
}
function change6()
{
document.getElementById("f").style.display="block";
document.getElementById("fa").style.display="none";
}
function change7()
{
document.getElementById("g").style.display="block";
document.getElementById("ga").style.display="none";
}

</script>

<?php

}}else{
    ?><div class='centro'><h1 class='centro2'><a href="login2.html">DEBES INICIAR SESION PRIMERO</a></h1></div><?php   
    echo '<script>
    setTimeout(function(){ 
    window.location="login2.php"
    }, 5000);
    </script>';
}
?>