<?php
    // 1. 畫布
    // 2. 作畫 (選顏色,...)
    // 3. 輸出 (Browser / File)
    // 4. 清除記憶體

// 1. 畫布
$width = 400;
$rat = $_GET['rat'];
$gd = imagecreate(400,20);
// 2. 作畫 (選顏色,...)
$yello1 = imagecolorallocate($gd,255,255,0);
$yello = imagecolorallocate($gd,100,255,0);
imagefilledrectangle($gd,0,0,$width,20,$yello1);
imagefilledrectangle($gd,0,0,$width*$rat/100,20,$yello);
// 3. 輸出 (Browser / File)
header('content-type:image/jpeg');
imagejpeg($gd);
// 4. 清除記憶體
imagedestroy($gd);
?>