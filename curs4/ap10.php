<?php

$a = 10;
$a = 35;
$func = function () use ($a){
echo $a;
};
$func(); //10; 
 
$func(); //10
