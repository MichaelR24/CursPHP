<?php
$nr = rand (1,10);
switch ($nr) {
    case 2:
    case 4:
    case 6:
    case 8:
    case 10:
        echo 'numarul '.$nr.' este par';
        break;
    default:
        echo "numarul $nr este impar";
        break;
}