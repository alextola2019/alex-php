<?php
$vv = [[1,2,3],[4,5,6]];
$suma4=0;
$suma1=0;
$suma2=0;
$suma3=0;
$z=0;
$p=0;



while(count($vv) > $z){

    foreach ($vv[$z] as $x)   {
    $suma4 = $suma4 + $x;

    $p++;
        if(count($vv[$z]) == $p ){
        $z++;
        $p=0;
        };

    };
};



foreach($vv as $z){

    foreach ($z as $x)   {

        $suma1 = $suma1 + $x;

    };
    
};


for($z=0; count($vv) > $z; $z++){
    for($x=0; count($vv[$z]) > $x; $x++){
        $suma2 = $suma2 + $vv[$z][$x];
        
    }
}



$z=0;
while(count($vv) > $z){
    $x=0;
    while(count($vv[$z]) > $x){
        $suma3 = $suma3 + $vv[$z][$x];
        $x++;
    }    
    $z++;
}




echo $suma1 . "<br>";
echo $suma2 . "<br>";
echo $suma3 . "<br>";
echo $suma4;