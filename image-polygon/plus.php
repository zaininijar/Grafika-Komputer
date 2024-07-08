<?php

$image = imagecreate(800, 800);

$black = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0, 0, $black);

$white = imagecolorallocate($image, 255, 255, 255);

$points = array(
    300, 300,
    300, 200,
    500, 200,
    500, 300,
    600, 300,
    600, 500,
    500, 500,
    500, 600,
    300, 600,
    300, 500,
    200, 500,
    200, 300,
);

imagepolygon(
    $image, 
    $points, 
    12,
    $white
);