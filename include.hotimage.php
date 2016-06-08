<?php
// Phylactery hot images
function phy_Percentage_Bar($percentage,$text=false,$width=300,$height=16) {
    header("Content-type: image/png");
    $im = @imagecreate($width, $height);
    $background_color = imagecolorallocate($im, 0, 0, 0);
    $blue = imagecolorallocate($im, 0, 0, 255);
    $black = imagecolorallocate($im,0,0,0);
    $white = imagecolorallocate($im,255,255,255);
    $green = imagecolorallocate($im, 0, 255, 0);
    imagefilledrectangle ($im,   0,  0, ($percentage*3),16, $green);
    if($text) {
        imagestring($im, 3, 16, 1,  $percentage."%", $black);
        imagestring($im, 3, 17, 2,  $percentage."%", $black);
        imagestring($im, 3, 15, 0,  $percentage."%", $white);
    }
    imagepng($im);
    imagedestroy($im);
}

phy_Percentage_Bar(30);