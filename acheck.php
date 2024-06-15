<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'database';
$Registered_success = "false";

echo "花草苗木名稱:";
if (!empty($_POST["花草苗木名稱"])) {
  $fname = $_POST["花草苗木名稱"];
  echo $fname;
} else {
  echo "<font color=\"RED\">尚未輸入花草苗木名稱</font>";
}
echo '<br><br>';
echo "花草苗木編號:";
if (!empty($_POST["花草苗木編號"])) {
  $fid = $_POST["花草苗木編號"];
  echo $fid;
} else {
  echo "<font color=\"RED\">尚未輸入花草苗木編號</font>";
}
echo '<br><br>';
echo "供應商名稱:";
if (!empty($_POST["供應商名稱"])) {
  $sname = $_POST["供應商名稱"];
  echo $sname;
} else {
  echo "<font color=\"RED\">尚未輸入供應商名稱</font>";
}
echo '<br><br>';
echo "公司內現有數量:";
if (!empty($_POST["公司內現有數量"])) {
  $number = $_POST["公司內現有數量"];
  echo $number;
} else {
  echo "<font color=\"RED\">尚未輸入公司內現有數量</font>";
}
echo '<br><br>';
echo "單位:";
if (!empty($_POST["單位"])) {
  $unit = $_POST["單位"];
  echo $unit;
} else {
  echo "<font color=\"RED\">尚未輸入單位</font>";
}
echo '<br><br>';
echo "單價:";
if (!empty($_POST["單價"])) {
  $price = $_POST["單價"];
  echo $price;
} else {
  echo "<font color=\"RED\">尚未輸入單價</font>";
}
echo '<br><br>';
echo "小計:";
$total = $_POST["單價"] * $_POST["公司內現有數量"];
echo $total;
echo '<br><br>';
echo "公司內存放位置:";
if (!empty($_POST["公司內存放位置"])) {
  $place = $_POST["公司內存放位置"];
  echo $place;
} else {
  echo "<font color=\"RED\">尚未輸入公司內存放位置</font>";
}
echo '<br><br>';
echo "進貨日期:";
if (!empty($_POST["進貨日期"])) {
  $indate = $_POST["進貨日期"];
  echo $indate;
} else {
  echo "<font color=\"RED\">尚未輸入進貨日期</font>";
}
echo '<br><br>';




$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database"); // 選擇資料庫
$sql = "SELECT * FROM `花草苗木資料表` WHERE fid='" . $fid . "'";
$rows = mysqli_query($db, $sql);
$num = mysqli_num_rows($rows);
if ($num > 0) {
  echo "資料庫內已存在此花草苗木編號";
  exit;
} else {
  //echo "新增成功".",";
  $sql = "INSERT INTO `花草苗木資料表` (`fname`,`fid`,`sname`,`number`,`unit`,`price`,`total`,`place`,`indate`) VALUES ( '$fname','$fid', '$sname','$number','$unit','$price','$total','$place','$indate')";
  mysqli_query($db, $sql);
  echo "新增成功" . ",";
}
//$sql = "INSERT INTO `客戶基本資料資料庫` ('fname','fid','sname','number','unit','price','total','place','indate') VALUES ( '$fname','$fid', '$sname','$number','$unit','$price','$total','$place','$indate')";
//mysqli_query($db,$sql);

?>
<html>

<head>
  <meta name="generator" content="HTML Tidy for HTML5 for Windows version 5.2.0" />
  <title></title>
</head>

<body>
  <center>

    <body background="weather.png">
      <input type="button" value="上一頁" style="background-color:#FFC9C9;border-color:#FFC9C9" onclick="location.href='test.php'"><br><br>

    </body>

</html>