<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Change Your Item</h1>
    <?php 
       include 'change.php';
       include 'conn.php';
       $id=$_GET['id'];
       $sql="SELECT * FROM exam WHERE id=".$id;
       $result = mysqli_query($conn, $sql);
       if($result){   
        $row=mysqli_fetch_assoc($result);
        $title=$row['title'];
        $desc=$row['description'];
        }
    ?>
    <form action="change.php?id=<?php echo $id; ?>" method="post">
        <label for="title">
            Title:
            <input type="text" name="title" id="title" value="<?php echo $title; ?>">
        </label><br><br>
        <label for="desc">
            Description
            <input type="text" name="desc" id="desc" value="<?php echo $desc; ?>">
        </label><br><br>
        <input class="submit" type="submit" name="change" value="Change" >
    </form>
</body>
</html>