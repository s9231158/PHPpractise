<meta charset="UTF-8">
<?php
$mysqli = new mysqli('localhost','root','root','phpd03',3306);
$mysqli->set_charset('utf8');
$sql = 'SELECT * FROM  cust';
$result = $mysqli-> query($sql);
// echo $result-> num_rows;
while ($row = $result->fetch_object()
){echo"{$row->tel}:{$row->cname}:{$row->id}:{$row->brithday}<br>";
}

$row = $result->fetch_object();
echo"{$row->tel}:{$row->cname}:{$row->id}:{$row->brithday}<br>";



?>