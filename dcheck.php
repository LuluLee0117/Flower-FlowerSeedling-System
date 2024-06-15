<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'database';
$Registered_success = "false";


echo "花草苗木編號:";
if (!empty($_POST["花草苗木編號"])) {
  $fid = $_POST["花草苗木編號"];
  echo $fid;
} else {
  echo "<font color=\"RED\">尚未輸入花草苗木編號</font>";
}
echo '<br><br>';
echo "花草苗木名稱:";
$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database");
$sql = "SELECT * FROM `花草苗木資料表` WHERE fid='$fid'";
$sql .= " ORDER BY fname";  // 最後加上排序
$rows = mysqli_query($db, $sql);      // 執行SQL查詢      
$num = mysqli_num_rows($rows);
$row = mysqli_fetch_array($rows, MYSQLI_NUM);
$fname = $row[0];
echo $fname;
echo '<br><br>';
echo "客戶身分證字號/統一編號:";
if (!empty($_POST["客戶身分證字號/統一編號"])) {
  $cid = $_POST["客戶身分證字號/統一編號"];
  echo $cid;
} else {
  echo "<font color=\"RED\">尚未輸入客戶身分證字號/統一編號</font>";
}
echo '<br><br>';
echo "供應商名稱:";
$sname = $row[2];
echo $sname;
echo '<br><br>';
echo "購買數量:";
if (!empty($_POST["購買數量"])) {
  $buy = $_POST["購買數量"];
  echo $buy;
} else {
  echo "<font color=\"RED\">尚未輸入購買數量</font>";
}
echo '<br><br>';
echo "售價:";
if (!empty($_POST["售價"])) {
  $price = $_POST["售價"];
  echo $price;
} else {
  echo "<font color=\"RED\">尚未輸入售價</font>";
}
echo '<br><br>';
echo "總金額:";
$total = $_POST["購買數量"] * $_POST["售價"];
echo $total;
echo '<br><br>';
echo "折扣後金額:";
$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database");
$sql = "SELECT * FROM `客戶資料表` WHERE id='$cid'";
$sql .= " ORDER BY name";  // 最後加上排序
$rows = mysqli_query($db, $sql);      // 執行SQL查詢      
$num = mysqli_num_rows($rows);
$row = mysqli_fetch_array($rows, MYSQLI_NUM);
$dis = $row[7];
$discount = $dis * $total;
echo $discount;
echo '<br><br>';
echo "訂購日期:";
if (!empty($_POST["訂購日期"])) {
  $orderdate = $_POST["訂購日期"];
  echo $orderdate;
} else {
  echo "<font color=\"RED\">尚未輸入訂購日期</font>";
}
echo '<br><br>';
echo "預計交貨日期:";
if (!empty($_POST["預計交貨日期"])) {
  $edate = $_POST["預計交貨日期"];
  echo $edate;
} else {
  echo "<font color=\"RED\">尚未輸入預計交貨日期</font>";
}
echo '<br><br>';
echo "實際交貨日期:";
if (!empty($_POST["實際交貨日期"])) {
  $ddate = $_POST["實際交貨日期"];
  echo $ddate;
} else {
  echo "<font color=\"RED\">尚未輸入實際交貨日期</font>";
}
echo '<br><br>';

$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database"); // 選擇資料庫


$sql = "Insert Into `客戶購買資料表` (fname,fid,cid,sname,buy,price,total,discount,orderdate,expecteddate,deliverydate) Values ( '$fname','$fid', '$cid','$sname','$buy','$price','$total','$discount','$orderdate','$edate','$ddate')";
mysqli_query($db, $sql);

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