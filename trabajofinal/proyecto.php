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
$l=$_SESSION['z'];

       

?>

<style>

    .primero{
        width:250px;
        height:100px;
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
    float:right;
}
.topside{
    width:100%;
    height:100px;
    background-image:url(imagen/madera.jpg)
}
.letra{
    width:100px;
    height:100px;
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
}
.medio2{
    width:25%;
    height:300px;
    float:left;
}
.medio3{
    width:25%;
    height:300px;
    margin-left:25%;

}
.medio4{
    width:24.7%;
    height:300px;
    margin-left:50%;
    margin-top:-302px;
}
.medio5{
    width:25%;
    height:300px;
    float:right;
    margin-top:-302px;
}
.medio{
    width:90%;
    height:300px;
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
    font-size:18px;
}
.nombre{
    width:100%;
    height:30px;
    font-size:24px;
}
.precio{
    width:40%;
    height:63px;
    float:right;
    text-align:center;
    font-size:30px;
}
.precio1{
    width:40%;
    height:63px;
    margin-left:60%;
}
.prec{
    position:absolute;
    margin-top:-1px;
    padding-top:15px;
    margin-left:2%;
    font-size:30px;
}
.ocult{
    display:none;
}
.compra{
    position:absolute;
    width:13.4%;
    height:66px;
}
.com{
    width:100%;
    height:100%;
}
.com:hover{
    cursor:pointer;
    background-color:grey;
}
.letra1{
    margin-top:-40px;
    margin-left:22px;
    position:absolute;
    color:white;
    font-size:70px;
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
            <li><a class="active" href="proyecto.php">Tienda</a></li>
            <li><a href="comprar.php">Mis Compras</a></li>
            <li><a href="ventas.php">Mis Ventas</a></li>
            <div class="boton">
                <button class="letra"><h1 class="letra1"><?php echo strtoupper($_SESSION['z'])?></h1></button>
                <div class="menu2">
                    <a href="cerrarsesion.php">cerrar sesion</a>
                </div> 
            </div>
        </ul>
    </div>
    <div class="medio1">

    </div>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyecto";


    $conn = new mysqli($servername, $username, $password, $dbname);


    $sql = "SELECT * FROM inventario";
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



$sql5 = "SELECT * FROM inventario limit $x";
$result5 = $conn->query($sql5);
$sql6 = "SELECT * FROM inventario limit $x, $x";
$result6 = $conn->query($sql6);
$sql7 = "SELECT * FROM inventario limit $o, $x";
$result7 = $conn->query($sql7);
$sql8 = "SELECT * FROM inventario limit $i, $x";
$result8 = $conn->query($sql8);
$p = $y - $x;



    if ($result->num_rows > 3) {
    while(($row5 = $result5->fetch_assoc() ) && ($row6 = $result6->fetch_assoc() ) && ($row7 = $result7->fetch_assoc() ) && ($row8 = $result8->fetch_assoc() )) {
        
        ?>
        <div class="medio">
        <div class="medio2">
            <div class="foto1"><img src="imagen/<?php echo $row5['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row5['nombre'] ?></div>
            <div class="texto1"><?php echo $row5['descripcion'] ?></div>
            <form class="compra" id="compra" action='compra.php' method='POST'>
            <input class="ocult" type='text' name='id' value="<?php echo $row5['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row5['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row5['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row5['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row5['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row5['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
            <div class="precio"><p class="prec"><?php echo $row5['precio'] ?>€</p></div>
        </div>
        <div class="medio3">
            <div class="foto1"><img src="imagen/<?php echo $row6['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row6['nombre'] ?></div>
            <div class="texto1"><?php echo $row6['descripcion'] ?></div>
            <form class="compra" id="compra1" action='compra.php' method='POST'>
            <input class="ocult" type='text' name='id' value="<?php echo $row6['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row6['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row6['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row6['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row6['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row6['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
            <div class="precio"><p class="prec"><?php echo $row6['precio'] ?>€</p></div>
        </div>
        <div class="medio4">
            <div class="foto1"><img src="imagen/<?php echo $row7['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row7['nombre'] ?></div>
            <div class="texto1"><?php echo $row7['descripcion'] ?></div>
            <form class="compra" id="compra2" action='compra.php' method='POST'>
            <input class="ocult" type='text' name='id' value="<?php echo $row7['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row7['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row7['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row7['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row7['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row7['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
            <div class="precio1"><p class="prec"><?php echo $row7['precio'] ?>€</p></div>
        </div>
        <div class="medio5">
            <div class="foto1"><img src="imagen/<?php echo $row8['imagen'] ?>"></div>
            <div class="nombre"><?php echo $row8['nombre'] ?></div>
            <div class="texto1"><?php echo $row8['descripcion'] ?></div>
            <form class="compra" id="compra3" action='compra.php' method='POST'>
            <input class="ocult" type='text' name='id' value="<?php echo $row8['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row8['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row8['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row8['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row8['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row8['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
            <div class="precio"><p class="prec"><?php echo $row8['precio'] ?>€</p></div>
        </div>
    </div>

        <?php

        
}}


if($p == 0.5){
    $sql3 = "SELECT * FROM inventario order by id desc limit 1";
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    $sql13 = "SELECT * FROM inventario order by id desc limit 1,1";
    $result13 = $conn->query($sql13);
    $row13 = $result13->fetch_assoc();
    ?>
    <div class="medio">
    <div class="medio2">
        <div class="foto1"><img src="imagen/<?php echo $row3['imagen'] ?>"></div>
        <div class="nombre"><?php echo $row3['nombre'] ?></div>
        <div class="texto1"><?php echo $row3['descripcion'] ?></div>
        <form class="compra" id="compra4" action='compra.php' method='POST'>
        <input class="ocult" type='text' name='id' value="<?php echo $row3['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row3['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row3['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row3['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row3['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row3['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
        <div class="precio"><p class="prec"><?php echo $row3['precio'] ?>€</p></div>
    </div>
    <div class="medio3">
        <div class="foto1"><img src="imagen/<?php echo $row13['imagen'] ?>"></div>
        <div class="nombre"><?php echo $row13['nombre'] ?></div>
        <div class="texto1"><?php echo $row13['descripcion'] ?></div>
        <form class="compra" id="compra5" action='compra.php' method='POST'>
            <input class="ocult" type='text' name='id' value="<?php echo $row13['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row13['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row13['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row13['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row13['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row13['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
        <div class="precio"><p class="prec"><?php echo $row13['precio'] ?>€</p></div>
        </div>
    </div>
    <?php

}
if($p == 0.25){
    $sql2 = "SELECT * FROM inventario order by id desc limit 1";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    ?>
    <div class="medio">
    <div class="medio2">
        <div class="foto1"><img src="imagen/<?php echo $row2['imagen'] ?>"></div>
        <div class="nombre"><?php echo $row2['nombre'] ?></div>
        <div class="texto1"><?php echo $row2['descripcion'] ?></div>
        <form class="compra" id="compra6" action='compra.php' method='POST'>
        <input class="ocult" type='text' name='id' value="<?php echo $row2['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row2['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row2['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row2['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row2['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row2['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
        <div class="precio"><p class="prec"><?php echo $row2['precio'] ?>€</p></div>
    </div>
    </div>
    <?php
}
if($p == 0.75){
    $sql1 = "SELECT * FROM inventario order by id desc limit 1";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();
    $sql11 = "SELECT * FROM inventario order by id desc limit 1,1";
    $result11 = $conn->query($sql11);
    $row11 = $result11->fetch_assoc();
    $sql21 = "SELECT * FROM inventario order by id desc limit 2,1";
    $result21 = $conn->query($sql21);
    $row21 = $result21->fetch_assoc();
    ?>
    <div class="medio">
    <div class="medio2">
        <div class="foto1"><img src="imagen/<?php echo $row1['imagen'] ?>"></div>
        <div class="nombre"><?php echo $row1['nombre'] ?></div>
        <div class="texto1"><?php echo $row1['descripcion'] ?></div>
        <form class="compra" id="compra7" action='compra.php' method='POST'>
        <input class="ocult" type='text' name='id' value="<?php echo $row1['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row1['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row1['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row1['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row1['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row1['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
        <div class="precio"><p class="prec"><?php echo $row1['precio'] ?>€</p></div>
    </div>
    <div class="medio3">
        <div class="foto1"><img src="imagen/<?php echo $row11['imagen'] ?>"></div>
        <div class="nombre"><?php echo $row11['nombre'] ?></div>
        <div class="texto1"><?php echo $row11['descripcion'] ?></div>
        <form class="compra" id="compra8" action='compra.php' method='POST'>
        <input class="ocult" type='text' name='id' value="<?php echo $row11['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row11['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row11['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row11['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row11['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row11['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
        <div class="precio"><p class="prec"><?php echo $row11['precio'] ?>€</p></div>
    </div>
    <div class="medio4">
        <div class="foto1"><img src="imagen/<?php echo $row21['imagen'] ?>"></div>
        <div class="nombre"><?php echo $row21['nombre'] ?></div>
        <div class="texto1"><?php echo $row21['descripcion'] ?></div>
        <form class="compra" id="compra9" action='compra.php' method='POST'>
        <input class="ocult" type='text' name='id' value="<?php echo $row21['id'] ?>">
            <input class="ocult" type='text' name='nombre' value="<?php echo $row21['nombre'] ?>">
            <input class="ocult" type='text' name='descripcion' value="<?php echo $row21['descripcion'] ?>">
            <input class="ocult" type='text' name='imagen' value="<?php echo $row21['imagen'] ?>">
            <input class="ocult" type='text' name='precio' value="<?php echo $row21['precio'] ?>">
            <input class="ocult" type='text' name='idusuario' value="<?php echo $row21['idusuario'] ?>">
            <input class="com" type='submit' value='comprar'>
            </form> 
        <div class="precio1"><p class="prec"><?php echo $row21['precio'] ?>€</p></div>
    </div>
    </div>
<?php


}}}else{
    ?><div class='centro'><h1 class='centro2'><a href="login2.html">DEBES INICIAR SESION PRIMERO</a></h1></div><?php   
    echo '<script>
    setTimeout(function(){ 
    window.location="login2.php"
    }, 5000);
    </script>';

}
?>


