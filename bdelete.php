<?php
$price = "";
$pubdate = "";
$result = "";
$id = $_GET["id"]; // 取得書號
$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database"); // 選擇資料庫
if (isset($_POST["send"])) {  // 是否是表單送回
    $sql = "SELECT * FROM `客戶資料表` WHERE id='$id'";
    $rows = mysqli_query($db, $sql); // 執行SQL查詢
    $row = mysqli_fetch_array($rows);
    $name = $row["name"];
    $birth = $row["birth"];
    $tel = $row["tel"];
    $email = $row["email"];
    $age = $row["age"];
    $photo = $row["photo"];
    $discount = $row["discount"];
    $sql = "INSERT INTO `靜止戶資料表` (`name`, `id`, `birth`, `tel`, `email`, `age`, `photo`, `discount`) VALUES ('$name','$id','$birth','$tel','$email','$age','$photo','$discount')";
    //$sql="DELETE FROM `客戶資料表` WHERE id='$id'";
    if (!mysqli_query($db, $sql)) // 執行SQL指令
        $result = "刪除記錄失敗...<br/>" . mysqli_error($db);
    else {
        $sql = "SELECT * FROM `客戶資料表` WHERE id='$id'";
        $rows = mysqli_query($db, $sql); // 執行SQL查詢
        $row = mysqli_fetch_array($rows);
        $name = $row["name"];
        $birth = $row["birth"];
        $tel = $row["tel"];
        $email = $row["email"];
        $age = $row["age"];
        $photo = $row["photo"];
        $discount = $row["discount"];
        $sql = "DELETE FROM `客戶資料表` WHERE id='$id'";
        if (!mysqli_query($db, $sql))
            $result = "刪除記錄失敗...<br/>" . mysqli_error($db);
        else
            header("Location: bchange.php");
    } // 轉址 

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
    <meta charset="utf-8" />
    <title>刪除資料.php</title>
</head>

<body>
    <center>

        <body background="weather.png">
            <h1>刪除記錄</h1>
            <hr />
            <ul>
                <li>身分證字號: <?php echo $id ?></li>
                <li>客戶名稱: <?php echo $name ?> </li>
                <li>生日: <?php echo $birth ?> </li>
                <li>電話: <?php echo $tel ?> </li>
                <li>Email: <?php echo $email ?> </li>
                <li>年齡: <?php echo $age ?> </li>
                <li>折扣: <?php echo $discount ?> </li>

            </ul>
            <hr />
            <form method="post" action="">
                <input type="submit" name="send" value="刪除記錄" style="background-color:#FFD382;" />
            </form>
            <?php echo $result ?>
        </body>

</html>