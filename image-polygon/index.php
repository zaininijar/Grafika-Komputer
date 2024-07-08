<?php 

// require_once 'jajargenjang.php';
require_once 'plus.php';
// require_once 'polygon.php';


header("Content-Type: image/png");

imagepng($image);
imagedestroy($image);