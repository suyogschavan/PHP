<?php 

$student1 = "Suyog";
$student2 = "Ritesh";
$student3 = "Rushikesh";

// compact function
$combine = compact("student1", "student2", "student3");
echo "#1. by using Compact function <br>";
print_r($combine);

// Extract function
$extr = extract($combine);
echo "<br><br>#2. By using Extract function <br>";
echo "\$student1 is $student1 <br>\$student2 is $student2 <br>\$student3 is $student3 <br>";

?>