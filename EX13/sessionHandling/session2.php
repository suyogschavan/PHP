<?php

session_start();

?>

<html>
    <body>
        <?php 
        
        echo "Displaying Session Information: ".$_SESSION["user"];

        ?>

        <form action="destroy.php">
            click of the submit buttonn to distroy the Session <br><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>