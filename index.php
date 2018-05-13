<?php
  
  if(!array_key_exists('names', $_COOKIE)) 
    $data = "https://spreadsheets.google.com/feeds/list/18DtL1BZ7KvPToRWVPgJ4EYcH8q2HK9WPs-ruUAShJf4/od6/public/values?alt=json";
    $json = file_get_contents($data);
    $json_decode = json_decode($json);
    
    $names = $json_decode->feed->entry;
    setcookie(‘names’, $names, time()+60*60*24*7);
  } else {
    $names = $_COOKIE['names'];
  }
  
  if(!array_key_exists('count', $_COOKIE)) {
    setcookie(‘count’, 0, time()+60*60*24*7);
  }

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    setcookie(‘count’, $_COOKIE['count'] + 1, time()+60*60*24*7);
  }
    
  $count = $_COOKIE['count'];
    
  echo $names[$count]->{'gsx$問題文'}->{'$t'};
  echo '</br>';
  echo $names[$count]->{'gsx$答'}->{'$t'};  
  
?>

<form action="index.php" method="POST">
  <input type="submit" value="submit">
</form>
<?php echo session_id(); ?>
