<?php


for($i = 0; $i <= 10;$i++){
echo $i;
echo "<br>";
}


$table = 2;
for($a=1; $a <= 10;$a++){
   echo $table . "x" . $a . "=" . $table * $a;
   echo "<br>";
}

/*Jump Statements*/

for($i = 0; $i <= 10;$i++){
    echo $i;
    echo "<br>";
    if($i == 5){
      break;  
    }
    
}

for($i = 0; $i <= 10;$i++){
    if($i == 5){
      continue;
    }
    echo $i;
    echo "<br>";
    
}


?>