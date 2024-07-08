<?php

$img = imagecreate(1000, 800);
$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 250, 0, 20);
$green = imagecolorallocate($img, 0, 250, 0);
$lightblue = imagecolorallocate($img, 0, 150, 200);

imagefill($img, 0, 0, $black);

class Smile {
    public static function createSmile($img, $color) {

        function widht() {
            return "ok";
        }

        // *---- outherline
        imageellipse(
            $img, 
            200, //X position
            200, //Y position
            300, //widht
            300, //height
            $color
        );
    
        // *---- mouth
        imagearc(
            $img, 
            200, //X position
            200, //Y position
            170, //widht
            200, //height
            370, //left substraction
            170, //right substraction
            $color
        );
    
        imageline(
            $img,
            115, //width left
            215, //line start kemiringan
            285, //widht right
            215, //line end kemiringan
            $color
        );
    
        // *---- end mouth
    
        // ! *---- eyes
    
        // *---- left
        imageline(
            $img,
            120, //width left
            130, //line start kemiringan
            170, //widht right
            180, //line end kemiringan
            $color
        );
    
        imageline(
            $img,
            120, //width left
            180, //line start kemiringan
            170, //widht right
            130, //line end kemiringan
            $color
        );
    
        // *---- right
    
        imageline(
            $img,
            120 + 100, //width left
            130, //line start kemiringan
            170 + 100, //widht right
            180, //line end kemiringan
            $color
        );
    
        imageline(
            $img,
            120 + 100, //width left
            180, //line start kemiringan
            170 + 100, //widht right
            130, //line end kemiringan
            $color
        );
    
        // ! *---- end eyes
    }
}

class House {

    public static function createRoof($img, $color) {
        imageline(
            $img,
            450, //width left
            150, //line start kemiringan
            800, //widht right
            150, //line end kemiringan
            $color
        );
    
        imageline(
            $img,
            800, //width left
            150, //line start kemiringan
            900, //widht right
            350, //line end kemiringan
            $color
        );
    
        imageline(
            $img,
            800, //width left
            150, //line start kemiringan
            700, //widht right
            350, //line end kemiringan
            $color
        );
    
        imageline(
            $img,
            450, //width left
            150, //line start kemiringan
            350, //widht right
            350, //line end kemiringan
            $color
        );
    }

    public static function createWindow($img, $color) {
        imagefilledrectangle(
            $img, 
            700, //left
            400, //top
            850, //right
            500, //bottom
            $color
        );
    }

    public static function createDoor($img, $color) {
        imagefilledrectangle(
            $img, 
            400, //left
            500, //top
            500, //right
            700, //bottom
            $color
        );
    }

    public static function createBody($img, $color) {
        imagefilledrectangle(
            $img, 
            350, //left
            350, //top
            900, //right
            700, //bottom
            $color
        );
    }

}

Smile::createSmile($img, $lightblue);

$house = new House();

$house->createBody($img, $red);
$house->createRoof($img, $white);
$house->createWindow($img, $green);
$house->createDoor($img, $green);

header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);