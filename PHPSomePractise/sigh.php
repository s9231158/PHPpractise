<?php include 'usesql.php';
session_start();
$acc = $_POST['acc'];
$realpas = $_POST['pas'];
$pas = password_hash($_POST['pas'], PASSWORD_DEFAULT);
$name = $_POST['name'];
$type = $_POST['type'];
try{
if($type==='註冊'){
$sql = 'INSERT INTO `users`(`username`,`password`,`name`) VALUES (?,?,?)';
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sss", $acc, $pas, $name);
$stmt->execute();
if ($stmt->affected_rows > 0) {
    echo "good";
} else {
    echo "bad";
}
}elseif($type==="登入"){
    if(empty($acc) || empty($realpas)){
        echo "輸入帳號密碼";
    }else{
    $sql = 'SELECT id, username, password FROM users WHERE username = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s",$acc);
    $stmt->execute();
    $stmt->store_result();
        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $username, $password);
            $stmt->fetch();
            if (password_verify($realpas, $password)) {
                // 密碼正確存到Session
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
    
                echo "成功";
            } else {
                echo "密碼錯誤";
            }
        }
        else{
            echo"87";
        }}
}
}catch(Exception $e){
echo $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>註冊</h1>
    <form action="" method="post">
        帳號<input type="text" name="acc">
        密碼<input type="password" name="pas">
        名字<input type="text" name="name">
        <input type="submit" name="type" value="註冊">
    </form>
    <h1>登入</h1>
    <form action="" method="post">
        帳號<input type="text" name="acc">
        密碼<input type="password" name="pas">
        <input type="submit" name="type" value="登入">
    </form>
    <a href="?apple=1">555</a>
</body>

</html>