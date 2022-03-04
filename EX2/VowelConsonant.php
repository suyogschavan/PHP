<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program to find wether the charactor is Vowel or Consonant</title>
</head>
<body>
    <form  method="post">
        Enter the Charactor : <input type="text" name="char"><br><br>
        <input type="submit" name="submit"><br><br>
    </form>

    <?php 
    
        $char = $_POST['char'];

        switch($char){
            case 'a':
                echo "Vowel";
                break;
            case 'e':
                echo "Vowel";
                break;
            case 'i':
                echo "Vowel";
                break;
            case 'o':
                echo "Vowel";
                break;
            case 'u':
                echo "Vowel";
                break;
            case 'A':
                echo "Vowel";
                break;
            case 'E':
                echo "Vowel";
                break;
            case 'I':
                echo "Vowel";
                break;
            case 'O':
                echo "Vowel";
                break;
            case 'U':
                echo "Vowel";
                break;
            default :
                echo "Consonant";
        }


    ?>

</body>
</html>