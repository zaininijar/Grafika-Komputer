<?php
$img = imagecreate(800, 800);

$hitam = imagecolorallocate($img, 0, 0, 0);
imagefill($img, 0, 0, $hitam);
$putih = imagecolorallocate($img, 255, 255, 255);
$merah = imagecolorallocate($img, 255, 0, 0);
$hijau = imagecolorallocate($img, 0, 255, 0);
$biru = imagecolorallocate($img, 51, 153, 255);

imagepolygon($img, array(
    100, 250,
    300, 250,
    300, 200,
    400, 300,
    300, 400,
    300, 350,
    100, 350 
), 7, $biru);

header('Content-Type: image/jpeg');
imagejpeg($img);

imagedestroy($img);