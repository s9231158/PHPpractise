<?php include "stock.php" ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php foreach($book as $key=>$price)
{echo "單號:".$price["dramaId"]."<br>"
  ."類別:".$price["category"]."<br>"
  .'<a href=/php03/phptrain/ddaa.php?dramaId='.$price['dramaId'].'"class="buybtn">預定'.$price["category"].'</a><br>'
  ;} 
?>
<?php include("sing.php"); 
?>
  <form id="login-form">
    <h2>登入</h2>
    <div>
      <label>使用者名稱：</label>
      <input type="text" name="username">
    </div>
    <div>
      <label>密碼：</label>
      <input type="password" name="password">
    </div>
    <button type="submit">登入</button>
  </form>
  <form id="add-form">
    <h2>新增支出記錄</h2>
    <div>
      <label>日期：</label>
      <input type="date" name="date">
    </div>
    <div>
      <label>類別：</label>
      <input type="text" name="category">
    </div>
    <div>
      <label>金額：</label>
      <input type="number" name="amount">
    </div>
    <div>
      <label>說明：</label>
      <input type="text" name="description">
    </div>
    <button type="submit">新增</button>
  </form>
  <table>
    <thead>
      <tr>
        <th>日期</th>
        <th>類別</th>
        <th>金額</th>
        <th>說明</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody id="expense-list">
    </tbody>
  </table>
</body>
</html>