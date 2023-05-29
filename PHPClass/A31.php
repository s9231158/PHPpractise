
<?php
//換算成台灣時間
date_default_timezone_set('Asia/taipei');   
?>

<table style="border: 1px black double">
    <tr>
        <th>filename</th>
        <th>type</th>
        <th>size</th>
        <th>time</th>
    </tr>
    <?php
    //開資料夾
    $dir = opendir('.') or die("幹");
    //讀資料夾
    while ($file = readdir($dir)) {
        echo '<tr>';
        echo "<td>{$file}</td>";
        //如果是資料夾
        if (is_dir($file)) {
            echo "<td>dir</td>";
        //如果是檔案
        } else if (is_file($file)) {
            echo "<td>file</td>";
        //都不是的話
        } else {
            echo "unknow";
        }
        // 資料大小
        $size = filesize($file);
        echo "<td>${size}bit</td>";
        //資料建立時間,秒數
        $time = filemtime($file);
        //換成年月日 時分秒
        $dat = date('Y-m-d H:i:s', $time);
        echo "<td> $dat </td>";

        echo '<tr/>';
    }
    closedir($dir);
    ?>
</table>