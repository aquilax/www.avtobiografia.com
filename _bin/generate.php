<?php

$repos = json_decode(file_get_contents(__DIR__ . '/repos.json'), true);

foreach($repos as $repo) {
  if ($repo['fork'] || $repo['archived'] || $repo['private']) {
    continue;
  }
  $license = $repo['license'] ? $repo['license']['key'] : "Unknown";
  $licenseLabel = $repo['license'] ? $repo['license']['name'] : "None";
  $homepage = $repo['homepage'] ? "* [HomePage]({$repo['homepage']})" : "";
  $language = $repo['language'] ? "- {$repo['language']}" : "";
  $name = $repo['description'] ? addcslashes($repo['description'], '"') : $repo['name'];
  $repoName = $repo['name'];
  $image = '';
  if (file_exists(__DIR__ . '/../img/' . $repo['name'] . '.png')) {
    $image = "![{$repo['name']}](/img/{$repo['name']}.png)";
  }
  $date = date('Y-m-d', strtotime($repo['created_at']));
  $template = <<<EOT
---
layout: project
title: "{$name}"
date: "{$date}T00:00:00Z"
category: Personal
license: {$license}
slug: {$repoName}
tags:
  - github
  {$language}
aliases:
  - /personal/{$repoName}.html
url: /project/{$repoName}.html
---

{$repo['description']}

{$image}

License: {$licenseLabel}

Links:

{$homepage}
* [{$repo['full_name']}]({$repo['html_url']})

EOT;
  $fileName = $date . '-' .$repo['name'] . '.md';
  file_put_contents(__DIR__ . '/../content/project/' . $fileName, preg_replace("/[\r\n]{2,}/", "\n\n", $template));
}
