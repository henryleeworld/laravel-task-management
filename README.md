# Laravel 10 任務管理

想做好時間管理，首先最重要的，就是得將任務列成一目瞭然的清單，舉凡開會、調整日程計劃、必須回覆的郵件等等，所有腦中想到的任務全部都可以記錄下來。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/login` 來進行登入，預設的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。
- 登入後可以經由 `/home` 來進行個人任務管理或變更密碼。

----

## 畫面截圖
![](https://i.imgur.com/M8nZcBH.png)
> 把想到的任務都紀錄下來後，接著要確認一下，是否有遺漏掉任何瑣碎的連帶任務

![](https://i.imgur.com/LvtAcaY.png)
> 輸入新的密碼，在下一個方框中確認確認密碼
