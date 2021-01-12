<?php

$tabloul=array(
    "oras"=>"Bucuresti", 
    'a'=>10, 
    89
); 
echo "<pre>";
var_export($tabloul);
$tablou2=array(
    "abac",
    'a'=>"computer",
    "oras"=>"Braila",
    4
); 
var_export($tablou2);
asort($tablou2);
var_export($tablou2);
$rezultat = array_merge($tablou2, $tabloul); 
print_r($rezultat);