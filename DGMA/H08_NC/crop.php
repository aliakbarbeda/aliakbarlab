<?php

// Create an image from given image
$im=imagecreatefrompng('H08_NC_Indonesia.png');

// find the size of image
$size = min(imagesx($im), imagesy($im));

// Set the crop image size
//x = koh boh bineh uneun u wie
//y = koh ateuh u miyup
$im2 = imagecrop($im, ['x' => 30, 'y' => 370, 'width' => 400, 'height' => 300]);
if ($im2 !== FALSE) {
	header("Content-type: image/png");
	imagepng($im2);
	imagedestroy($im2);
}
imagedestroy($im);
?>
