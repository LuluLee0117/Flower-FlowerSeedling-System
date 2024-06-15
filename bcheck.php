<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'database';
$Registered_success = "false";

echo "客戶姓名:";
if (!empty($_POST["客戶姓名"])) {
  $name = $_POST["客戶姓名"];
  echo $name;
} else {
  echo "<font color=\"RED\">尚未輸入客戶姓名</font>";
}
echo '<br><br>';
echo "身分證字號/統一編號:";
if (!empty($_POST["身分證字號/統一編號"])) {
  $id = $_POST["身分證字號/統一編號"];
  echo $id;
} else {
  echo "<font color=\"RED\">尚未輸入身分證字號/統一編號</font>";
}
echo '<br><br>';
echo "生日:";
if (!empty($_POST["生日"])) {
  $birth = $_POST["生日"];
  echo $birth;
} else {
  echo "<font color=\"RED\">尚未輸入生日</font>";
}
echo '<br><br>';
echo "電話:";
if (!empty($_POST["電話"])) {
  $tel = $_POST["電話"];
  echo $tel;
} else {
  echo "<font color=\"RED\">尚未輸入電話</font>";
}
echo '<br><br>';
echo "email:";
if (!empty($_POST["email"])) {
  $email = $_POST["email"];
  echo $email;
} else {
  echo "<font color=\"RED\">尚未輸入email</font>";
}
echo '<br><br>';
echo "年齡:";
list($year, $month, $day) = explode("-", $birth);
$age = 2021 - $year;
echo $age;
echo '<br><br>';
echo "會員折扣:";
if (!empty($_POST["會員折扣"])) {
  $discount = $_POST["會員折扣"];
  echo $discount;
} else {
  echo "<font color=\"RED\">尚未輸入會員折扣</font>";
}
echo '<br><br>';


$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database"); // 選擇資料庫
$sql = "SELECT * FROM `客戶資料表` WHERE id='" . $id . "'";
$rows = mysqli_query($db, $sql);
$num = mysqli_num_rows($rows);
if ($num > 0) {
  echo "資料庫內已存在此身分證字號/統一編號";
  exit;
} else {
  echo "新增成功" . ",";
}
$sql = "Insert Into `客戶資料表` (name,id,birth,tel,email,age,discount) Values ( '$name','$id', '$birth','$tel','$email','$age','$discount')";
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