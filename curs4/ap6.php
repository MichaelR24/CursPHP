<?php

function modifica(&$a=3){
    $a = $a +15;
}

$b = 0;

modifica($b);
echo $b;