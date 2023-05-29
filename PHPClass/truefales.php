<?php // ++在前:先+後比較,沒比較到就不運算 ex: or 
$a = 10 ; $b = 3; // 非'0' 就是 true  ex: 0.0 , -0.1 , "" , "0"都是 false
if( ++$a > 10 or $b-- <3){ // "00" = true
    echo "OK;  = {$a}; b = {$b}";}
else {
     echo "NOK;  = {$a}; b = {$b}";
        
}
?>
<br>
<?php
echo "============"."<br>"
?>
123