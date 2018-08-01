<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $_SESSION["name"] = $name;
    header("Location: ./chat.php");
    return;
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>session sample</title>
  </head>
  <body>
    <h1>chat</h1>
    <ul>
      <?php for ($i = 0; $i < count($messages); $i++) { ?>
        <li><?= $messages[$i]?></li>
      <?php }?>
    </ul>
    <form action="" method="post">
      <input type="text" name="name">
      <input type="password" name="pass">
      <input type="submit" value="login">
    </form>
  </body>
</html>
