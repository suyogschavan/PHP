<?php 
require("connection.php");
?>
<html>
    <body>
        <form action="" method="POST">
            Enter the Roll No. <input type="number" name="roll"><br><br>
            Update the Name : <input type="text" name="name"><br><br>
            Update the Email : <input type="text" name="mail"><br><br>
            <input type="submit" name="submit" value="Update">
        </form>
        <?php 
        
        if(isset($_POST['submit'])){
            $roll = $_POST['roll'];
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $query = "UPDATE STUDENTS SET NAME='$name', EMAIL='$mail' WHERE ROLL_NO='$roll'";
            $data = mysqli_query($conn, $query);

            if ($data) {
                echo "Record Updated Successfully";
            }else {
                echo "Record not updated";
            }

        }else {
            echo "Click on Update Button to update the data.";
        }
        
        ?>
    </body>
</html>