<html>

<head>
  <title>花草苗木新增</title>
  <center>
    <span style="font-family:DFKai-sb">
      <font size="30"><b>花草苗木資料表</b><br>
        <b>新增</b>
    </span>
    </font>
</head>

<body>
  <center>

    <body background="weather.png">
      <form method="POST" action="acheck.php">

        <table border="3" align="center" style="background-color:white;">
          <br>
          <tr>
            <td align=right style="color:#8B4513">花草苗木名稱</td>
            <td>
              <input type="text" name="花草苗木名稱" size="20">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">花草苗木編號</td>
            <td>
              <input type="text" name="花草苗木編號" size="20">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">供應商名稱</td>
            <td>
              <input type="text" name="供應商名稱" size="20">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">公司內現有數量</td>
            <td>
              <input type="int" name="公司內現有數量" size="20">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">單位</td>
            <td>
              <input type="text" name="單位" size="20">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">單價</td>
            <td>
              <input type="float" name="單價" size="20">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">公司內存放位置</td>
            <td>
              <input type="text" name="公司內存放位置" size="20">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">進貨日期</td>
            <td>
              <input type="date" name="進貨日期" size="10">
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <input type="submit" value="確定新增" style="background-color:#FFD382;border-color:#FFD382" name="send">

            </td>

          </tr>

        </table>
        <input type="button" value="上一頁" style="background-color:#FFC9C9;border-color:#FFC9C9" onclick="location.href='test.php'">
        <p align="center">&nbsp; </p>
        <p align="center">&nbsp; </p>
      </form>
    </body>

</html>