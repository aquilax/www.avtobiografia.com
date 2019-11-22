<?php


$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad
  )
);

$context = stream_context_create($options);

$page = 0;
$all = [];
do {
  $url = sprintf("https://api.github.com/users/aquilax/repos?sort=created&page=%d", $page);
  echo "Fetching $url ...\n";
  $json = file_get_contents($url, false, $context);
  $results = json_decode($json, true);
  $all = array_merge($all, $results);
  usleep(10000);
  $page++;
} while($results);

file_put_contents(__DIR__ . '/repos.json', json_encode($all, JSON_PRETTY_PRINT));
