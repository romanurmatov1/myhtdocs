<?php include 'conn.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/4b566f0999.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<a href="createpage.php">
<div class="create">
    Create Item
</div></a>

<?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row['id'];
    ?>
    <main>
        <h3><?php echo $row["title"]; ?></h3>
        <p><?php echo $row["description"]; ?></p>
        <h5 class="remove"><a href="delete.php?id=<?php echo $id ?>"> Remove <i class="fas fa-trash-alt"></i></a></h5>
        <h5 class="change"><a href="editpage.php?id=<?php echo $id ?>">Change <i class="fas fa-trash-alt"></i></a></h5>

    </main><?php
  }
} ?>

</body>
</html>