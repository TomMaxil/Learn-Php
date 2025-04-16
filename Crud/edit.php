<?php
include('config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>

  <?php
   
   $std_id = $_GET['stdid'];

   $query = "SELECT * FROM tbl_students WHERE id =$std_id";
   $result = mysqli_query($connection,$query);
   $std = mysqli_fetch_assoc($result);

//    echo $query;
//    exit;
  
  ?>


  <body>
    <div class ="container">
        <div class ="row">
            <div class ="col-md-12 p-3">
            <h2>Edit</h2> 
            <a href="index.php" class ="btn btn-success">Back</a>
            <form action="update.php" method="post" class="p-5">
                <input type="text" name="stdid" value="<?php echo $std['id']; ?>" hidden>
                <label for="form-label">Name</label>
                <input type="text" class ="form-control" name="stdname"
                value="<?php echo $std['sname']; ?>">

                <label for="form-label">Email</label>
                <input type="email" class ="form-control" name="stdemail"
                value="<?php echo $std['semail']; ?>">

                <input type="submit" name="btnupdate" class="btn btn-outline-primary mt-2" value="Update">
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>