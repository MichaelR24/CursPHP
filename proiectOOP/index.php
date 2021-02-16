<?php
include("Carti.php");
$carte = new Carti();

$carte->setTitlu('Carte de OOP PHP 7');
$carte->setAutor('Autor Anonim');
echo $carte->getTitlu();
echo $carte->getAutor();


?>