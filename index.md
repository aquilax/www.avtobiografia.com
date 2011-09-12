---
layout: default
title: Avtobiografia
---

Evgeniy Vasilev
===============

*exploring computers since 1995*

You can find me on:
* [GitHub](https://github.com/aquilax)
* [LinkedIn](http://bg.linkedin.com/in/aquilax)
* [Google+](https://plus.google.com/103587746021296602888)
* [Twitter](http://twitter.com/aquilax)
* [LastFM](http://www.last.fm/user/aquilax)

<div id="pages">
  <h2>Pages</h2>
  <ul>
    {% for page in site.html_pages %}
      {% if page.title %}
        <li><a href="{{ page.url }}">{{ page.title }}</a></li>
      {% endif %}
    {% endfor %}
  </ul>
</div>

<div id="projects">
  <h2>Recent projects</h2>
  <ul>
    {% for post in site.posts limit 10 %}
      <li><a href="{{ post.url }}">{{ post.title }}</a> - <em>{{ post.date | date_to_string }}</em></li>
    {% endfor %}
  </ul>
</div>


