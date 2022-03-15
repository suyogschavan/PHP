<?php 


$str1 = " Hello my name is Suyog";
    $wordcount = 0;

    for($i = 0; $i < strlen($str1); $i++){
         if($str1[$i]!= ' ' ){
             $wordcount++;
         }
    }

    echo "The number of words in string ".$wordcount;

?>