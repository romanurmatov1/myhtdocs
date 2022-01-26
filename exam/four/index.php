<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, description FROM exam";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <main>
        <h3><?php echo $row["title"]; ?></h3>
        <p><?php echo $row["description"]; ?></p>
    </main><?php
  }
} ?>

</body>
</html>