<?php
$img = imagecreate(600, 600);

$hitam = imagecolorallocate($img, 0, 0, 0);
imagefill($img, 0, 0, $hitam);
$putih = imagecolorallocate($img, 255, 255, 255);
$merah = imagecolorallocate($img, 255, 0, 0);
$hijau = imagecolorallocate($img, 0, 255, 0);
$biru = imagecolorallocate($img, 0, 0, 225);

imagepolygon($img, array(
    300, 100,
    200, 200,
    250, 200,
    250, 300,
    200, 300,
    300, 400,
    400, 300,
    350, 300,
    350, 200,
    400, 200 
), 10, $hijau);

header('Content-Type: image/jpeg');
imagejpeg($img);

imagedestroy($img);