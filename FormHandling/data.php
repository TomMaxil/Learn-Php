<?php

 // ----- with get method
/*
echo $_GET["uname"];
echo '<br>';
echo $_GET["uemail"];
*/

/*
$name = $_GET["uname"];
$email = $_GET["uemail"];

echo "Name is  ". $name ."& Email is ". $email;
*/


// ----- with post method

$name = $_POST["uname"];
$email = $_POST["uemail"];

echo "Name is " . $name . "& Email is ". $email;


?>