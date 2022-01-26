<?php
    session_start();

// require '../login.php';
if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student</title>
</head>
<body>
    <?php
        echo "Welcome ". $_SESSION['username']."";
        echo "You are ". $_SESSION['role']."";
    ?>
</body>
</html>