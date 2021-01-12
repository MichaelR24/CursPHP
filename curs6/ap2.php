<?php
$sir = 'LOREM ipsum dolor sit amet, consectetur adipisicing 
elit, sed ordo eiusmod TEMPOR';
echo stripos($sir,'or');
echo strripos($sir,'or');



if(stripos($sir,'or') !==false){
    echo 'Am gasit';
}
else{
    echo 'Nu ma gasit';
}