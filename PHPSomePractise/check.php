<?php
include("usesql.php");
if (!isset($_POST["acc"])) {
    header('Location: http://localhost/php03/phptest/log.php?p=1');exit;
    
}

$acc = $_POST["acc"];
$pas = $_POST["pas"];
$sql = "SELECT * FROM `users` WHERE `username` = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $acc);
$stmt->execute();
$resul = $stmt->get_result();

if ($resul->num_rows > 0) {
    $mem = $resul->fetch_object();
    if (password_verify($pas, $mem->password)) {
        header("Location: http://localhost/php03/phptest/main.php");
        exit;
    } else {
        header("Location: http://localhost/php03/phptest/log.php?p=2");
        exit;
    }
} else {
    header("Location: http://localhost/php03/phptest/log.php?p=3");
    exit;
}

// else {
//     $acc = $_POST["acc"];
//     $pas = $_POST["pas"];
//     $sql = "SELECT * FROM `users` WHERE `username` = ?";
//     $stmt = $mysqli->prepare($sql);
//     $stmt->bind_param("s", $acc);
//     $stmt->execute();
//     $resul = $stmt->get_result();

//     // var_dump($resul);
//     if ($resul->num_rows > 0) {
//         $mem = $resul->fetch_object();
//         if (password_verify($pas, $mem->password)) {
//             echo password_verify($pas, $mem->password);
//             // header("Location:http://localhost/php03/phptest/main.php");

//         } else {
//             header("Location:http://localhost/php03/phptest/log.php?p=2");

//         }
//     } else {
//         header("Location:http://localhost/php03/phptest/log.php?p=3");

//     }
// }
?>