<?php
session_start();

$file = "message.json";
$messages = json_decode(file_get_contents($file));
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["token"] != sha1(session_id())) {
       die("invalid access.");
    }
    $name = $_SESSION["name"];
    $message = $_POST["message"];
    $messages[] = [$name, $message];
    file_put_contents($file, json_encode($messages), LOCK_EX);
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>session sample</title>
  </head>
  <body>
    <h1>Site1 : localhost:8000</h1>
    <h2>login</h2>
    <ul>
      <?php for ($i = 0; $i < count($messages); $i++) { ?>
        <li><?= $messages[$i][0] ?> : <?= $messages[$i][1] ?></li>
      <?php }?>
    </ul>
    <form action="" method="post">
      <input type="hidden" name="token" value="<?=sha1(session_id())?>">
      <input type="text" name="message">
      <input type="submit" value="add">
    </form>
  </body>
</html>
