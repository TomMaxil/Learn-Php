<?php

//Single Dimension Array syntax with array and Round braces 
// Index No :   0         1          2           3         4        5         6
$day = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
echo $day[3]; // Thursday

//Single Dimension Array syntax without array define with SQuare Brakets
$month = [1,2,3,4,5,6,7,8,9,10,11,12];
echo $month[5];//6

/*Associative ARRAY*/

$data = array(
     "Name" => "Bilal",
     "Age" => 19,
     "Education" => "Intermadiate",
);     

echo $data["Name"] . "<br>";    
echo $data["Age"] . "<br>";
echo $data["Education"] . "<br>";


/*Multidimention ARRAY*/

$Mydata = array(

    //Index NO :  0    1           2                  3    4
            array(1,"Bilal","bilal123@gmail.com",32295008,19), // 0
            array(2,"Faiq","faiq423@gmail.com",37033482,20),   // 1
            array(3,"Talha","talha327@gmail.com",3489772,22)   // 2
);
echo $Mydata[2][2]; //talha327@gmail.com


?>