
<!-- Write a simple php code to perform addition and substraction by using parameterized functions -->

<!DOCTYPE html>
<html>
<head>
    <title>EX 6 Q1 by Suyog</title>
</head>
<body>
    <form action="Q2.php" method="POST">
    Enter the numbers : <input type="number" name = "num1">
    <input type="number" name = "num2">
    <br><br>
    what operation you want to perform : 
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Substraction</option>
    </select>
<br><br>
    <input type="submit" name="submit"><br><br>
    </form>

    <?php 
    
        function sum($a, $b){
            return $a+$b;
        }
    
        function sub($a, $b){
            return $a-$b;
        }



    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $operation = $_POST['operation'];

        switch ($operation) {
            case 'add':
                echo "Addition of ".$num1." and ".$num2 .' is : '.sum($num1, $num2);
                break;
                case 'sub':
                    echo "Substraction of ".$num1." and ".$num2 .' is : '.sub($num1, $num2);
                break;
            default:
                break;
        }
    }
    
    ?>

</body>
</html>