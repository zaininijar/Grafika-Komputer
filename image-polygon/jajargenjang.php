<?php

$image = imagecreate(800, 800);

$black = imagecolorallocate($image, 0, 0, 0);
imagefill($image, 0, 0, $black);

$white = imagecolorallocate($image, 255, 255, 255);

$points = array(
    200, 300,
    700, 300,
    600, 750,
    100, 750,
);

imagepolygon(
    $image, 
    $points, 
    4,
    $white
);