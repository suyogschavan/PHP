<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type='text/css' href="style.css">
</head>
<body>
    <div id = "frm">
        <form action="process.php" method="POST">
        
        <p>
            <label for="">Username: </label>
            <input type="text" id='user' name="user" /> 
        </p>
        <p>
            <label for="">Password: </label>
            <input type="password" id='pass' name="pass" />
        </p>
        <p>
            <input type="submit" id = 'btn' name="login"/>
        </p>

        </form>
    </div>

</body>
</html>