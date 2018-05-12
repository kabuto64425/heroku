<?php
  static $name = 0;

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $name + 1;
  }
  echo $name;
?>
<form action="" method="POST">
  <input type="text" name="name" placeholder="ダルビッシュと入力してください">
  <input type="submit" value="submit">
</form>
