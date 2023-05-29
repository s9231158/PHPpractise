<?php
$fp = fopen('myfile/apple.txt','w');
fwrite ($fp , 'hello , wprd');
fflush($fp);
fclose($fp);

?>