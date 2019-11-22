<?php

$repos = json_decode(file_get_contents(__DIR__ . '/repos.json'), true);

foreach($repos as $repo) {
  if ($repo['fork'] || $repo['archived'] || $repo['private']) {
    continue;
  }
  $license = $repo['license'] ? $repo['license']['key'] : "Unknown";
  $homepage = $repo['homepage'] ? "* [HomePage]({$repo['homepage']})" : "";
  $language = $repo['language'] ? "- {$repo['language']}" : "";
  $name = $repo['description'] ? addcslashes($repo['description'], '"') : $repo['name'];
  $template = <<<EOT
---
layout: project
title: "{$name}"
category: Personal
license: {$license}
tags:
  - github
  {$language}
---

{$repo['description']}

Links:

{$homepage}
* [{$repo['full_name']}]({$repo['html_url']})

EOT;
  $fileName = date('Y-m-d', strtotime($repo['created_at'])) . '-' .$repo['name'] . '.md';
  file_put_contents(__DIR__ . '/../_posts/' . $fileName, $template);

}
