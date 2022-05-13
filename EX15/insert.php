<html>
    <body>
        <form action="" method="POST">
            Roll No. <input type="number" name="rollno"><br><br>
            Name : <input type="text" name="name"><br><br>
            Email : <input type="text" name="mail"><br><br>
            <input type="submit" name="submit" value="submit">
        </form>

        <?php 
        include("connection.php");
        if(isset($_POST['submit'])){
            $id = $_POST['rollno'];
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $query = "INSERT INTO STUDENTS VALUES ('$id', '$name', '$mail')";
            $data = mysqli_query($conn, $query);

            if ($data) {
                echo "Data inserted into database";
            }
        }
        
        ?>


    </body>
</html>