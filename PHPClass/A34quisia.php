<table style="border: 1px black double">

<?php
$con = file('myfile/Fstdata.csv');
foreach($con as $k => $line){
    $line = trim($line);
$data =  explode(',',$line);
echo'<table style="border: 1px black double">';
echo'<tr>';
    echo "<tr><td>$data[1]</td><tr>";
    echo "<tr><td>$data[2]</td><tr>";
    echo "<tr><td>$data[7]</td><tr>";
echo'<tr/>';
echo'</table>';
}

?>
</table>