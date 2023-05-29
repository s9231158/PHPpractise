<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'mydatabase';

$connection = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("連接失敗: " . mysqli_connect_error());
}

// 創建表格（如果不存在）
$createTableQuery = "CREATE TABLE IF NOT EXISTS scores (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        name VARCHAR(50) NOT NULL,
                        score INT NOT NULL
                    )";
mysqli_query($connection, $createTableQuery);
?>