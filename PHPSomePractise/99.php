<?
define("rows",20);
echo "<table>\n";
for($j=1;$j<rows;$j++){
   echo "<tr bgcolor='#CCFFFF'>\n";
   for($i=1;$i<rows;$i++){
       echo "<td>\n";
       echo $j."x".$i."=".$j*$i;
       echo "</td>\n";
   }
   echo "</tr>\n";
}
echo "</table>\n";
?>