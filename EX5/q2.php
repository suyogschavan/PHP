<!DOCTYPE html>
<html lang="en">
<head>
    <title>a program to calculate the length string </title>
</head>
<body>
    <form action="" method="POST">
    Enter the string : <input type="text" name="str">
    <input type="submit" name="submit">
    </form>

    <?php
    
    $str = $_POST['str'];
    echo "Length of the String : ".strlen($str);
    
    ?>
</body>
</html>