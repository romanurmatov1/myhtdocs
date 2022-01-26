<?php
session_start();
if (isset($_GET['session'])){
    $_SESSION['button'] = $_GET['session'];
} else {
    $_SESSION['button'] = 'open';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
     if ($_SESSION['button'] == 'opene'){
         echo 'dastlab open qiling<br>';
         $_SESSION['button'] = 'open';  
     } elseif ($_SESSION['button'] == 'closee') {
        echo 'dastlab close qiling<br>';
        $_SESSION['button'] = 'close';  
     }

     if ($_SESSION['button'] == 'open'){
        echo '<a href="session.php?session=open">Open</a>';
     } elseif ($_SESSION['button'] == 'close'){
         echo '<a href="session.php?session=close">Close</a>';
     } else {
         echo 'damingni ol';
     }

    ?>
</body>
</html>