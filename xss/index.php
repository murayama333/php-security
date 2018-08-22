<?php
session_start();
$count = 0;
if (isset($_SESSION["count"])) {
  $count = $_SESSION["count"];
}
$count++;
$_SESSION["count"] = $count;
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>session sample</title>
    <script type="text/javascript">
      console.log(document.cookie)
    </script>
  </head>
  <body>
    <h1><?= $count; ?></h1>
    <a href="">count up</a>
  </body>
</html>
