<?php
include('config.php');



if(isset($_POST['btnupdate'])){

   $std_id = $_POST['stdid'];
   $std_name = $_POST['stdname'];
   $std_email = $_POST['stdemail'];
/* 
echo $std_id;
echo '<br>';
echo $std_name;
echo '<br>';
echo $std_email;   
*/

$query = "UPDATE tbl_students SET sname = '$std_name', semail= '$std_email' WHERE id = $std_id";
$result = mysqli_query($connection,$query);

if($result){
    header("Location: index.php");
}else{
    echo "Error While Updateing";
}
}else{
    echo "Something Went Wrong";
}
?>