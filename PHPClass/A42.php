<?php
$upload = $_FILES['upload'];
if($upload['erro']==0){
// if(move_uploaded_file($uploadp['tmp_name'],"upload/{$_SERVER['REMOTE_ADDR']}.jpg")){
//     echo'success';
if(move_uploaded_file($upload['tmp_name'],"upload['name'].jpg")){
    echo'success';
}
else{
    echo'fail';
}}else{
    echo'fk';
}

?>