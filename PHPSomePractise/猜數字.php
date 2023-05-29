<?php
include("猜數字sql.php");
$scoresQuery = "SELECT name, score FROM scores ORDER BY score DESC";
$scoresResult = mysqli_query($connection, $scoresQuery);
session_start();
echo $_SESSION['number'] . "<br>";
echo $_SESSION['score'];
if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1, 100);
}
// echo "{$_SESSION['number']}<br>";
$guess = isset($_POST['guess']) ? (int) $_POST['guess'] : "";

if ($guess !== null) {
    if ($guess > $_SESSION['number']) {
        echo '太大了';
        $_SESSION["score"] += 1;
    } elseif ($guess < $_SESSION['number']) {
        echo '太小了';
        $_SESSION["score"] += 1;
    } else {
        echo '猜對了';
        $a = "87";
        if ($_SESSION['score'] > 3) {
            echo "到底要猜幾次?";
        }
    }
}
else{error_log("Guess is null") ;}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>猜數字</title>
</head>

<body>
    <h1>猜數字</h1>

    <form method="POST" action="">
        <input type="number" name="guess" placeholder="1-100" required>
        <button type="submit">猜！</button>
    </form>
    <?php
    if ($a === "87") {
        echo '<form method="POST" action="">
                <button type="submit" name="aa">再玩一次</button>
              </form>
              <form method="POST" action="">
            <input type="text" name="name" placeholder="輸入您的姓名" required>
            <br><span>您猜了' . $_SESSION["score"] . '次的紀錄</span>
            <br>
            <button type="submit" name="bb">上傳紀錄！</button>
        </form>
              ';
    }
    if (isset($_POST["aa"])) {
        unset($_SESSION['number'], $_SESSION["score"]);

    }
    if (isset($_POST["bb"])) { 
            if ($_SESSION['score'] > 0){
                $score = $_SESSION['score'];
            $name = isset($_POST["name"]) ? $_POST["name"] : "unknow";
            $insertQue22ry = "INSERT INTO scores (name,score) VALUES('$name',$score)";
            mysqli_query($connection, $insertQue22ry);
            unset($_SESSION['number'], $_SESSION["score"]);
            }
    }

    ?>
    <?php
    // 顯示紀錄
    if (mysqli_num_rows($scoresResult) > 0) {
        echo "<h2>得分列表：</h2>";
        echo "<table>";
        echo "<tr><th>姓名</th><th>得分</th></tr>";
        while ($row = mysqli_fetch_assoc($scoresResult)) {
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['score'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>無紀錄</p>";
    }

    mysqli_free_result($scoresResult);
    mysqli_close($connection);
    ?>
</body>

</html>