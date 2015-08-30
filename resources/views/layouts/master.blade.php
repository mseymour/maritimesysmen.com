<!doctype html>
<html lang="en-CA">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@if (content_for('title')) @yield('title') - Y&rsquo;s Men Maritimes Region @else Y&rsquo;s Men Maritimes Region, Canada and Caribbean Area @endif</title>
  <link href="/css/style.css" rel="stylesheet">
  <script src="/http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
  <header id="top" class="masthead" role="banner">
    <div class="wrap">
      <a class="masthead-logo logo" href="/index.php" title="Back to the Homepage"><img src="/img/logo-white-512.png" alt="[logo] Logo of Y&#8217;s Men and Y Service Clubs International"></a>
      <nav class="site-nav" role="navigation">
        <button class="site-nav-toggle"><span></span></button>
        <ul class="site-nav-list">
          <li>
            <a href="/about"><span>About Us <small>Maritimes Y&#8217;s Men</small></span></a>
            <ul>
              <li><a href="/about#area-canada-caribbean">Area Canada &amp; Caribbean</a></li>
              <li><a href="/about/ys-menettes">Y&#8217;s Menettes</a></li>
              <!-- <li><a href="#">Awards</a></li> -->
              <li><a href="/about#service-projects">Service Projects</a></li>
              <!-- <li><a href="#">An item with a submenu</a>
                <ul>
                  <li><a href="#">A submenu item</a></li>
                  <li><a href="#">A submenu item</a>
                    <ul>
                      <li><a href="#">A sub-submenu item</a></li>
                      <li><a href="#">A sub-submenu item</a></li>
                      <li><a href="#">A sub-submenu item</a></li>
                      <li><a href="#">A sub-submenu item</a></li>
                    </ul>
                  </li>
                  <li><a href="#">A submenu item</a></li>
                  <li><a href="#">A submenu item</a>
                    <ul>
                      <li><a href="#">A sub-submenu item</a></li>
                      <li><a href="#">A sub-submenu item</a></li>
                      <li><a href="#">A sub-submenu item</a></li>
                      <li><a href="#">A sub-submenu item</a></li>
                    </ul>
                  </li>
                </ul>
              </li> -->
            </ul>
          </li><!--
          --><li><a href="/clubs"><span>Our Clubs <small>From Woodstock to Glace Bay</small></span></a></li><!--
          --><li><a href="#"><span>Regional Team <small>2014&mdash;2015</small></span></a></li><!--
          --><li><a href="#"><span>Regional Convention <small>Woodstock 2015</small></span></a></li><!--
          --><!-- <li><a href="#"><span>Submit a report</span></a>
              <ul>
                <li><a href="#">Regional Presidents</a></li>
                <li><a href="#">Regional Presidents <small>(Y&#8217;s Menettes)</small></a></li>
                <li><a href="#">District Governor</a></li>
                <li><a href="#">Regional Director</a></li>
              </ul>
            </li> -->
        </ul>
      </nav>
    </div>
  </header>
  <main id="content" class="maincontent">
    <section class="wrap">
      @yield('content')
    </section>
  </main>
  <footer class="mainfooter" role="contentinfo">
    <div class="wrap">
      <div class="logo">
        <img src="/img/logo-white-512.png" alt="[logo] Logo of Y's Men and Y Service Clubs International">
      </div>
      <div class="cr">
        <p>To Acknowledge the Duty that Accompanies Every Right.</p>
        <p>&copy; 2015<?php if( date("Y") > 2015 ): ?> – <?= date('Y') ?><?php endif; ?> Maritimes Y&#8217;s Men</p>
      </div>
    </div>
  </footer>
</body>
</html>