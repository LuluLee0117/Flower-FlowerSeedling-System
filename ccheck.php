<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'database';
$Registered_success = "false";

echo "供應商名稱:";
if (!empty($_POST["供應商名稱"])) {
  $sname = $_POST["供應商名稱"];
  echo $sname;
} else {
  echo "<font color=\"RED\">尚未輸入供應商名稱</font>";
}
echo '<br><br>';
echo "供應商統一編號:";
if (!empty($_POST["供應商統一編號"])) {
  $sid = $_POST["供應商統一編號"];
  echo $sid;
} else {
  echo "<font color=\"RED\">尚未輸入供應商統一編號</font>";
}
echo '<br><br>';
echo "電話:";
if (!empty($_POST["電話"])) {
  $stel = $_POST["電話"];
  echo $stel;
} else {
  echo "<font color=\"RED\">尚未輸入電話</font>";
}
echo '<br><br>';
echo "email:";
if (!empty($_POST["email"])) {
  $semail = $_POST["email"];
  echo $semail;
} else {
  echo "<font color=\"RED\">尚未輸入email</font>";
}
echo '<br><br>';
echo "負責人姓名:";
if (!empty($_POST["負責人姓名"])) {
  $pname = $_POST["負責人姓名"];
  echo $pname;
} else {
  echo "<font color=\"RED\">尚未輸入負責人姓名</font>";
}
echo '<br><br>';


$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database"); // 選擇資料庫
$sql = "SELECT * FROM `供應商資料表` WHERE sid='" . $sid . "'";
$rows = mysqli_query($db, $sql);
$num = mysqli_num_rows($rows);
if ($num > 0) {
  echo "資料庫內已存在此供應商統一編號";
  exit;
} else {
  echo "新增成功" . ",";
}
$sql = "Insert Into `供應商資料表` (sname,sid,stel,semail,pname) Values ( '$sname','$sid','$stel','$semail','$pname')";
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
      <input type="button" value="上一頁" style="background-color:#FFC9C9;border-color:#FFC9C9" onclick="location.href='test.php'">
    </body>

</html>