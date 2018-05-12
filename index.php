<?php
  session_start();
  if(!array_key_exists('count', $_SESSION)) {
    $_SESSION['count'] = 0;
  }
?>
<form action="" method="POST">
  <input type="text" name="name" placeholder="ダルビッシュと入力してください">
  <input type="submit" value="submit">
</form>
