<?php
spl_autoload_register(function ($class) {
   //
  // require_once 'classes/'.str_replace('\\','/',$class).'.php';
    //require ('classes/'.$class . '.php');
    $prefix = 'MyProject';
    $len = strlen($prefix);
    $relative_class = substr(str_replace('\\','/',$class), $len);
    require 'classes'  . $relative_class. '.php';
});