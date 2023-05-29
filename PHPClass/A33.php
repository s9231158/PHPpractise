<?php
$file = 'myfile/apple.txt';
$size = filesize($file);
$fp = fopen ($file,'r');
$c = fread($fp,$size);
echo $c ;
fclose($fp);


?>