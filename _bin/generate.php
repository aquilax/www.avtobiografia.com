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
  $image = '';
  if (file_exists(__DIR__ . '/../img/' . $repo['name'] . '.png')) {
    $image = "![{$repo['name']}](/img/{$repo['name']}.png)";
  }
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

{$image}

Links:

{$homepage}
* [{$repo['full_name']}]({$repo['html_url']})

EOT;
  $fileName = date('Y-m-d', strtotime($repo['created_at'])) . '-' .$repo['name'] . '.md';
  file_put_contents(__DIR__ . '/../_posts/' . $fileName, preg_replace("/[\r\n]{2,}/", "\n\n", $template));
}
