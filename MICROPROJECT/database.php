<?php 



$username = "root";
$password = "";
$server = "localhost";
$db = "first_data";

$connection = mysqli_connect($server, $username, $password, $db);

if($connection){
    echo "Connection Successful ";
}else {
    echo "No connection";
}


?>