<?php
include 'afunc.php';
$apple = new Student('apple',10,2,30,);
$applel = new Student('applel',10,2,30,);
echo "{$apple->getname()}:{$apple->sum()}:{$apple->avg()}<br>";
echo "{$applel->getname()}:{$applel->sum()}:{$applel->avg()}"



?>