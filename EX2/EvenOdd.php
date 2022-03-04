<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program to check given number is even or odd</title>
</head>
<body>
    <form method="post">
        Enter the number : <input type="number" name="n1">
        <input type="submit" name="submit">
        <br>
    </form>
    
    <?php 
    
        if(isset($_POST['submit'])){
            $number = $_POST['n1'];
            if($number % 2 == 0){
                echo " $number is Even number ";
            }else{
                echo " $number is Odd number ";
            }
        }

    ?>

</body>
</html>