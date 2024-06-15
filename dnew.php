<html>

<head>
  <title>客戶購買資料表新增</title>
  <center>
    <span style="font-family:DFKai-sb">
      <font size="30"><b>客戶購買資料表</b><br>
        <b>新增</b>
    </span>
    </font>
</head>

<body>
  <center>

    <body background="weather.png">
      <form method="POST" action="dcheck.php">

        <p align="center">&nbsp;</p>
        <p align="center">&nbsp; </p>
        <table border="3" align="center" style="background-color:white;">
          <tr>
            <td align=right style="color:#8B4513">花草苗木編號</td>
            <td>
              <input type="text" name="花草苗木編號" size="13">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">客戶身分證字號/統一編號</td>
            <td>
              <input type="text" name="客戶身分證字號/統一編號" size="10">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">購買數量</td>
            <td>
              <input type="int" name="購買數量" size="8">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">售價</td>
            <td>
              <input type="float" name="售價" size="10">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">訂購日期</td>
            <td>
              <input type="date" name="訂購日期" size="10">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">預計交貨日期</td>
            <td>
              <input type="date" name="預計交貨日期" size="10">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">實際交貨日期</td>
            <td>
              <input type="date" name="實際交貨日期" size="10">
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