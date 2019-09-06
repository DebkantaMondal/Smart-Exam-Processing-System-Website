<?php
session_start();
$random_alpha = md5(rand());
$captcha_code = substr($random_alpha, 0, 5);
$_SESSION["captcha_code"] = $captcha_code;
$target_layer = imagecreatetruecolor(120,40);
$captcha_background = imagecolorallocate($target_layer, 120, 100, 255);
imagefill($target_layer,0,0,$captcha_background);
$captcha_text_color = imagecolorallocate($target_layer, 255, 255, 255);
imagestring($target_layer, 12, 22, 13, $captcha_code, $captcha_text_color);
header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>
