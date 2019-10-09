<?php
$vv = [[1,2,3],[4,5,6]];
$suma4=0;
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


echo $suma4;

