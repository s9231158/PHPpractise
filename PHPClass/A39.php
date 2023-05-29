<?php
$filename = $_REQUEST['filename'];
$context = $_REQUEST['context'];

$fp = fopen("myfile/{$filename}","w");
fwrite($fp,$context);
fflush($fp);
fclose($fp);
header("location:myfile/{$filename}");

?>