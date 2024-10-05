<?php
session_start();
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hey this is a homepage
        <?php
        if(isset($_SESSION['username'])){
            $username=$_SESSION['username'];
            $query=mysqli_query($conn, "SELECT users.* from `users` where users.username='$username'");
            while($row=mysqli_fetch_array($query)){
                echo "Welcome $row[username]";
            }
        }
        ?>
        asdasd
    </p>
</body>
</html>