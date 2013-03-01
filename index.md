---
layout: default
title: Avtobiografia
---

<div id="card">
  <h1>Evgeniy Vasilev</h1>
  <em>exploring computers since 1995</em>
</div>

You can check my [CV](/cv.html).

Some of the places I can be found online are:
 [About.me](http://about.me/aquilax),
 [GitHub](https://github.com/aquilax),
 [oDesk](https://www.odesk.com/users/~~358191f109ac5b46),
 [LinkedIn](http://bg.linkedin.com/in/aquilax),
 [Google+](https://plus.google.com/103587746021296602888),
 [GoodReads](http://www.goodreads.com/user/show/2821810-evgeniy-vasilev),
 [Twitter](http://twitter.com/aquilax) or
 [LastFM](http://www.last.fm/user/aquilax)

<div id="projects">
  <h2>Latest Projects</h2>
  <ul>
    {% for post in site.posts limit:10%}
      <li><a href="{{ post.url }}">{{ post.title }}</a> - <em>{{ post.date | date_to_string }}</em></li>
    {% endfor %}
  </ul>
  <p class="ar">List of <a href="/projects.html">all my projects</a>...</p>
</div>

<div class='cloud'>
  <h2>Skills cloud</h2>
	{% tag_cloud %}
</div>
