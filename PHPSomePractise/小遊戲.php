<?php
session_start();

if (!isset($_SESSION['player'])) {
    // 初始化玩家狀態
    $_SESSION['player'] = [
        'name' => '',
        'health' => 100,
        'inventory' => []
    ];
}

$player = &$_SESSION['player']; // 引用玩家數據

if (isset($_POST['start'])) {
    // 開始遊戲
    $player['name'] = $_POST['name'];
    echo '歡迎進入遊戲，' . $player['name'] . '！<br>';
    echo '你的生命值為 ' . $player['health'] . '<br>';
    echo '你可以通過選擇不同的選項來進行冒險。<br>';
} elseif (isset($_POST['action'])) {
    // 處理玩家的動作
    $action = $_POST['action'];

    // 根據玩家的選擇進行不同的操作
    if ($action === 'explore') {
        explore();
    } elseif ($action === 'fight') {
        fight();
    } elseif ($action === 'get_item') {
        get_item();
    } elseif ($action === 'restart') {
        restart();
    }
}

// 探索
function explore() {
    echo '你探索了周圍的環境，但沒有發現任何有價值的東西。<br>';
}

// 戰鬥
function fight() {
    echo '你遇到了一隻怪物，但你不夠強大無法戰勝它。<br>';
    $player = &$_SESSION['player']; // 引用玩家數據
    $player['health'] -= 20;
    echo '你的生命值減少了 20 點，剩餘生命值為 ' . $player['health'] . '<br>';
    if ($player['health'] <= 0) {
        echo '你被怪物打敗了！遊戲結束。<br>';
        echo '<form method="POST" action=""><button type="submit" name="restart" value="1">重新開始</button></form>';
    }
}

// 獲取物品
function get_item() {
    echo '你找到了一個寶箱，裡面有一把劍。<br>';
    $player = &$_SESSION['player']; // 引用玩家數據
    $player['inventory'][] = '劍';
    echo '你將劍加入了你的物品清單。<br>';
}

// 重新開始遊戲
function restart() {
    unset($_SESSION['player']);
    header('Location: game.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>冒險遊戲</title>
</head>
<body>
    <?php if (empty($player['name'])): ?>
        <h1>歡迎進入冒險遊戲</h1>
        <form method="POST" action="">
            <label for="name">請輸入你的名字：</label>
            <input type="text" name="name" required>
            <button type="submit" name="start">開始遊戲</button>
        </form>
    <?php else: ?>
        <h1>冒險遊戲</h1>
        <p>歡迎回來，<?php echo $player['name']; ?>！</p>
        <p>你的生命值：<?php echo $player['health']; ?></p>
        <h2>選擇一個動作：</h2>
        <form method="POST" action="">
            <button type="submit" name="action" value="explore">探索</button>
            <button type="submit" name="action" value="fight">戰鬥</button>
            <button type="submit" name="action" value="get_item">獲取物品</button>
        </form>
        <h2>物品清單：</h2>
        <?php if (empty($player['inventory'])): ?>
            <p>你還沒有任何物品。</p>
        <?php else: ?>
            <ul>
                <?php foreach ($player['inventory'] as $item): ?>
                    <li><?php echo $item; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form method="POST" action="">
            <button type="submit" name="restart" value="1">重新開始</button>
        </form>
    <?php endif; ?>
</body>
</html>
