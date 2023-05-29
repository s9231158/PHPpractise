<meta charset="UTF-8">

<?php 
$mysqli = new mysqli('localhost','root','root','mydatabase',3306);
$mysqli -> set_charset("utf8");
// $sql = "INSERT INTO `scores` (`name`, `score`) VALUES ('99', '99');";

// if ($mysqli->query($sql)){

// }else{

// }

$name = "11";
$score = "11";
$id = 19;
//增
$sql = "INSERT INTO `scores`(`name`,`score`) VALUES (?,?)";
// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("ss",$name,$score);
// $stmt->execute()
//修
$sql1 ="UPDATE `scores` SET `name` = ?, `score` = ? WHERE `scores`.`id` = ?;";
// $stmt = $mysqli->prepare($sql1);
// $stmt->bind_param("ssi",$name,$score,$id);
// $stmt->execute();
//刪
$sql2 ="DELETE FROM `scores` WHERE `scores`.`id` = ?";
// $stmt = $mysqli->prepare($sql2);
// $stmt->bind_param("i",$id);
// $stmt->execute();
//查
$sql3 = 'SELECT id,name,score FROM `scores`';
// $result = $mysqli->query($sql3);
// 法子1 
// while($row = $result->fetch_object()){
// echo $row->name . $row->id ."score". $row->score."</br>";
// }
//法子2
// while($roww = $result->fetch_array()){
// echo $roww['id'].$roww['name'].$roww['score'].'</br>';
// }
//防隱碼攻擊
$stmt = $mysqli->prepare($sql3);
$stmt->execute();
$stmt->store_result();
// echo $stmt->num_rows()."</br>";
// $stmt->bind_result($id,$name,$score);
// while($stmt->fetch()){
// echo$id.$name.$score."</br>";
// }
$stmt->free_result();
$stmt->close();
?>