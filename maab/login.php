<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <?php
    session_start();
    include 'database.php';
        if (isset($_POST['submit'])){
            if (!empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['role'])){
                $role = $_POST['role'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "select * from $role where username = '$username' and password = '$password'";
                $results = mysqli_query($conn, $query);
                if (mysqli_num_rows($results) == 1) {
                    $_SESSION['role'] = $role;
                    $_SESSION['username'] = $username;
                    header('Location: role.php');
                } else {
                    echo "hisob ruyhatga olinmagan";
                }
            } else {
                echo 'bosh joylarni toldiring';
            }
        }
    ?>
    <form action="login.php" method="post">
        <div style="border: 1px solid black;">
        <label>
            Student: 
            <input type="radio" name="role" value="student">
        </label>
        <label>
            Teacher: 
            <input type="radio" name="role" value="teacher">
        </label>
        <label>
            Manager: 
            <input type="radio" name="role" value="manager">
        </label>
        </div><br><br>


        <label for="username">
            Username:
            <input type="text" name="username">
        </label><br><br>
        <label for="password">
            Password:
            <input type="password" name="password">
        </label><br><br>
        <input type="submit" name="submit" value="LogIN">
    </form>
</body>
</html>