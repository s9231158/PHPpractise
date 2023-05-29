<meta charset="UTF-8">
<?php
$mysqli = new mysqli('localhost','root','root','phpd03',3306);
$mysqli -> set_charset('utf-8');

$sql = 'DELETE FROM cust WHERE id = ?' ;

$id = 1;
$stmt = $mysqli->prepare($sql);
$stmt-> bind_param('i',$id);
if ($stmt->execute()){
    echo 'good';
}
else{
    echo'bad';
}
?>