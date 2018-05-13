<?php
  
  if(!array_key_exists('names', $_COOKIE)) 
    $data = "https://spreadsheets.google.com/feeds/list/18DtL1BZ7KvPToRWVPgJ4EYcH8q2HK9WPs-ruUAShJf4/od6/public/values?alt=json";
    $json = file_get_contents($data);
    $json_decode = json_decode($json);
    
    $names = $json_decode->feed->entry;
    $_SESSION['names'] = $names;
  } else {
    $names = $_SESSION['names'];
  }
  
  if(!array_key_exists('count', $_COOKIE)) {
    $_COOKIE['count'] = 0;
  }

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_COOKIE['count'] = $_COOKIE['count'] + 1;
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
