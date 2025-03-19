<?php


$value1 = 15;
$value2 = 20;

echo ("Result of + :" . $value1 + $value2);
echo "<br>";
echo ("Result of - :" . $value1 - $value2);
echo "<br>";
echo ("Result of x :" . $value1 * $value2);
echo "<br>";
echo ("Result of / :" . $value1 / $value2);
echo "<br>";
echo ("Result of % :" . $value1 % $value2);
echo "<br>";


$value1 = 10;
$value2 = 10;

echo var_dump ($value1 == $value2);
echo var_dump ($value1 === $value2);
echo var_dump ($value1 != $value2);
echo var_dump ($value1 <> $value2);


$marks1 = 75;
$marks2 = 75;

$marks3 = 58;
$marks4 = 88;

echo var_dump ($marks1 == $marks2 AND $marks3 == $marks4);
echo var_dump ($marks1 == $marks2 OR $marks3 == $marks4);
echo var_dump ($marks1 == $marks2 || $marks3 == $marks4);
echo var_dump ($marks1 == $marks2 XOR $marks3 == $marks4);
echo var_dump (!($marks1 == $marks2 ) OR ! ($marks3 == $marks4));


/*Compound Assignment Operator*/

$a = 5;
echo $a;
$a += 5; //a = a + 5 Compound Assignment Operator
echo $a; // 10

$a *= 5; // a = a * 5
echo $a; // 50

$a -= 5; // a = a - 5
echo $a; // 45



?>