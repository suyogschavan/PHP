
<!-- Write a program in php by using function to calculate the area of rectangle -->

<html>
<body>
<form method = "POST">
    Enter the Height : <input type="number" name="h"><br><br>
    Enter the Width  : <input type="number" name="w"><br><br>
    <input type="submit" name="submit">

</form>
<?php 
    
    function area($h, $w){
        return $h*$w;
    }

    if(isset($_POST['submit'])){
        $height = $_POST['h'];
        $width = $_POST['w'];

        echo "<br><br>Area of Rectangle : ".area($height, $width);

    }
    ?>

</body>
</html>