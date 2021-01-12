<?php

$an = '2017';
$zi = rand(1,31);
$luna = rand(1,12);

printf('Ziua generata este: %s ', $luna.'-'.$zi.'-'.$an);
printf('Ziua generata este: %02d-%02d-%d ', $luna,$zi,$an);