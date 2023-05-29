<?php
include "sql.php";
if (isset($_POST['acc'])) {
    $acc = $_POST['acc'];
    $pas = $_POST['pas'];
    $sql = 'SELECT account,passwd,name FROM member WHERE accout = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $acc);
    $stmt->execute();
    if ($stmt->num_rows() != 0) {
    
    $stmt->store_result();
    $stmt->bind_result($account,$passwdhash,$name);
    if(password_verify($passwd,$passwdhash)){

    } else{
    }
    }else{
        header('Location:A56.php');
    }

} else {
    header('Location:A56.php');
}



?>