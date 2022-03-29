<?php

    $img = '../IMG/img2.png';

    $image = imagecreatefrompng($img);

    $newImg = imagescale($image, 200, 400);

    header("Content-Type: image/png");
    imagepng($newImg);

?>