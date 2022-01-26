<?php
    include 'conn.php';
    if (isset($_POST['submit'])){
        if (empty($_POST["title"]) || empty($_POST["desc"])){
            // Set session variables
            echo "Please fill in the fields";
        } else {
            $title = $_POST["title"];
            $desc = $_POST["desc"];
            $sql = "INSERT INTO exam (title, description)
            VALUES ('$title', '$desc')";

            if ($conn->query($sql) === TRUE) {
                header('Location: index.php');
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

?>





