<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check weather number is possitive or negetive</title>
</head>
<body> 
    <form method="post">
        Enter the number : <input type="number" name="n1"/><br/>
        <input type="submit", name=" submit">
    </form> 

<?php
    if(isset($_POST['submit'])){
        $num = $_POST['n1'];

        if ($num > 0){
            echo "$num is Positive number";
        } else {
            echo "$num is negetive number";
        }
    }
?>

</body>



</html>