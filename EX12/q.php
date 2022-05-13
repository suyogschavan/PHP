<html>
    <body>
        <?php
        
        $nameErr = $passErr = $genderErr = $langErr = "";
        $name = $pass = $gender = $language = "";

        if (isset($_POST['submit'])) {
            if (empty($_POST['name'])) {
                $nameErr = "Name is required";
            } 
            // else{
            //     $name = $_POST['name'];
            // }
            if (empty($_POST['pass'])) {
                $passErr = "Password is required";
            } 
            // else{
            //     $pass = $_POST['pass'];
            // }
            if (empty($_POST['gender'])) {
                $genderErr = "Gender is required";
            } 
            // else{
            //     $gender = $_POST['gender'];
            // }
            if (empty($_POST['lang'])) {
                $langErr = "Language is required";
            } 
            // else{
            //     $language = $_POST['lang'];
            // }
            
        }

        ?>

<form method="POST">
            <h1>Form Validation</h1>
            <br><br>
            Enter Your UserName : <input type="text" placeholder="Enter username" name="name" pattern="^[A-Za-z][A-Za-z0-9_]{5,29}$" >*
            <?php echo "$nameErr"; ?><br><br> 
            
            Enter the Password : <input type="password" placeholder="Enter Password" name="pass" > *
            <?php echo "$passErr"; ?>
            <br><br> Select Gender : *
            <?php echo "$genderErr"; ?>
            <input type="radio" name="gender" > Male 
            <input type="radio" name="gender" > Female <br><br>
           Known Languages : *
           <?php echo "$langErr"; ?>
           <input type="checkbox" name="lang"> English
           <input type="checkbox" name="lang"> Marathi
           <input type="checkbox" name="lang"> Hindi
           <br><br><input type="submit" name="submit">
        </form>


    </body>
</html>