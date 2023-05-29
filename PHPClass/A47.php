<meta charset="UTF-8">


<?php
$mysqli = new mysqli('localhost','root','root','phpd03','3306');

$name = 'apple';$tel ='123553';$brithday='1999-12-12';

$sql = 'INSERT INTO cust(cname,tel,brithday) VALUES(?,?,?)';

$stmt = $mysqli-> prepare($sql);

$stmt-> bind_param('sss',$name,$tel,$brithday);

if($stmt->execute()){
    echo 'good';
}else {
        echo'fail';}

// i int  d float  s str  b bild
//預防隱碼攻擊^^^





// $sql = 'INSERT INTO cust(cname,tel,brithday)'. 
// 'VALUES ("apple","123","1999-12-12")';

// if($mysqli->query($sql)){
    
// }
// else{

// }
?>