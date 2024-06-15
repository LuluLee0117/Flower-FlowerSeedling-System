<?php
$name = "";
$tel = "";
$result = "";
$address = "";
$id = $_GET["id"]; // 取得身分證字號
$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database"); // 選擇資料庫
if (isset($_POST["send"])) {  // 是否是表單送回
  // 取得表單欄位值
  $name = $_POST["name"];
  $birth = $_POST["birth"];
  $tel = $_POST["tel"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $photo = $_POST["photo"];
  $discount = $_POST["discount"];
  $sql = "UPDATE `客戶資料表` SET name='" . $name . "' , id='" . $id . "',birth='" . $birth . "' ,tel='" . $tel . "' ,email='" . $email . "' ,age='" . $age . "' , photo='" . $photo . "',discount='" . $discount . "'  WHERE id='" . $id . "'";
  if (!mysqli_query($db, $sql)) // 執行SQL指令
    $result = "更新記錄失敗...<br/>" . mysqli_error($db);
  else header("Location: bchange.php"); // 轉址              
} else {  // 取得
  $sql = "SELECT * FROM `客戶資料表` WHERE id='" . $id . "'";
  $rows = mysqli_query($db, $sql); // 執行SQL查詢
  $row = mysqli_fetch_array($rows);
  $name = $row["name"];
  $birth = $row["birth"];
  $tel = $row["tel"];
  $email = $row["email"];
  $age = $row["age"];
  $photo = $row["photo"];
  $discount = $row["discount"];
  mysqli_free_result($rows);   // 釋放查詢結果
}
mysqli_close($db); // 關閉連接     
?>
<!DOCTYPE html>
<html>

<head>
  <title>更新記錄.php</title>
</head>

<body>
  <center>

    <body background="weather.png">
      <h1>更新記錄</h1>
      <hr />
      <form method="post" action="">
        <hr />
        <table border="1" style="background-color:white">
          <tr>
            <td>
              <label for="id">身分證字號:</label>
              <input type="text" name="id" value="<?php echo $id ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="name">客戶名稱:</label>
              <input type="text" name="name" value="<?php echo $name ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="birth">生日:</label>
              <input type="date" name="birth" value="<?php echo $birth ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="tel">電話:</label>
              <input type="text" name="tel" value="<?php echo $tel ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="email">Email:</label>
              <input type="text" name="email" value="<?php echo $email ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="age">年齡:</label>
              <input type="text" name="age" value="<?php echo $age ?>" />
            </td>
          </tr>
          <tr>
            <td>
              <label for="discount">折扣:</label>
              <input type="float" name="discount" value="<?php echo $discount ?>" />
            </td>
          </tr>
        </table>
        <br />
        <input type="submit" name="send" value="更新記錄" style="background-color:#FFD382;border-color:#FFD382" />&nbsp;<input type="button" value="上一頁" style="background-color:#FFC9C9;border-color:#FFC9C9" onclick="location.href='test.php'"><br><br>

      </form><?php echo $result ?>
    </body>

</html>