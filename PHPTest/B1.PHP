<?php
if($_GET["apple"]=="ok"){
    echo "123";
}
else{
    echo "87";
}

// function turn (){
//     header("http://localhost/php03/phptrain/B1ok.php");
//     echo "87";
// }

// $id = $_GET["id"];
// $name = $_GET["name"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$add = $_POST["Address"];
$apple = $_GET["apple"];
// echo "<p>".$id."</p><br>";
// echo $name;
echo "幹S:".$apple."<br>";
echo $pass;
echo $user;
echo $add;
echo "$pass + $user"
?>