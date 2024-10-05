<?php
include 'database.php';
if(isset($_POST['signUp'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=md5($password); //for converting password to hexadecimal number

    $checkname="SELECT * From users where email='$username'";
    $result=$conn->query($checkname);
    if($result->num_rows>0){
        echo"Username address already exists";
}
else{
 $insertQuery="INSERT INTO users(username,email,password)
            VALUES('$username','$email','$password')";
 if($conn->query($insertQuery)==TRUE){
    header("location:login.php");
 }
 else{
    echo "Error".$conn->error;
 }
}
}
?>