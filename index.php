<?php
  session_start();
  $_SESSION['count'] = 0;
  if(array_key_exists('count', $_SESSION)) {
    echo 'aaaa';
  }
?>
<form action="" method="POST">
  <input type="text" name="name" placeholder="ダルビッシュと入力してください">
  <input type="submit" value="submit">
</form>
