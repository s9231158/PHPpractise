<?php
$passwd = '123445';
$passwhash = password_hash($passwd, PASSWORD_DEFAULT);
$leb = strlen($passwhash);
echo $passwhash . $passwhash . '<br>';
if(password_verify('123445', $passwhash)) {
    echo 'good';
} else {
    echo 'bad';
}






?>