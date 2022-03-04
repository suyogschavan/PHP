<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table of any number</title>
</head>
<body>
 <form method="POST">
     Enter the number : <input type="number" name="num">
     <input type="submit" name="submit">
 </form>   
 <?php 

    
    if(isset($_POST['submit'])){
        $input = $_POST['num'];
        echo "Table of $input <br>";
        for($i = 1; $i <= 10; $i++){
            echo "$input x $i  :  ", $i*$input;
            echo '<br>';
        }

        
    }

 ?>
</body>
</html>