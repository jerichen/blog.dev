# blog.dev

## Laravel Dusk Example

#### 使用者情節 1
[1]: 首頁 - 正確的標題、內文、的頁面<br/>
[2]: 註冊頁 - 正確的標題、內文、的頁面<br/>
[3]: 註冊成功後導向成功頁 - 正確的標題、內文、的頁面<br/>
[4]: 登入頁 - 正確的標題、內文、的頁面<br/>
[5]: 登入成功後導向成功頁 - 正確的標題、內文、的頁面<br/>

##### Testing 執行動作
[1]: <https://blog.dev><br />
>>[a]: Title 首頁<br />
>>[b]: Body 我是首頁<br />
>>[c]: Page Is '/'<br /><br />
    
[2]: <https://blog.dev/register><br />
>>[a]: Title Blog.dev<br />
>>[b]: Body 我是註冊頁<br />
>>[c]: Page Is 'register'<br />
>>[d]: 註冊<br />
>>[e]: 輸入姓名、Email、Password、Password_Confirmation<br />
>>[f]: 點擊註冊<br />
>>[g]: 重導向登入成功頁<br /><br />

[3]: <https://blog.dev/login><br />
>>[a]: Title Blog.dev<br />
>>[b]: Body 我是登入頁<br />
>>[c]: Page Is 'login' <br />
>>[d]: 登入<br />
>>[e]: 輪入Email、Password<br />
>>[f]: 點擊登入<br />
>>[g]: 重導向登入成功頁<br />

### 使用者情節 2
>文章頁 - 正確的標題、內文、的頁面<br />
>從文章頁註冊<br />
>導向登入成功頁<br />
>代出來源 Seesion<br />

##### Testing 執行動作

### 使用者情節 3
>任務新增頁 - 正確的標題、內文、的頁面<br />
>AJAX 新增一筆新的任務<br />
>重導向任務頁<br />

##### Testing 執行動作


