<?php

$a = array(1,2,3,4,5,6,7,8,9);
// reset($a);
// key($a);
// echo next(next(prev(next($a))));
// echo key($a);
reset($a);
next($a);
prev($a);
next($a);
echo next($a);
echo key($a);


?>