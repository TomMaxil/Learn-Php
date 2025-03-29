<?php

//Non Parametarize Function

function Hello(){
    echo "Happy Day";
}

Hello();

//Parametarize Function


function add($x, $y){
         echo $x + $y;
}

add(20, 57);


//Arrow Function In Php

$a = 5;
$fn = fn($x) => fn($y) => $a * $x + $y;
var_export($fn(5)(10));

?>