<!DOCTYPE html>
<html>
<head>
    <title>program to find factorial_of_no</title>
</head>
<body>
    <form  method="POST">

        Enter a number : <input type="number" name="num">
        <input type="submit" name="submit">

    </form>
    
    <?php 
        if(isset($_POST["submit"])){

            $num = $_POST["num"];
            $temp = 1;

            for($i=$num; $i>=1; $i--){
                $temp = $temp * $i;
            }
            echo "<br>Factorial of number $num is $temp";

        }

    ?>
</body>
</html>