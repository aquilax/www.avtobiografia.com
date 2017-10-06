---
layout: default
title: Projects
---

<nav itemprop="breadcrumb">
  <a href="/">Home</a> &raquo;
  {{ page.title }}
</nav>

<h1>Projects</h1>
{% for category in site.categories %}
<h2 id="{{ category[0] }}-ref">{{ category[0] }}</h2>
{% for post in category[1] %}
  <div class="bb">
    <h3><a href="{{ post.url }}">{{ post.title }}</a></h3>
{% if post.tags != empty %}<p class="tech">Technologies used: <em>{% for tag in post.tags %} <span class="tag" rel="tag"><a href="/tag/{{ tag }}">{{ tag }}</a></span> {% endfor %}</em></p>{% endif %}
  </div>
{% endfor %}
{% endfor %}


  <h2 id="jarcomputers">Projects in JAR Computers</h2>
  <div>
    <h3>MySql to PostgreSQL transfer for the e-commerce website</h3>
    <p class="tech">Technologies used: <em>MySQL, PostgreSQL, ADODB, CSS</em></p>
  </div>
  <div>
    <h3>Satellite websites</h3>
    <p>Database design and development</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, PostgreSQL, CSS</em></p>
  </div>
  <div>
    <h3>ERP Modules</h3>
    <p>Database design and development</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, PostgreSQL, CSS</em></p>
  </div>

  <h2 id="office1">Projects in Office 1 International</h2>
  <div>
    <h3><a href="http://office1export.com">Office 1 Export</a></h3>
    <p>International wholesale export website</p>
    <p class="tech">Technologies used: <em>PHP, XHTML, MySQL, CSS</em></p>
  </div>
  <div>
    <h3><a href="http://office1international.com">Office 1 International</a></h3>
    <p>Office 1 International corporate website</p>
    <p class="tech">Technologies used: <em>PHP, XHTML, MySQL, CSS</em></p>
  </div>
  <div>
    <h3>Retail e-commerce websites</h3>
    <p class="tech">Technologies used: <em>PHP, XHTML, MySQL, CSS</em></p>
  </div>
  <div>
    <h3>Stores' POS and ERP</h3>
    <p>ERP to website remote replication</p>
    <p class="tech">Technologies used: <em>Delphi, PHP</em></p>
  </div>

  <h2>Personal projects</h2>
  <div>
    <h3><a href="https://github.com/aquilax/novigeroi2">New heroes 2</a></h3>
    <p>Browser based RPG.</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, XHTML, jQuery, CSS, MySQL</em></p>
  </div>

  <div>
    <h3><a href="http://super.igrii.com/">Super Game</a></h3>
    <p>Bulgarian ZPG (Zero Player Game)</p>
    <p class="tech">Technologies used: <em>PHP, HTML, CSS, CodeIgniter, JavaScript, Google Maps, Panoramino API</em></p>
  </div>
  <div>
    <h3><a href="http://knigi.igrii.com/">Knigi - igri</a></h3>
    <p>Interactive fiction system</p>
    <p class="tech">Technologies used: <em>PHP, HTML, CSS, CodeIgniter</em></p>
  </div>
  <div>
    <h3><a href="http://posterfans.com/game/rp16g.php">r16pg</a></h3>
    <p>Micro game for the 16k challenge. Small RPG. Code available at <a href="https://github.com/aquilax/rp16g">GitHub</a></p>
    <p class="tech">Technologies used: <em>PHP, HTML, CSS</em></p>
  </div>
  <div>
    <h3><a href="http://posterfans.com/game/">Cows'n Bulls</a></h3>
    <p>Micro game for the 16k challenge. Code available at <a href="https://github.com/aquilax/cowsNBulls">GitHub</a></p>
    <p class="tech">Technologies used: <em>PHP, HTML, CSS</em></p>
  </div>
  <div>
    <h3><a href="http://obiavidnes.com">Classifieds today</a></h3>
    <p>Classified ads portal</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, XHTML, Blueprint, CSS, MySQL, jQuery, SMS Payment</em></p>
  </div>
  <div>
    <h3><a href="http://mestni.com">Mestni</a></h3>
    <p>Local portals for Bulgaria's biggest cities (still not finished).</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, XHTML, Blueprint, CSS, MySQL</em></p>
  </div>
  <div>
    <h3><a href="http://code.google.com/p/mukitobrowser/">MuKiTo Browser</a></h3>
    <p>Mu online alike browser game (very early alpha).</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, XHTML, jQuery, CSS, MySQL</em></p>
  </div>
  <div>
    <h3><a href="http://novigeroi.com">New heroes</a></h3>
    <p>Dragon Knight clone. Fully rewritten using CodeIgniter. Added multiple languages, map support, multiple maps and other enhancements.</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, XHTML, jQuery, CSS, MySQL</em></p>
  </div>
