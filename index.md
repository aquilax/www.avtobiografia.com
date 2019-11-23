---
layout: default
title: Avtobiografia
---

<div id="card">
  <h1>Evgeniy Vasilev</h1>
  <em class="bio">fighting entropy since 1980</em>
</div>

You can check my [Curriculum vitae](/cv.html).

More about me also here:
 [GitHub](https://github.com/aquilax),
 [LinkedIn](http://linkedin.com/in/aquilax),
 [GoodReads](http://www.goodreads.com/user/show/2821810-evgeniy-vasilev),
 [WakaTime](https://wakatime.com/@aquilax)
 [LastFM](http://www.last.fm/user/aquilax),
 [Gyroscope](https://gyrosco.pe/aquilax/)
 [About.me](http://about.me/aquilax),
 [Twitter](http://twitter.com/aquilax),
 [Quantified aquilax](https://quantified.avtobiografia.com/),
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
