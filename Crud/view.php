<?php
include('config.php');

$name = 'sname';
$email = 'semail';

if (isset($_GET['stdid'])) {
    $stdid = $_GET['stdid'];

    $query = "SELECT sname, semail FROM tbl_students WHERE id = $stdid";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['sname'];
        $email = $row['semail'];
    } else {
        $error = "Student not found.";
    }
} else {
    $error = "Invalid request.";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>View Student</h2>

    <div class="card">
      <div class="card-body">
        <?php if (isset($error)): ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php else: ?>
          <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
          <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <?php endif; ?>
        <a href="index.php" class="btn btn-primary">Back</a>
      </div>
    </div>
  </div>
</body>
</html>