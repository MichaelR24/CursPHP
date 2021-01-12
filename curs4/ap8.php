<?php
function &modifica($a =3){ 
    $a = $a +15;
    return $a; 
}

$b = 0;
$c =  &modifica($b);
echo $c;   