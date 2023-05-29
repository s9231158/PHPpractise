<?php
$con = file('myfile/apple.txt');
foreach($con as $a => $v){
    $v = trim($v);
    $len = strlen($v);
    echo"{$a} : {$v} ; {$len}" ;
}





?>