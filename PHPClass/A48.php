<meta charset="UTF-8">
<?php
$mysqli = new mysqli('localhost','root','root','phpd03',3306);
$mysqli -> set_charset('utf-8');

$sql = 'UPDATE cust SET cname=?,tel=?,brithday=?'.'WHERE id = ?' ;

$id = 2; $cname = 'capple';$tel = '7777';$brithday = '1921-6-2';
$stmt = $mysqli->prepare($sql);
$stmt-> bind_param('sssi',$id,$cname,$tel,$brithday);
if ($stmt->execute()){
    echo 'good';
}
else{
    echo'bad';
}
?>