---
layout: default
title: Avtobiografia
---

<div class="h-card" id="card">
  <h1 class="p-name">Evgeniy Vasilev</h1>
  <em class="bio p-note">fighting entropy since 1980</em>
  <p><a class="u-url" href="https://www.avtobiografia.com/">www.avtobiografia.com</a></p>
</div>

You can check my [Curriculum vitae](/cv.html).

More about me also here:
  <a rel="me" href="https://github.com/aquilax">GitHub</a>,
  <a rel="me" href="https://linkedin.com/in/aquilax">LinkedIn</a>,
  <a rel="me" href="https://www.goodreads.com/user/show/2821810-evgeniy-vasilev">GoodReads</a>,
  <a rel="me" href="https://keybase.io/aquilax">Keybase</a>,
  <a rel="me" href="https://wakatime.com/@aquilax">WakaTime</a>,
  <a rel="me" href="https://www.last.fm/user/aquilax">LastFM</a>,
  <a rel="me" href="https://about.me/aquilax">About.me</a>,
  <a rel="me" href="https://twitter.com/aquilax">Twitter</a>,
  <a rel="me" href="https://mastodon.cloud/@aquilax">Mastodon</a>
  <a rel="me" href="/life-stack.html">Life Stack</a>
<div id="projects">
  <h2>Latest Projects</h2>
  <ul>
    {% for post in site.posts limit:20 %}
      <li><a href="{{ post.url }}">{{ post.title }}</a> - <em>{{ post.date | date_to_string }}</em></li>
    {% endfor %}
  </ul>
  <p class="ar"><a href="/projects.html">More projects…</a></p>
</div>

<h2 id="skills">Skills cloud</h2>
<div class="cloud">
	{% tag_cloud font-size: 100 - 200% %}
</div>
