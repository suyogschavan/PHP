<html>
    <body>
        <form action="" method="POST">
            <h1>Registration Form</h1>
            <br><br>
            Enter Your Name : <input type="text" placeholder="Enter name" name="name" pattern="[a-z A-Z]*" ><br><br> 
            Enter the Password : <input type="password" placeholder="Enter Password" name="password" > 
            <br><br> Select Gender : 
           <input type="radio" name="male" > Male 
           <input type="radio" name="female" > Female <br><br>
           Known Languages : 
           <input type="checkbox" name="eng"> English
           <input type="checkbox" name="mar"> Marathi
           <input type="checkbox" name="Hin"> Hindi
           <br><br><input type="submit" name="submit">
        </form>
        <?php
        
        if(isset($_POST['submit'])){
            if ($_POST['name'] != null && $_POST['password'] != null ) {
                echo "Registration Successful";
            } else{
                echo "Fill all the fields";
            }
        }
        
        ?>
    </body>
</html>