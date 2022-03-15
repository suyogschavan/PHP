<!DOCTYPE html>
<html lang="en">
<head>
    <title>a program to calculate the length of string </title>
</head>
<body>
    <form action="" method="POST">
    Enter the string : <input type="text" name="str">
    <input type="submit" name="submit">
    </form>

    <?php
    
    $str = $_POST['str'];
    echo strlen($str);
    
    ?>
</body>
</html>