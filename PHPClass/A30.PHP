<?php
$fp = opendir('c:/') ;//$fp =@opendir('c:/') or die ('fkfkfkfkfk'); 出錯出現fk

while($fil = readdir($fp)){
    echo"{$fil}<br>";
}

closedir($fp);
// $fil = readdir($fp);

// echo $fil
// echo gettype($fp); // resource 
?>