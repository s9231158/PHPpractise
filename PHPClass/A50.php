<meta charset="UTF-8">
    <?php
$mysqli = new mysqli('localhost', 'root', 'root', 'phpd03', 3306);//連結
$mysqli->set_charset('utf-8');//轉中文
// $mysqli->query('DELETE FROM fs'); //刪除表單
// $mysqli->query('ALTER TABLE fs AUTO_INC'); //刪除id
$sql = 'INSERT INTO fs (name,addr,tel,lat,lng,qty)'. 'VALUES(?,?,?,?,?,?)';
$stmt = $mysqli->prepare($sql);
define('NAME', 1);
define('ADDR', 2);
define('TEL', 5);
define('LAT', 4);
define('LNG', 3);
define('QTY', 7);


$content = file('myfile/fs.csv');
foreach ($content as $k => $line) {
    if($k == 0 ){
        continue;
    }
    $line = trim($line);
    $data = explode(',', $line);
    $stmt->bind_param(
        'sssddi',
        $data[NAME], $data[ADDR], $data[TEL], $data[LAT], $data[LNG], $data[QTY]
    );
    $stmt->execute();
}
?>
