# blog.dev

## Laravel Dusk Example

##### 使用者情節 1
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
>>[c]: Page Is 'register'<br /><br />

[3]: 註冊<br />
>>[a]: 輸入姓名、Email、Password、Password_Confirmation<br />
>>[b]: 點擊註冊<br />
>>[c]: 重導向登入成功頁<br /><br />

[4]: <https://blog.dev/login><br />
>>[a]: Title Blog.dev<br />
>>[b]: Body 我是登入頁<br />
>>[c]: Page Is 'login' <br /><br />

[5]: 登入<br />
>>[a]: 輪入Email、Password<br />
>>[b]: 點擊登入<br />
>>[c]: 重導向登入成功頁<br />

##### 使用者情節 2
[1]: 文章頁 - 正確的標題、內文、的頁面<br />
[2]: 從文章頁註冊<br />
[3]: 導向登入成功頁<br />
[4]: 代出來源 Seesion<br />

##### Testing 執行動作
[1]: <https://blog.dev/article><br />
>>[a]: Title 文章頁<br />
>>[b]: Body 我是文章頁<br />
>>[c]: Page Is 'article'<br /><br />
[2]: 註冊<br />
>>[a]: 輸入姓名、Email、Password、Password_Confirmation<br />
>>[b]: 點擊註冊<br />
>>[c]: 重導向登入成功頁<br />
>>[d]: Session 我從文章頁來<br />

##### 使用者情節 3
[1]: 任務新增頁 - 正確的標題、內文、的頁面<br />
[2]: AJAX 新增一筆新的任務<br />
[3]: 重導向任務頁<br />

##### Testing 執行動作
[1]: <https://blog.dev/task/create><br />
>>[a]: Title 任務新增頁<br />
>>[b]: Body 我是任務新增頁<br />
>>[c]: Page Is 'task/create'<br /><br />

[2]: 新增<br />
>>[a]: 輸入標題<br />
>>[b]: 點擊新增<br />
>>[c]: 等待5秒<br />
>>[d]: 重導向到任務頁列表<br />

##### 使用者情節 4
[1]: Email 重複註冊<br />

##### Testing 執行動作
[1]: <https://blog.dev/register><br />
>>[a]: 輸入姓名、Email、Password、Password_Confirmation<br />
>>[b]: 點擊註冊<br />
>>[c]: FAILURES !!<br />
>>[d]: tests/Browser/screenshots 會產生錯誤截圖<br />




