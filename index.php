<?php
  session_start();

　if(isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
 }

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION['count'] = $_SESSION['count'] + 1;
  }
  echo $_SESSION['count'];
?>
<form action="" method="POST">
  <input type="text" name="name" placeholder="ダルビッシュと入力してください">
  <input type="submit" value="submit">
</form>
