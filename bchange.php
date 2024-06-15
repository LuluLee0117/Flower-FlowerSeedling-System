<?php
$db = mysqli_connect("localhost", "root", "");
mysqli_query($db, "set names utf8");
mysqli_select_db($db, "database"); // 選擇資料庫
$sql = "SELECT * FROM `客戶資料表` ";
$rows = mysqli_query($db, $sql); // 執行SQL查詢
$num = mysqli_num_rows($rows);  // 取得記錄數
mysqli_close($db); // 關閉連接
?>
<!DOCTYPE html>
<html>

<head>
    <title>客戶基本資料更改</title>
    <center>
        <span style="font-family:DFKai-sb">
            <font size="30"><b>客戶基本資料</b><br>
                <b>更改</b>
        </span>
        </font>
</head>

<body>

    <center>

        <body background="weather.png">

            <table border="1" style="background-color:white">
                <thead>
                    <tr>
                        <th>身分證字號</th>
                        <th>姓名</th>
                        <th>生日</th>
                        <th>電話</th>
                        <th>信箱</th>
                        <th>折扣</th>
                        <th>功能</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($num > 0) { // 有記錄         
                        while ($row = mysqli_fetch_array($rows)) {
                            $id = $row["id"];
                            $name = $row["name"];
                            $birth = $row["birth"];
                            $tel = $row["tel"];
                            $email = $row["email"];
                            $discount = $row["discount"];
                            echo "<tr>";
                            echo "<td>" . $id . "</td>";
                            echo "<td>" . $name . "</td>";
                            echo "<td>" . $birth . "</td>";
                            echo "<td>" . $tel . "</td>";
                            echo "<td>" . $email . "</td>";
                            echo "<td>" . $discount . "</td>";
                            echo "<td>";
                            echo "<a href='bchange1.php?id=" . $id . "'>更改</a>";
                            echo "</td>";
                            echo "<td>";
                            echo "<a href='bdelete.php?id=" . $id . "'>刪除</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    mysqli_free_result($rows);   // 釋放查詢結果
                    ?>

                </tbody>
            </table>
            <input type="button" value="上一頁" style="background-color:#FFC9C9;border-color:#FFC9C9" onclick="location.href='test.php'">
        </body>

</html>