<?php

    $username = $_POST['user'];
    $pass = $_POST['pass'];
    

    //connect to the server and select database 
    $conn = mysqli_connect("localhost", "root", "");

    //mysql injection
    $username = stripslashes($username);
    $pass = stripslashes($pass);
    $username = mysqli_real_escape_string($conn, $username);
    $pass = mysqli_real_escape_string($conn, $pass);

    mysqli_select_db($conn, "login");

    // Quesry the database for user
    $result = mysqli_query($conn, "select * from users where username = '$username' and password = '$pass'")
                or die("Faild to query database ".mysql_error());

    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $pass){
        echo "Login success!!! Welcome ".$row['username'];
    } else {
        echo "Failed to login!";
    }




?>