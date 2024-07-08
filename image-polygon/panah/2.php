<?php
$img = imagecreate(800, 800);

$hitam = imagecolorallocate($img, 0, 0, 0);
imagefill($img, 0, 0, $hitam);
$putih = imagecolorallocate($img, 255, 255, 255);
$merah = imagecolorallocate($img, 255, 0, 0);
$hijau = imagecolorallocate($img, 0, 255, 0);
$biru = imagecolorallocate($img, 0, 0, 225);

imagepolygon($img, array(
    333, 133,
    333, 333,
    467, 333,
    467, 267,
    667, 400,
    467, 533,
    467, 467,
    333, 467,
    333, 667,
    133, 667,
    133, 133 
), 11, $merah);

header('Content-Type: image/jpeg');
imagejpeg($img);

imagedestroy($img);