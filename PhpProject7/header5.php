<?php
header('Content-type: image/pjpeg'); //IE
header('Content-type: image/jpeg');
$im = imagecreatefromjpeg("DontCry.jpg");
imagejpeg($im);
imagedestroy($im);
?>

