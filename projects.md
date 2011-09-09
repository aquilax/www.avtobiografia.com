---
layout: default
title: Projects
---



  <h1>Projects</h1>

{% for category in site.categories %}
  <h2 id="{{ category | first}}">{{ category | first }}</h2>
  {% for posts in category %}
    {% for post in posts %}
    <div>
      <h3><a href="{{ post.url }}">{{ post.title }}</a></h3>
      <p class="tech">Technologies used: <em>MySQL, PostgreSQL, ADODB, CSS</em></p>
    </div>
    {% endfor %}
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

  <h2 id="911">Projects in 911.bg</h2>
  <div>
    <h3>Build Communicator</h3>
    <p>Offer validator, classifier and uploader</p>
    <p class="tech">Technologies used: <em>Delphi</em></p>
  </div>

  <h2>Personal projects</h2>
  <div>
    <h3><a href="https://github.com/aquilax/novigeroi2">New heroes 2</a></h3>
    <p>Browser based RPG.</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, XHTML, jQuery, CSS, MySQL</em></p>
  </div>

  <div>
    <h3><a href="https://github.com/aquilax/hranoprovod-go">Hranoprovod</a></h3>
    <p>Personal life tracker</p>
    <p class="tech">Technologies used: <em>Google Go, YAML</em></p>
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
  <div>
    <h3><a href="http://lichen-lekar.com">General practitioner</a></h3>
    <p>General practitioners index.</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, XHTML, Blueprint, CSS, MySQL, Google Maps API, Data Mining</em></p>
  </div>
  <div>
    <h3><a href="http://hranenedieta.com">Hranene - Dieta</a></h3>
    <p>Nutritional information index.</p>
    <p class="tech">Technologies used: <em>PHP, CodeIgniter, XHTML, Blueprint, CSS, MySQL, Google Chart API</em></p>
  </div>
  <div>
    <h3><a href="http://muonlinehelp.com">Mu Online Help</a></h3>
    <p>Mu Online game information.</p>
    <p class="tech">Technologies used: <em>PHP, XHTML, CSS, MySQL, Google Chart API</em></p>
  </div>
  <div>
    <h3><a href="http://citatnik.appspot.com">Bulgarian movie quotes</a></h3>
    <p class="tech">Technologies used: <em>Python, Google App Engine, XHTML, CSS</em></p>
  </div>
  <div>
    <h3><a href="http://scenata.com">Scenata</a></h3>
    <p>Musical events and band profiles</p>
    <p class="tech">Technologies used: <em>PHP, XHTML, CSS, MySQL, Last FM API</em></p>
  </div>
  <div>
    <h3><a href="http://diggbg.com">DiggBG</a></h3>
    <p>Social bookmarking website</p>
    <p class="tech">Technologies used: <em>PHP, XHTML, CSS, MySQL, CodeIgniter</em></p>
  </div>
  <div>
    <h3><a href="http://bgmacki.com">BGMacki</a></h3>
    <p>HOT or NOT for cats</p>
    <p class="tech">Technologies used: <em>PHP, XHTML, CSS, MySQL, CodeIgniter</em></p>
  </div>
  <div>
    <h3><a href="http://blog.horemag.net">Horemag</a></h3>
    <p>Personal blog</p>
    <p class="tech">Technologies used: <em>WordPress</em></p>
  </div>
  <div>
    <h3><a href="http://dev.horemag.net">Horemag Dev</a></h3>
    <p>Development blog</p>
    <p class="tech">Technologies used: <em>WordPress</em></p>
  </div>
  <div>
    <h3><a href="http://rimichka.com">Rimichka</a></h3>
    <p>Rhyme dictionary</p>
    <p class="tech">Technologies used: <em>PHP, XHTML, CSS, MySQL</em></p>
  </div>
