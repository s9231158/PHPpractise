<?php 
include("usesql.php");
$json = file_get_contents("https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx");
$data = json_decode($json,false);
$sql = "INSERT INTO food (`name`,addr,tel,city,town,pic,lat,lng) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($sql);

// var_dump($json); 
// var_dump($data); 
foreach($data as $a){
    try{
    $stmt->bind_param("ssssssss",$a->Name,$a->Address,$a->Tel,$a->City,$a->Town,$a->PicURL,$a->Latitude,$a->Longitude);
    $stmt->execute();}
    catch(Exception $e){
        echo $e->getMessage();
        }
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
    
</body>
</html>