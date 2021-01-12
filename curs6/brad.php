<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .instalatie{
            color: red;
            -webkit-animation-name: instalatie; /* Safari 4.0 - 8.0 */
            -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
            animation-name: instalatie;
            animation-duration: 4s;
            animation-iteration-count: infinite;
        }

        /* Safari 4.0 - 8.0 */
        @-webkit-keyframes instalatie {
            0%   {color:red; }
            25%  {color:yellow; }
            50%  {color:blue; }
            75%  {color:aquamarine; }
            100% {color:orange; }
        }
        /* Standard syntax */
        @keyframes instalatie {
            0%   {color:red; }
            25%  {color:yellow; }
            50%  {color:blue; }
            75%  {color:aquamarine; }
            100% {color:orange; }
        }
        .instalatie1{
            color: red;
            -webkit-animation-name: instalatie1; /* Safari 4.0 - 8.0 */
            -webkit-animation-duration: 5s; /* Safari 4.0 - 8.0 */
            animation-name: instalatie1;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        /* Safari 4.0 - 8.0 */
        @-webkit-keyframes instalatie1 {
            0%   {color:red; }
            50%  {color:orange; }
            100% {color:blue; }
        }
        /* Standard syntax */
        @keyframes instalatie1 {
            0%   {color:red; }
            50%  {color:orange; }
            100% {color:blue; }
        }
    </style>
</head>
<body>
<!-- <script type="text/javascript">
 var a=40,b=8,c=13,o="<div style='font-family:monospace;text-align:center;color:#094'>",w=1,x=0,y="|#|<br>";for(i=1;i<a;i++){for(j=0;j<w;j++){x%c==0?o+="<span style='color:#D00'>O</span>":o+="+";x++;}i%b==0?w-=4:w+=2;o+="<br>";}document.write(o+"<span style='color:#640'>"+y+y+y+"</span></div>");
</script> -->
<?php
$a = 40; // numar de linii, inaltimea bradului
$b = 8; // numarul de linii pentru un triunghi
$c = 13;  // $c si $x vor stabili cat de des apar decoratiunile / instalatia
$x = 0;
$brad = "<div style='font-family:monospace;text-align:center;color:#094'>";
$w = 1; // numarul ce va determina lungimea unei linii

$y = "|#|<br>";

for ($i = 1; $i < $a; $i++) {
    for ($j = 0; $j < $w; $j++) {
        if($x % $c == 0 ){
            $brad .= "<span class='instalatie'>O</span>";
        }
        elseif($x % $c == 2){
            $brad .= "<span class='instalatie1'>@</span>";
        }
        else{
            $brad .= "+";
        }
        $x++;
    }
    $i % $b == 0 ? $w -= 4 : $w += 2;
    $brad .= "<br>";
}
echo $brad . "<span style='color:#640;text-shadow:2px 2px 2px black;'>$y$y$y$y</span></div>";
?>
</body>
</html>