<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demonostrate different builtin string functions </title>
</head>
<body>
    <form action="" method="POST">
    Enter the string : <input type="text" name="str" size = "50">
    <input type="submit" name="submit">
    </form>

    <?php
    
    $str1= $_POST['str'];

    if(isset($_POST['submit'])){
        
    // str1_word_count()
    echo "<br><br>#1. str_word_count() -------- Counts the number of words in string <br>";
    echo "Words in string : ".str_word_count($str1);
    
    // strtoupper()
    echo "<br><br>#2. strtoupper() -------- Converts the string to Upper case  <br>";
    echo "String in Upper case : ".strtoupper($str1);
    
    // strlen()
    echo "<br><br>#3. strlen() -------- Returns the length of the string  <br>";
    echo "Length of the String : ".strlen($str1);
    
    // strtolower()
    echo "<br><br>#4. strtolower() -------- Converts the string to Lower case  <br>";
    echo "String in Lower case : ".strtolower($str1);
    
    // ucwords()
    echo "<br><br>#5. ucwords() -------- Converts the first charactor of a string to Upper case  <br>";
    echo "Upper case to each word : ".ucwords($str1);
    
    // strrev()
    echo "<br><br>#6. strrev() -------- Reverses the string  <br>";
    echo "Reversed string : ".strrev($str1);
    
    // str_replace()
    echo "<br><br>#7. str_replace() -------- Replaces the original string by another string<br>";
    echo "Replaced String : ".str_replace("Suyog","Suyog_Replaced", $str1);

    // str_repeat()    
    echo "<br><br>#8. str_repeat() -------- It repeats a string a specified number of times<br>";
    echo "Repeated String : ".str_repeat("$str1",3);
    
    // strpos()
    echo "<br><br>#9. strpos() -------- It finds the position of the first occurance of a string inside another string<br>";
    echo "Position of String Suyog : ".strpos($str1, "Suyog");


}
    ?>
</body>
</html>