<?php

$repos = json_decode(file_get_contents(__DIR__ . '/repos.json'), true);

foreach($repos as $repo) {
  if ($repo['fork'] || $repo['archived'] || $repo['private']) {
    continue;
  }
  $homepage = $repo['homepage'] ? "* [HomePage]({$repo['homepage']})" : "";
  $template = <<<EOT
---
layout: project
title: "{$repo['name']}"
category: Personal
tags:
  - github
---

{$repo['description']}

Links:

{$homepage}
* [{$repo['full_name']}]({$repo['url']})

EOT;
  $file_name = date('Y-m-d', strtotime($repo['created_at'])) . '-' .$repo['name'] . '.md';
  print $file_name;
  print PHP_EOL;
  print $template;
  print PHP_EOL;
}
