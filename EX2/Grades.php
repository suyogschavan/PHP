<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program to find grades of 3 subjects by using if else ladder</title>
</head>
<body>
    <form method="post">
        Enter the marks of Maths : <input type="number" name="M_m"><br><br>
        Enter the marks of Science : <input type="number" name="M_s"><br><br>
        Enter the marks of Language : <input type="number" name="M_l"><br><br>

        <input type="submit" name="submit">
        
    </form>
    <?php 
    
        $Maths = $_POST["M_m"];
        $Sci = $_POST["M_s"];
        $Lang = $_POST["M_l"];

        $avg = (($Maths + $Sci + $Lang)/3);
        
        if($avg>50){
            // echo " You are Passed";
            if($avg <= 60){
                echo " You got D Grade";
            } elseif($avg <=70){
                echo " You got C Grade";
            }elseif($avg <=85){
                echo " You got B Grade";
            }else{
                echo " You got A Grade";
            }
        }else{
            echo "You are Failed";
        }
        
    ?>
</body>
</html>