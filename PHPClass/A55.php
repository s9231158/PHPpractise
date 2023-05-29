<meta charset="UTF-8">


<?php
include 'sql.php';



if (isset($_POST['acc'])){
    $acc = $_POST['acc'];
    $pas = password_hash( $_POST['pas'],PASSWORD_DEFAULT);
    $nam = $_POST['nam'];   
$sql = 'INSERT INTO member (account,passwd,name)'.'VALUES(?,?,?)';
$stmt = $mysqli ->prepare($sql);
$stmt->bind_param('sss',$account,$passwd,$name);
if($stmt->execute()){
    echo'good';
}
else{
    echo'bad';
}

}






?>