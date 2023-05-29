<?php
foreach($_REQUEST as $name=>$v){
if(gettype($v)=='array'){

echo "{$name}: <br><ul>";
foreach($v as $vv){
    echo"<li>{$vv}</li>";
}
echo '<ul/>';
}
else{
echo "{$name} = {$v}"; 
}




}


?>