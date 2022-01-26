<?php
    session_start();
if(!isset($_SESSION['username'])){
    header('Location: ../login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher</title>
</head>
<body>
    <?php
        echo "Welcome ". $_SESSION['username']."<br>";
        echo "You are ". $_SESSION['role']."";
    ?>
</body>
</html>