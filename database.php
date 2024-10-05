<?php
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="businessdb";
$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
if($conn){
    echo"Sucessfully connected to database";
}
else{
    echo"Failed to connect to database";
}
?>