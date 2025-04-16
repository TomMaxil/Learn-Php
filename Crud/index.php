<?php

include('config.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class ="container">
        <div class ="row">
            <div class ="col-md-12 p-3">
            <h1>CRUD Operations</h1>
            <a href="create.php" class ="btn btn-primary">Create</a>

            <?php
            $query ="SELECT * FROM tbl_students";

            $result = mysqli_query($connection,$query);

            // print_r($result-> fetch_all());
            // exit;

            if(mysqli_num_rows($result)){ ?>
                 <table class ="table table-hover mt-3">
                <thead>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                    
                </thead>
                <tbody>
                  <?php 
                  
                  while($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['sname']?></td>
                    <td><?php echo $row['semail']?></td>
                    <td>
                     <a href="view.php?stdid=<?php echo $row['id'] ?>" class="btn btn-outline-warning">View</a>
                    <a href="edit.php?stdid=<?php echo $row['id'] ?>" class="btn btn-outline-success">Edit</a> |
                    <a href="delete.php?stdid=<?php echo $row['id'] ?>" class="btn btn-outline-danger" onclick="return
                    Confirm('Are You Sure to delete?')">Delete</a></td>
                  </tr>
                <?php } ?>
                  
                </tbody>
            </table>
           <?php }else{
                 echo "No Record Found";
           } 
            ?>
            
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>