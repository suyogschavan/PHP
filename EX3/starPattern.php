
<!DOCTYPE html>
<html lang="en">
<head>
    <title>* patterns</title>
</head>
<body>
    <form action="" method="POST">
        Enter the number of Rows : <input type="number" name="row">
        <input type="submit" name="submit">
    </form>
    <?php

    $Row = $_POST["row"];

    for($i=0; $i<=$Row; $i++){
        for($j=1; $j<=$i; $j++){
            echo "* ";
        }
        echo "* <br>";
    }

?>
</body>
</html>


