<?php
$upload = $_FILES['upload'];
foreach($upload['error']as $k => $v){
if($v ==0 ){
   $sour=$upload['tmp_name'][$k];
   $filename = $upload['name'][$k];
   move_uploaded_file($score,"upload/{$filename}");
}
}



?>