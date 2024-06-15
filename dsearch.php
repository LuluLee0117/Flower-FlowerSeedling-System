<!DOCTYPE html>
<html>

<head>
   <title>客戶購買資料表查詢</title>
   <center>
      <span style="font-family:DFKai-sb">
         <font size="30"><b>客戶購買資料表</b><br>
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
               $sql = "SELECT * FROM `客戶購買資料表` ";
               // 檢查是否輸入姓名
               if (chop($_POST["Name"]) != "")
                  $name = "cid LIKE '%" . $_POST["Name"] . "%' ";
               else
                  $name = "";
               // 檢查是否輸入身分證字號
               if (chop($_POST["ID"]) != "")
                  $tel = "fid LIKE '%" . $_POST["ID"] . "%' ";
               else
                  $tel = "";
               // if條件組合SQL字串
               if (chop($name) != "" && chop($tel) != "")
                  $sql .= "WHERE " . $name . " AND " . $tel;
               elseif (chop($name) != "")  // 只有姓名
                  $sql .= "WHERE " . $name;
               elseif (chop($tel) != "")  // 只有身分證字號
                  $sql .= "WHERE " . $tel;
               $sql .= " ORDER BY fname";  // 最後加上排序
               $rows = mysqli_query($db, $sql);      // 執行SQL查詢      
               $num = mysqli_num_rows($rows);   // 取得記錄數
               echo "<table border=1 style=background-color:white><tr><td>花草苗木編號</td>";
               echo "<td>花草苗木名稱</td><td>客戶身分證字號/統一編號</td><td>供應商名稱</td><td>購買數量</td><td>售價</td><td>總金額</td><td>折扣後金額</td><td>訂購日期</td><td>預計交貨日期</td><td>實際交貨日期</td></tr>";
               // 表格顯示查詢結果
               if ($num > 0) { // 顯示每一筆記錄
                  while ($row = mysqli_fetch_array($rows, MYSQLI_NUM)) {
                     $id = $row[1];
                     echo "<tr>";
                     echo "<td>" . $id . "</td>";
                     echo "<td>" . $row[0] . "</td>";
                     echo "<td>" . $row[2] . "</td>";
                     echo "<td>" . $row[3] . "</td>";
                     echo "<td>" . $row[4] . "</td>";
                     echo "<td>" . $row[5] . "</td>";
                     echo "<td>" . $row[6] . "</td>";
                     echo "<td>" . $row[7] . "</td>";
                     echo "<td>" . $row[8] . "</td>";
                     echo "<td>" . $row[9] . "</td>";
                     echo "<td>" . $row[10] . "</td>";
                     echo "</tr>";
                  }
               }
               echo "</table><hr/>";
               mysqli_free_result($rows);
               mysqli_close($db);               // 關閉伺服器連接
            }
            ?>
      <form action="dsearch.php" method="post">
         <table border="1" style="background-color:white;">
            <tr>
               <td>查詢客戶身分證字號/統一編號:</td>
               <td>
                  <!--input type="text" name="Name" size="10" maxlength="20" /-->
                  <select name="Name">
                     <option value=" ">請選擇客戶身分證字號/統一編號</option>
                     　 <option value="A212345678">A212345678</option>
                     <option value="B123456789">B123456789</option>
                     　 <option value="C344444444">C344444444</option>
                  </select>
               </td>
            </tr>
            <tr>
               <td>查詢花草苗木編號:</td>
               <td>
                  <!--input type="text" name="cID" size="20" maxlength="20" /-->
                  <select name="ID">
                     <option value=" ">請選擇花草苗木編號</option>
                     　 <option value="09-876-5432-1">09-876-5432-1</option>
                     <option value="08-765-4321-9">08-765-4321-9</option>
                     　 <option value="07-654-3219-8">07-654-3219-8</option>
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