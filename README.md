# Flower-FlowerSeedling-System
## 花草苗木系統使用者手冊


## 壹、 開發目的 
為東海園藝公司開發資料庫系統，用途為方便管理客戶資料、訂貨資料、進貨資料、公司應收帳款資料等資料 
 

### 一.	資料表內容 
#### 1.	花草苗木資料表：東海園藝公司用以存放花草苗木資料的資料表，包括：
花草苗木名稱、花草苗木編號、供應商名稱、公司內現有數量、單位、單價、小計、公司內存放位置與進貨日期等。
#### 2.	客戶資料表：東海園藝公司用以存放客戶基本資料之資料表，包括：
客戶姓名、身分證字號(若為自然人)/統一編號(若是法人)、生日(法人為公司設立日期)、電話、Email、年齡、照片與會員折扣等基本資料。
#### 3.	供應商資料表：東海園藝公司用以存放供應商資料之資料表，包括：
供應商名稱、供應商統一編號、電話、Email與負責人姓名等。
#### 4.	客戶購買資料表：東海園藝公司用以存放客戶所訂購與預訂花草苗木之交易記錄的資料表，包括：
花草苗木名稱、花草苗木編號、客戶身分證字號/統一編號、供應商名稱、購買數量、售價、總金額、折扣後金額、訂購日期、預計交貨日期與實際交貨日期等。

### 二.	功能 
#### 1.	花草苗木資料表：
新增資料：係新增花草苗木資料。
查詢資料：至少須能以花草苗木編號或花草苗木名稱查詢。
#### 2.	客戶資料表： 
新增資料：新增客戶資料。
刪除資料：係將資料移入「靜止戶資料表」中，而不是真的刪除。
修改資料：當客戶資料與事實不符時，例如，Email或電話變更，用以修改。
查詢資料：至少須能以身分證字號/統一編號或客戶姓名查詢。
#### 3.	靜止戶資料表： 
新增資料：係將資料從「客戶資料表」中移入本資料表。
修改資料：當客戶資料與事實不符時，例如，Email或電話變更，用以修改。
查詢資料：至少須能以身分證字號/統一編號或客戶姓名查詢。
移轉資料：將資料移回「客戶資料表」中。
#### 4.	供應商資料表： 
新增資料：係增加新的供應商。	
查詢資料：使用者至少可以直接依供應商統一編號或供應商名稱查詢該供應商資料。
#### 5.	客戶購買資料表：須能新增資料、查詢資料及列印資料，其中
新增資料：係某一客戶購買或訂購某一花草苗木之資料。
查詢資料：至少須能以花草苗木編號或客戶身分證字號/統一編號查詢客戶購買資料。
### 三、ER MODEL 
 <img width="491" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/4a047fd6-7963-4d80-ae05-c77f6250e1bf">
 
## 貳、 硬體環境 
任何可開啟網頁之設備皆可使用此系統，但僅限桌上型電腦以及筆記型電腦可供開發者或管理人員進行編輯。
 
## 參、軟體環境
![image](https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/7ae0df49-0762-477e-9e42-af0e227ad166)

## 肆、系統安裝步驟
 <img width="470" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/0206c6d2-3a01-4732-a288-3894c14fe7bf">
 
此為下載好的檔案

 <img width="313" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/649400b3-b8e8-4188-a17f-a33c24c292b2">

點擊下載到的檔案後，會跳出此視窗，點Next>

 <img width="311" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/4d1f3db9-ff9d-4b93-b2cf-867b1b092fd5">

之後會出現此畫面，繼續點擊Next>

 <img width="311" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/c7dc100e-234d-44b7-9650-b9c62e60f39c">

選擇安裝位址後，按Next>

 <img width="303" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/4f34269e-b951-4896-83a6-5eb347cececd">

跳出此視窗，即將準備安裝，按Next>

 <img width="304" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/a4a086ab-bc13-4289-ac1a-2883e55e51a9">

安裝開始，跑進度條

 <img width="300" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/26132866-4c40-4406-84fd-5fbd6a435ac6">

按Finish，安裝完成後，會跑出下圖的視窗

 <img width="302" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/f2f95a94-c5df-4754-b9d5-d7466a8d974e">

選擇語言，按下Save

 <img width="318" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/ab06af72-4e11-4915-bef1-d682ecbc3539">

啟動Apeach和MySQL
1.	各項功能之操作描述
1.	新增功能：
<img width="239" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/0b629383-7fa0-4eae-b05b-af27f78e26de">

2.	修改功能：
<img width="333" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/15cabdf1-045e-43b7-b4a6-21ca02ce83df">

3. 更新功能：
<img width="217" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/14b1bc40-8def-4627-8d1d-c8e7c821fac0">


4. 查詢功能：
<img width="256" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/b1450145-976f-42fd-8e99-cc52cf611e1f">

5. 刪除功能：
 <img width="172" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/3286d8e5-bca8-41d9-a898-ce0b025e09db">
 
 <img width="453" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/bc3f6186-e59a-4122-83f3-b51bf4fbb214">

<img width="289" alt="image" src="https://github.com/LuluLee0117/Flower-FlowerSeedling-System/assets/88627831/febfdd12-d68d-404b-acf6-c973d4d0ecb0">



