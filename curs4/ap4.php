<?php
function suma3($a=0,$b=10,$c=10){
    echo $a+$b+$c;
}

function suma4(... $z){
    //var_export($z);
    $suma=0;
    foreach($z as $s){
        if(is_numeric($s)){
            $suma = $suma + $s;
        }    
       
    }
    echo $suma;
}
// suma3(10,20);
// suma3(13,32);
// suma3(23,56);
// suma3(23,56);
// suma3(11,22,33,44);

suma4(11,22,33,44, 55, '25aaaa');