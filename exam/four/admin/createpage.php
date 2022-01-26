<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Create New Item</h1>
    <?php 
       include 'create.php';
    ?>
    <form action="createpage.php" method="post">
        <label for="title">
            Title:
            <input type="text" name="title" id="title">
        </label><br><br>
        <label for="desc">
            Description
            <input type="text" name="desc" id="desc">
        </label><br><br>
        <input class="submit" type="submit" name="submit" value="Create">
    </form>
</body>
</html>