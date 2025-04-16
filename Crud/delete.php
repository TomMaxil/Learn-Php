<?php
include('config.php');

$std_id = $_GET['stdid'];

$query = "DELETE FROM tbl_students WHERE id = $std_id";
$result = mysqli_query($connection,$query);

if($result){
    header("Location: index.php");
}else{
    echo "Error While Deleteing";
}
?>