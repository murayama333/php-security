# PHP CSRF

CSRFの課題サンプルです。

## 動かし方

site1フォルダ、site2フォルダを2つのサイトと見立てて、プログラムの動作を確認します。

ここではsite1をlocalhost:8000、site2をlocalhost:18000で動作させるものとします。

### site1

```
cd site1
php -S localhost:8000
```

> site1のchat.phpには脆弱性があります。

### site2

```
cd site2
php -S localhost:18000
```

### 動作確認

ブラウザからサイト1（以下のURL）にアクセスしてログインし、チャットを楽しみます。

```
http://localhost:8000/login.php
```


別のブラウザからサイト2（以下のURL）にアクセスします。

```
http://localhost:18000/attack.html
```

> 別サイトであるサイト2から、データを登録できてしまいます。

同様にサイト2（以下のURL）にアクセスします。

```
http://localhost:18000/attack2.html
```

> attack2.htmlのようにユーザは攻撃したことに気づかないかもしれません。
