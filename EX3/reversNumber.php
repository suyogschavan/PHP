<!DOCTYPE html>
<html >
<head>
    <title>program to revers the number </title>
</head>
<body>
    <form method="POST">
       Enter the number you want to revers : 
        <input type="number" name="num">
        <input type="submit" name="submit">
    </form>
    <?php 
    
    if(isset($_POST['submit'])){

        $input = $_POST['num'];
        $rev = 0;
        $output = $input;
        
        while ($input > 1) {
            $rem = $input % 10;
            $rev = ($rev * 10) + $rem;
            $input = ($input / 10); 
        }
        echo "Reverse number of $output is : $rev";

    }
    
    ?>
</body>
</html>