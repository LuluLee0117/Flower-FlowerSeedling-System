<html>

<head>
  <title>客戶資料表新增</title>
  <center>
    <span style="font-family:DFKai-sb">
      <font size="30"><b>客戶資料表</b><br>
        <b>新增</b>
    </span>
    </font>
</head>


<body>

  <center>

    <body background="weather.png">
      <form method="POST" action="bcheck.php">

        <p align="center">&nbsp;</p>
        <p align="center">&nbsp; </p>
        <table border="3" align="center" style="background-color:white;">
          <tr>
            <td align=right style="color:#8B4513">客戶姓名</td>
            <td>
              <input type="text" name="客戶姓名" size="42">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">身分證字號/統一編號</td>
            <td>
              <input type="text" name="身分證字號/統一編號" size="42">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">生日</td>
            <td>
              <input type="date" name="生日" size="42">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">電話</td>
            <td>
              <input type="text" name="電話" size="42">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">email</td>
            <td>
              <input type="text" name="email" size="42">
            </td>
          </tr>
          <tr>
            <td align=right style="color:#8B4513">會員折扣</td>
            <td>
              <input type="float" name="會員折扣" size="42">
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