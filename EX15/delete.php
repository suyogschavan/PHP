
<html>
    <body>
        <form action="" method="POST">
            Enter the Roll no of Student you want to delete from record : 
            <br><input type="number" name="roll"><br><br>
            <input type="submit" name="submit" value="delete">
<?php 

require("connection.php");
if(isset($_POST['submit'])){

    $roll = $_POST['roll'];
    $query = "DELETE FROM STUDENTS WHERE ROLL_NO='$roll'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Student Deleted Successfully!!!";
    }else {
        echo "Error";
    }

}

?>
        </form>
    </body>
</html>
