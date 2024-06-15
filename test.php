<!DOCTYPE html>
<html>
<header>
    <title>花草苗木首頁</title>
    <center>
        <h1>
            <img src="123.png" alt="MDN logo" width="80" height="80"><br>
            <font size="30">Happy Everyday flower</font><br>
            <font size="30">歡迎使用資料庫</font>

        </h1>

</header>

<body>

    <body background="weather.png">
        <br>
        <br>
        <br>
        <center>
            <span style="font-size:30px;">請選擇要使用的資料表<br>

                選擇資料表：
                <select onChange="renew(this.selectedIndex);" style="font-size:25px;">
                    <option disabled=disabled selected=selected>選擇資料表
                    <option>花草苗木資料表
                    <option>客戶資料表
                    <option>供應商資料表
                    <option>客戶購買料表
                    <option>靜止戶資料表
                </select>
                <br>

                選擇功能：
                <select id="member" style="font-size:25px;">
                    <option value="0" disabled=disabled selected=selected>請選擇功能
                </select>
                <br>
                <br>
                <br>
                <input type="button" value="瀏覽所選取資料表功能" onclick="TheWikiIntro()" style="font-size:20px;background-color:#FFC9C9;border-color:#FFC9C9"></span>

            <script>
                CharacterVoice = new Array();

                CharacterVoice[1] = ["新增", "查詢"];

                CharacterVoice[2] = ["新增", "更改", "查詢"];

                CharacterVoice[3] = ["新增", "查詢"];

                CharacterVoice[4] = ["新增", "查詢"];

                CharacterVoice[5] = ["更改", "查詢"];
                //另用一個陣列記取上方CharacterVoice對應的value
                CharacterWiki = new Array();

                CharacterWiki[1] = ["anew.php", "asearch.php"];

                CharacterWiki[2] = ["bnew.php", "bchange.php", "bsearch.php"];

                CharacterWiki[3] = ["cnew.php", "csearch.php"];

                CharacterWiki[4] = ["dnew.php", "dsearch.php"];

                CharacterWiki[5] = ["echange.php", "esearch.php"];


                function renew(index) {
                    for (var i = 0; i < CharacterVoice[index].length; i++)
                        //新增select的選項
                        member.options[i] = new Option(CharacterVoice[index][i], "http://localhost:8080/database/" + CharacterWiki[index][i]);
                    member.length = CharacterVoice[index].length;
                }

                function TheWikiIntro() {
                    if (member.options[member.selectedIndex].value == "0") {} else {
                        window.open(member.options[member.selectedIndex].value);
                    }
                }
            </script>
            <br><br>
            <input type="submit" name="send" value="使用者手冊" style="background-color:#FFD382;border-color:#FFD382" onclick="location.href='user.php'" />
    </body>

</html>