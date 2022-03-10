

<?php 

$student1 = "Suyog";
$student2 = "Ritesh";
$student3 = "Rushikesh";

// compact function
$combine = compact("student1", "student2", "student3");
echo "#1. by using Compact function <br>";
print_r($combine);

?>