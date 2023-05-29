<?php
$a =$_POST["m"];
$b = '?';
switch($a){
    case "1":case"3":case"5":case"7":case"9":$b="31";break;
    case "2":case"4":case"6":case"8":case"10":$b="30";break;
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
    <h1>每個月有幾天</h1>
   第
        <form action="month.php" method="post">
            <select name="m" id="">
                <?php
                for ($i = 1; $i < 13; $i++) {
                    echo "<option neme=" . $i . ">$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="查詢">
        </form>
        月
        <?php echo $b ."天"?>
</body>
</html>