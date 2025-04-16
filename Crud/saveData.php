<?php

$connection = mysqli_connect("localhost","root","","forwork");

//print_r($connection);

// if($connection){
//     echo "Database Connected";
// }else{
//     echo "Error In Database";
// }

if(isset($_POST["btnsave"])){
    $name = $_POST["stdname"];
    $email = $_POST["stdemail"];

echo $name;
echo'<br>';
echo $email;  

    $query = "INSERT INTO tbl_students (sname,semail) VALUES ('$name','$email')";

   $result = mysqli_query($connection,$query);

//    print_r($result);

   if($result){

    header('Location: index.php');
   }else{
    echo "Data Not Saved";
   }

}else{
    echo "Something Went Wrong";
}

?>