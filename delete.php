<?php
$price = "";
$pubdate = "";
$result = "";
$id = $_GET["id"]; // 取得書號
$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database"); // 選擇資料庫
if (isset($_POST["send"])) {  // 是否是表單送回
    $insStr = 'insert into 客戶資料表 select * from 靜止戶資料表';
    $res = mysqli_query($insStr, $db);
    if (!mysqli_query($db, $sql)) // 執行SQL指令
        $result = "刪除記錄失敗...<br/>" . mysqli_error($db);
    else header("Location: bchange.php"); // 轉址              
} else {  // 取得
    $sql = "SELECT * FROM `客戶資料` WHERE ID='" . $id . "'";
    $rows = mysqli_query($db, $sql); // 執行SQL查詢
    $row = mysqli_fetch_array($rows);
    $name = $row["name"];
    $birth = $rpw["birth"];
    $tel = $row["tel"];
    $email = $row["email"];
    $age = $row["age"];
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

    <body style="background-color:#FFF0D4;">
        <h1>刪除記錄</h1>
        <hr />
        <ul>
            <li>身分證字號: <?php echo $id ?></li>
            <li>姓名: <?php echo $name ?> </li>
            <li>電話: <?php echo $tel ?> </li>
            <li>住址: <?php echo $address ?> </li>
            <li>年齡: <?php echo $age ?> </li>
            <li>職業: <?php echo $job ?> </li>
            <li>登記日期: <?php echo $date ?> </li>

        </ul>
        <hr />
        <form method="post" action="">
            <input type="submit" name="send" value="刪除記錄" style="background-color:#FFD382;" />
        </form>
        <?php echo $result ?>
    </body>

</html>