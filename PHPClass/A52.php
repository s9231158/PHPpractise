<meta charset="UTF-8">
<?php
$mysqli = new mysqli('localhost','root','root','phpd03',3306);
$mysqli->set_charset('utf8');
$sql = 'SELECT tel,cname FROM  cust';//5.7行 綁定需依照順序
$mysqli->prepare($sql);
$stmt->execute();
$stmt->store_result();
$stmt-> bind_result($tel,$cname);//5.7行 綁定需依照順序
while($stmt->fetch()){
    echo"{$cname}:{$tel}";
}
$stmt->free_result();
$stme->close();

?>