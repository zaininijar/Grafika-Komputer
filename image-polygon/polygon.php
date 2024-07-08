<?php

$image = imagecreate(800, 800);

$black = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0, 0, $black);

$white = imagecolorallocate($image, 255, 255, 255);

$points = array(
    300, 200,
    500, 200,
    600, 400,
    500, 600,
    300, 600,
    200, 400,
);

imagepolygon(
    $image, 
    $points, 
    6,
    $white
);