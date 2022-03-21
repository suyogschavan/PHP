<!DOCTYPE html>
<html lang="en">
<head>
    <title>Micro Project</title>
</head>
<body>
    <form method="POST">  
        Enter number1 : <input type="number" name="n1" placeholder="Enter the number ">
        <br><br>Enter number2 : <input type="number" name="n2">
        
        
        
        <br><br >
        <div>
        Operation : <select name="operation" id="">
                <option value="add">ADD</option>
                <option value="sub">SUB</option>
                <option value="mult">MULT</option>
                <option value="div">DIV</option>
            </select>
        </div>
        
        
        
        <br><br ><input type="submit" name = "submit" value="submit"><br><br>


    </form>


<?php 
    
    if(isset($_POST['submit'])){
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        // echo $num1.$num2;
        $operation = $_POST['operation'];

        switch($operation){
            case "add":$sum = $num1+$num2;
                echo "The addition of two number is : ".$sum;
                break;
            case "sub": $sub = $num1-$num2;
                echo "The substraction of two number is : ".$sub;
                break;
            case "mult": $mult = $num1*$num2;
                echo "The Multiplication of two number is : ".$mult;
                break;
            case "div": $div = $num1/$num2;
                echo "The Division of two number is : ".$div;
                break;

            default: echo "Sorry dont get it";
        }
    }
    
?>

</body>
</html>