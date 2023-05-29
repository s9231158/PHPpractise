<form action="A42.php" method="post" enctype="multipart/form-data">
<!-- 檔案傳送以上必須都有 ^只能是post^ -->
<input type="file" name="upload"><br>
<input type="submit" value="load">


</form>

<?php
foreach($_SERVER as $k){
echo $k;
}

?>