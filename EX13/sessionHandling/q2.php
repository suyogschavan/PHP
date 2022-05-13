<?php 

session_start();

?>

<html>
    <body>
        <form action="session2.php">
            <?php 
            $_SESSION["user"] = "Suyog Chavan";
            echo "Session information are set successfully. <br>"
            ?>
            <input type="submit" name="submit">
        </form>
    </body>
</html>