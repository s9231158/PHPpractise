<?php
echo "<table border='1' width='100%'>";
echo '<tr>';

 
$i = 100;
for ($k = 1; $k <= $i; $k++) {
   $x = 0;
    for ($j = 1; $j < $k; $j++) {
    
        if ($k % $j == 0) {
            $x++;
    
        }
    }
    
    if ($x == 1) {
        echo "<td bgcolor='yellow'>{$k}</td>";
    
    }
        echo "<td>{$k}</td>";
    if (($k +10) % 10 === 0) {
        
        echo '<tr>';
        
        echo '<tr>';
        
    }
}


echo '</tr>';

echo '</table>';
?>