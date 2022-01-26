<?php
// require './login.php';
    session_start();

    if ($_SESSION['role'] == 'student'){
        header('Location: ./student/index.php');
    } elseif ($_SESSION['role'] == 'teacher'){
        header('Location: ./teacher/index.php');
    } elseif ($_SESSION['role'] == 'maanger'){
        header('Location: ./manager/index.php');
    }

?>