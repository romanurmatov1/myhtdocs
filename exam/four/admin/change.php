<?php
    $id=$_GET['id'];
    if (isset($_POST['change'])){
        if (empty($_POST["title"]) || empty($_POST["desc"])){
            // Set session variables
            echo "Please fill in the fields";
            header("location: editpage.php?id=$id");
        } else {
            $title=$_POST['title'];
            $desc=$_POST['desc'];
            
            include 'conn.php';
            $sql="UPDATE exam SET title='$title', description='$desc' WHERE id=$id";
            $result=mysqli_query($conn, $sql);

            if($result){
                header("location: index.php");

            }}}
    

?>