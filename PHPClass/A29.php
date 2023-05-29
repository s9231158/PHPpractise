<?php

$gd = imagecreatefromjpeg('IMG/2.jpg');
$yello = imagecolorallocate($gd,255,255,0);
imagettftext($gd,88,300,100,100,$yello,'IMG/mingliu.ttc','343242');
header('content-type:image/jpeg');
imagejpeg($gd,"IMG/aaaa.jpg"); //檔案輸出
imagedestroy($gd);
?>