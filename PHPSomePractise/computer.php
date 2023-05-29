<?php
$a = isset($_GET["a"]) ? $_GET["a"] : 0;
$b = isset($_GET["b"]) ? $_GET["b"] : 0;
$cc = isset($_GET["c"]) ? $_GET["c"] : "";
$d = "";
switch($cc){
case "1" : $d = $a+$b ;break;
case "2" : $d = $a-$b ;break;
case "3" : $d = $a*$b ;break;
case "4" : $d = $a/$b ;break;
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
    <form action="computer.php">
        <input type="text" name="a" value="<?php echo $a ?>">
        <select name="c" id="">
            <?php
            $c=array("+","-","*","/");
            for($i=1;$i<5;$i++){
                // echo "<option value=".$i." ($c==$i)?seleted:".">".$c[$i-1]."</option>";
                echo "<option value='$i'" . ($cc == $i ? " selected" : "") . ">" . $c[$i - 1] . "</option>";
            }?>
        </select>
        
        <input type="text" name="b"  value="<?php echo $b ?>">
        <span>=</span>

        <input type="submit" value="=">
                <span>
            <?php echo $d ?>
        </span>
    </form>
</body>

</html>