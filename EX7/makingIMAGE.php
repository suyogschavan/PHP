<?php

$image = imagecreate(500, 300);
$background_color = imagecolorallocate($image, 225, 225, 225);  
$text_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, 5, 180, 100, "Suyog Chavan", $text_color);
imagestring($image, 2, 195, 120, "Roll no: 71", $text_color);
imagestring($image, 3, 170, 140, "MIT polytechinc, Pune", $text_color);
imagestring($image, 4, 170, 160, "PHP Image Creation", $text_color);

header("Content-Type: image/jpg");

imagepng($image);
imagedestroy($image);


?>