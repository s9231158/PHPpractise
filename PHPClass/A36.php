<?php
$x = $_REQUEST['account'];
//$_REQUEST  post or get 都收
$y = $_POST['pas'];
$a = $_REQUEST['a'];
// var_dump($a);

foreach($a as $k){
    echo"{$k}";
}
?>