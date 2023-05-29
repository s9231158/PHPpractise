<?php

require_once "DBConnection.php";

use MyApp\Database\DBConnection;

class NumberGuesser
{
    private $dbConnection;
    private $a;

    public function __construct(DBConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function playGame()
    {
        session_start();
        echo $_SESSION['number'];
        $this->initializeSession();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handleGuess();
        }

        $this->displayGameForm();
        $this->displayScoreboard();
    }

    private function initializeSession()
    {
        if (!isset($_SESSION['number'])) {
            $_SESSION['number'] = rand(1, 100);
        }

        if (!isset($_SESSION['score'])) {
            $_SESSION['score'] = 0;
        }
    }

    private function handleGuess()
    {
        $guess = isset($_POST['guess']) ? (int)$_POST['guess'] : null;

        if ($guess === null) {
            error_log("Guess is null");
            return;
        }

        if ($guess > $_SESSION['number']) {
            echo '太大了';
            $_SESSION["score"] += 1;
        } elseif ($guess < $_SESSION['number']) {
            echo '太小了';
            $_SESSION["score"] += 1;
        } else {
            echo '猜對了';
            $this->a = "87";
            if ($_SESSION['score'] > 3) {
                echo "到底要猜幾次?";
            }
        }
    }

    private function displayGameForm()
    {
        $a = isset($this->a) ? $this->a : null;
        $score = $_SESSION["score"];

        echo '<form method="POST" action="">
                <input type="number" name="guess" placeholder="1-100" required>
                <button type="submit">猜！</button>
              </form>';

        if ($a === "87") {
            echo '<form method="POST" action="">
                    <button type="submit" name="aa">再玩一次</button>
                  </form>
                  <form method="POST" action="">
                    <input type="text" name="name" placeholder="请输入您的姓名" required>
                    <br><span>您猜了' . $score . '次的紀錄</span>
                    <br>
                    <button type="submit" name="bb">上傳紀錄！</button>
                  </form>';
        }
    }

    private function displayScoreboard()
    {
        $scoresResult = $this->dbConnection->query("SELECT name, score FROM scores ORDER BY score DESC");

        if ($scoresResult->num_rows > 0) {
            echo "<h2>得分列表：</h2>";
            echo "<table>";
            echo "<tr><th>姓名</th><th>得分</th></tr>";

            while ($row = $scoresResult->fetch_assoc()) {
                echo "<tr><td>" . $row['name'] . "</td><td>" . $row['score'] . "</td></tr>";
            }

            echo "</table>";
        } else {
            echo "<p>無紀錄</p>";
        }

        $scoresResult->free();
    }

    public function handleRestart()
    {
        if (isset($_POST["aa"])) {
            unset($_SESSION['number'], $_SESSION["score"]);
        }

        if (isset($_POST["bb"])) {
            if ($_SESSION['score'] > 0) {
                $score = $_SESSION['score'];
                $name = isset($_POST["name"]) ? $_POST["name"] : "unknown";
                $this->dbConnection->query("INSERT INTO scores (name, score) VALUES ('$name', $score)");
                unset($_SESSION['number'], $_SESSION["score"]);
            }
        }
    }
}

$dbConnection = new DBConnection("localhost", "root", "root", "mydatabase");
$guesser = new NumberGuesser($dbConnection);
$guesser->playGame();
$guesser->handleRestart();

?>
<script>
    function sum(a){
    return function(b){
        if(b!==undefined){ 
            return sum(a+b)
        }else{
            return a
        }
    }
}

let ans = sum(1)(1)(1)()
console.log(ans)
</script>