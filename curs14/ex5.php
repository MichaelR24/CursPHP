<?php
/*
namespace MyProject; - Definire namespace MyProject
namespace MyProject\Security\Cryptography; - Definire namespace in cascada /ierarhie de nume
namespace MyProject { ... } - Definire namespace interior cu { }.

*/
//namespace  - "spatiul de nume";

namespace  MyFunction;
const PI=3.14;

function myTest(){
    echo "folosesc functia mea myTest";
}
myTest();

namespace  YourFunction;
const PI=3.15;
$x=7;
function myTest(){
    echo "folosesc functia ta myTest";
}

myTest();