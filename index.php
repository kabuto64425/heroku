<?php
  //session_start();
  //if(!array_key_exists('count', $_SESSION)) {
  //  $_SESSION['count'] = 0;
  //}
  //if($_SERVER['REQUEST_METHOD'] === 'POST'){
  //  $_SESSION['count'] = $_SESSION['count'] + 1;
  //}
  //echo $_SESSION['count'];
  
  $data = "https://spreadsheets.google.com/feeds/list/18DtL1BZ7KvPToRWVPgJ4EYcH8q2HK9WPs-ruUAShJf4/od6/public/values?alt=json";
  $json = file_get_contents($data);
  $json_decode = json_decode($json);
  
  $names = $json_decode->feed->entry;

  foreach ($names as $name) {
    echo $name->{'gsx$問題文'}->{'$t'};
    echo '</br>';
  }
?>
<form action="" method="POST">
  <input type="text" name="name" placeholder="ダルビッシュと入力してください">
  <input type="submit" value="submit">
  <input type="hidden" name="count" value="<?php
                                           //!array_key_exists('count', $_POST)
                                           if(!array_key_exists('count', $_POST)) {
                                             $count = 0;
                                           } else {
                                             $count = $_POST['count'];
                                           }
                                           echo $count;
                                           ?>">
</form>
<?php echo $count; ?>
