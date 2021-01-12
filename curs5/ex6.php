<?php
//declare(strict_types=1); // strict requirement
//6
//Functii supraîncarcate (overloading) in PHP
function myTest()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs \n";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "\n";
    }
}

//myTest(12,14,16,18,20);

function mesaj($name) {
    echo '$name, bine ai venit cursul de la PHP'; 
}
//mesaj("Robert");

// function changeValue(&$y) {
//     $y = $y + 5; 
// }
// $myNumber = 8; 
// changeValue($myNumber); 
// echo $myNumber;


//10

// function addNumbers(int $a, int $b, bool $printSum):bool {
// 	$sum = $a + $b;
// 	if ($printSum) {
//  		echo 'The sum is ' . $sum;
// 	}
//  	return $sum;
// }
// $suma = addNumbers(0, '0', true);
// echo $suma;

//a
// $x ** $y  x la puterea y
// function putere(int $x, int $n){
//     if(($x==0)&&($n>0)) return 0;
//     if(($x>0) &&($n==0)) return 1;
//     if(($x>0) &&($n>0)) return $x*putere($x,$n-1);

// }

// echo putere(3,2);



function drawTags($tag,$style,$content,$nr){
    for($i=0; $i <=$nr;$i++){
       echo "<$tag style='".$style."'> $content </$tag>"; 
    }


}

// drawTags(
//     "span",
//     "border: 1px solid red; background-color: yellow; color: red; margin: 4px; padding: 4px;",
//     "Salut!",
//     2
// );



function sah($nrlinii=8, $nrcoloane=8, $alb='white', $negru='black')
{
	echo "<table border=1 cellspacing=1 cellpadding=0>";
    for($l = 1; $l <= $nrlinii; $l++)
    {
		echo "<tr>";
        for($c = 1; $c <= $nrcoloane; $c++)
        {
			$culoare = (($l + $c) % 2 ? $alb : $negru);
			echo "<td bgcolor=$culoare width=30 height=30></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
//sah( 4,18,'#000000','#ffffff');


// $a = [ -5=>3,5,8];
// var_export($a);

$scores = array(5, 10, 15, 20, 25);
$padded = array_pad($scores, -10, 0); // $padded is now array(5, 10, 0, 0, 0)
 echo "<pre>";
var_export($padded);