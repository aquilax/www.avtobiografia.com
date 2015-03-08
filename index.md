---
layout: default
title: Avtobiografia
---

<div id="card">
  <h1>Evgeniy Vasilev</h1>
  <em>exploring sience and technology since 1995</em>
</div>

You can check my [Curriculum vitae](/cv.html).

Some of the online spaces I inhabit:
 [About.me](http://about.me/aquilax),
 [GitHub](https://github.com/aquilax),
 [LinkedIn](http://linkedin.com/in/aquilax),
 [Google+](https://plus.google.com/+EvgeniyVasilev),
 [GoodReads](http://www.goodreads.com/user/show/2821810-evgeniy-vasilev),
 [Twitter](http://twitter.com/aquilax),
 [LastFM](http://www.last.fm/user/aquilax),
 [YouPic](https://youpic.com/photographer/aquilax)

<div id="projects">
  <h2>Latest Projects</h2>
  <ul>
    {% for post in site.posts limit:10%}
      <li><a href="{{ post.url }}">{{ post.title }}</a> - <em>{{ post.date | date_to_string }}</em></li>
    {% endfor %}
  </ul>
  <p class="ar"><a href="/projects.html">More projects…</a></p>
</div>

<div class='cloud'>
  <h2>Skills cloud</h2>
	{% tag_cloud %}
</div>
