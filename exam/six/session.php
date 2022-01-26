<?php
include 'conn.php';
// open

$sql = 'select * from timestamp where opened is null';
$result = $conn->query($sql);
if (empty($result)){
    $open = null;
}

// close
$sql = 'select * from timestamp where closed is null';
$result = $conn->query($sql);
if (empty($result)){
    $close = null;
}
if (isset($_GET['session'])){
    if ($_GET['session'] == 'open' || $_GET['session'] == 'close'){
        if ($open == null){
            header('Location: index.php?session=opene');
        }elseif ($close == null) {
            header('Location: index.php?session=closee');
        } else {
            header('Location: index.php');
        }
    } else {
        if ($_GET['session'] == 'open'){
            $sql = 'INSERT INTO `timestamp`(`opened`) VALUES (CURRENT_TIMESTAMP())';
            $result = $conn->query($sql);
            header('Location: index.php?session=close');
        } elseif ($_GET['session'] == 'close'){
            $sql = 'INSERT INTO `timestamp`(`closed`) VALUES (CURRENT_TIMESTAMP())';
            $result = $conn->query($sql);
            header('Location: index.php?session=open');
        }
    }
} else {
    header('Location: index.php');
}
?>