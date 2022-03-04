<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program to check wether given number is armstrong or not</title>
</head>
<body>
    <form method="POST">
        Enter the number : <input type="number" name="num">
        <input type="submit" name="submit">
    </form>

    <?php 
    
    if(isset($_POST['submit'])){

        $input = $_POST['num'];
        $sum = 0;
        $i = $input;
        while($i>0){
            $rem = $i % 10;
            $sum = $sum + ($rem * $rem*$rem);
            $i = $i/10;
        }

        if($input == $sum){
            echo "$input is an Armstrong no ";
        }else{
            echo "$input is not an Armstrong no.";
        }

    }

    ?>
</body>
</html>