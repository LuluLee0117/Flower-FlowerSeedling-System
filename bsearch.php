<!DOCTYPE html>
<html>

<head>
    <title>客戶基本資料查詢</title>
    <center>
        <span style="font-family:DFKai-sb">
            <font size="30"><b>客戶基本資料</b><br>
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
                    $sql = "SELECT * FROM `客戶資料表` ";
                    // 檢查是否輸入姓名
                    if (chop($_POST["Name"]) != "")
                        $name = "name LIKE '%" . $_POST["Name"] . "%' ";
                    else
                        $name = "";
                    // 檢查是否輸入身分證字號
                    if (chop($_POST["ID"]) != "")
                        $tel = "id LIKE '%" . $_POST["ID"] . "%' ";
                    else
                        $tel = "";
                    // if條件組合SQL字串
                    if (chop($name) != "" && chop($tel) != "")
                        $sql .= "WHERE " . $name . " AND " . $tel;
                    elseif (chop($name) != "")  // 只有姓名
                        $sql .= "WHERE " . $name;
                    elseif (chop($tel) != "")  // 只有身分證字號
                        $sql .= "WHERE " . $tel;
                    $sql .= " ORDER BY name";  // 最後加上排序
                    $rows = mysqli_query($db, $sql);      // 執行SQL查詢
                    $num = mysqli_num_rows($rows);   // 取得記錄數
                    echo "<table border=1 style=background-color:white><tr><td>身分證字號</td>";
                    echo "<td>客戶名稱</td><td>生日</td><td>電話</td><td>Email</td><td>年齡</td><td>折扣</td>";
                    // 表格顯示查詢結果
                    if ($num > 0) { // 顯示每一筆記錄
                        while ($row = mysqli_fetch_array($rows)) {
                            $id = $row["id"];
                            echo "<tr>";
                            echo "<td>" . $id . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["birth"] . "</td>";
                            echo "<td>" . $row["tel"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["age"] . "</td>";
                            echo "<td>" . $row["discount"] . "</td>";
                            echo "</tr>";
                        }
                    }
                    echo "</table><hr/>";
                    mysqli_free_result($rows);
                    mysqli_close($db);               // 關閉伺服器連接
                }
                ?>
        <form action="bsearch.php" method="post">
            <table border="1" style="background-color:white;">
                <tr>
                    <td>查詢客戶名稱:</td>
                    <td>
                        <!--input type="text" name="Name" size="10" maxlength="20" /-->
                        <select name="Name">
                            <option value=" ">請選擇客戶名稱</option>
                            　 <option value="意外無限公司">意外無限公司</option>
                            <option value="李阿極">李阿極</option>
                            　 <option value="布羅艾">布羅艾</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>查詢身份證字號:</td>
                    <td>
                        <!--input type="text" name="cID" size="20" maxlength="20" /-->
                        <select name="ID">
                            <option value=" ">請選擇身份證字號</option>
                            　 <option value="C344444444">C344444444</option>
                            <option value="A212345678">A212345678</option>
                            　 <option value="B123456789">B123456789</option>
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