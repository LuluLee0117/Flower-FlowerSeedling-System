<!DOCTYPE html>
<html>

<head>
    <title>供應商資料表查詢</title>
    <center>
        <span style="font-family:DFKai-sb">
            <font size="30"><b>供應商資料表</b><br>
                <b>查詢</b>
        </span>
        </font>
</head>

<center>

    <body background="weather.png">
        <h2>查詢功能</h2>
        <hr /><?php
                if (isset($_POST["Search"])) {  // 如果是表單送回
                    $db = mysqli_connect("localhost", "root", "");
                    mysqli_query($db, "set names utf8");
                    mysqli_select_db($db, "database"); // 選擇資料庫
                    // 建立基本的SQL字串
                    $sql = "SELECT * FROM `供應商資料表` ";
                    // 檢查是否輸入姓名
                    if (chop($_POST["Name"]) != "")
                        $name = "sname LIKE '%" . $_POST["Name"] . "%' ";
                    else
                        $name = "";
                    // 檢查是否輸入身分證字號
                    if (chop($_POST["ID"]) != "")
                        $tel = "sid LIKE '%" . $_POST["ID"] . "%' ";
                    else
                        $tel = "";
                    // if條件組合SQL字串
                    if (chop($name) != "" && chop($tel) != "")
                        $sql .= "WHERE " . $name . " AND " . $tel;
                    elseif (chop($name) != "")  // 只有姓名
                        $sql .= "WHERE " . $name;
                    elseif (chop($tel) != "")  // 只有身分證字號
                        $sql .= "WHERE " . $tel;
                    $sql .= " ORDER BY sname";  // 最後加上排序
                    $rows = mysqli_query($db, $sql);      // 執行SQL查詢
                    $num = mysqli_num_rows($rows);   // 取得記錄數
                    echo "<table border=1 style=background-color:white><tr><td>供應商名稱</td>";
                    echo "<td>供應商統一編號</td><td>電話</td><td>Email</td><td>負責人姓名</td>";
                    // 表格顯示查詢結果
                    if ($num > 0) { // 顯示每一筆記錄
                        while ($row = mysqli_fetch_array($rows, MYSQLI_NUM)) {
                            $id = $row[0];
                            echo "<tr>";
                            echo "<td>" . $id . "</td>";
                            echo "<td>" . $row[1] . "</td>";
                            echo "<td>" . $row[2] . "</td>";
                            echo "<td>" . $row[3] . "</td>";
                            echo "<td>" . $row[4] . "</td>";
                            echo "</tr>";
                        }
                    }
                    echo "</table><hr/>";
                    mysqli_free_result($rows);
                    mysqli_close($db);               // 關閉伺服器連接
                }
                ?>
        <form action="csearch.php" method="post">
            <table border="1" style="background-color:white;">
                <tr>
                    <td>查詢供應商名稱:</td>
                    <td>
                        <!--input type="text" name="Name" size="10" maxlength="20" /-->
                        <select name="Name">
                            <option value=" ">請選擇供應商名稱</option>
                            　 <option value="花香股份有限公司">花香股份有限公司</option>
                            <option value="如花股份有限公司">如花股份有限公司</option>
                            　 <option value="花好股份有限公司">花好股份有限公司</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>查詢供應商統一編號:</td>
                    <td>
                        <!--input type="text" name="ID" size="20" maxlength="20" /-->
                        <select name="ID">
                            <option value=" ">請選擇供應商統一編號</option>
                            　 <option value="C376543210">C376543210</option>
                            <option value="C387654321">C387654321</option>
                            　 <option value="C398765432">C398765432</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br />
            <input type="submit" name="Search" value="查詢" style="background-color:#FFD382;border-color:#FFD382" />&nbsp;<input type="button" value="上一頁" style="background-color:#FFC9C9;border-color:#FFC9C9" onclick="location.href='test.php'">

        </form>
        <br />
    </body>

</html>