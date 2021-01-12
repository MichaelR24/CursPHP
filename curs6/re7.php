<?php

$cumparaturi = [
    '1' => "paine", 
    '2' => "oua", 
    '3' => "lapte", 
    '4' => 'masline', 
    '5' => 'cadouri'
];
echo "<pre>";
print_r($cumparaturi);
function dupa_lungime($e1, $e2)
{
    return strlen($e1) - strlen($e2);
}

uasort($cumparaturi, "dupa_lungime");
echo "<pre>";
print_r($cumparaturi);
