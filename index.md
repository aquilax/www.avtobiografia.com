---
layout: default
title: Avtobiografia
---

<div id="card">
  <h1>Evgeniy Vasilev</h1>
  <em>exploring computers since 1995</em>
</div>

You can Download or view my **CV** from [here](/cv.html).

Some of the places I can be found online are:
 [GitHub](https://github.com/aquilax),
 [LinkedIn](http://bg.linkedin.com/in/aquilax),
 [Google+](https://plus.google.com/103587746021296602888),
 [Twitter](http://twitter.com/aquilax) or
 [LastFM](http://www.last.fm/user/aquilax)


<div id="projects">
  <h2>Projects</h2>
  <ul>
    {% for post in site.posts limit 10 %}
      <li><a href="{{ post.url }}">{{ post.title }}</a> - <em>{{ post.date | date_to_string }}</em></li>
    {% endfor %}
  </ul>
</div>
