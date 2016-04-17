<footer class="mainfooter" role="contentinfo">
  <nav class="wrap interests">
    <section>
      <h1>Y&rsquo;s Men Maritimes Region</h1>
      {!! $menu_footer_region->asUl() !!}
    </section>
    <section>
      <h1>Clubs <span class="catchword">&amp;</span> Regional Team</h1>
      <ul>
        <li><a href="{{ route('reports.index') }}">Submit a report</a></li>
        <li><a href="http://www.maritimesysmen.com/officer_manual/">Officer&rsquo;s Handbook</a></li>
        @if (Auth::check())
          <li><a href="/auth/logout">Log Out</a></li>
        @else
          <li><a href="/auth/login">Log In</a></li>
        @endif
      </ul>
    </section>
    <section>
      <h1>Social</h1>
      <ul>
        <li><a href="http://maritimesysmen.blogspot.ca">Blog</a></li>
        <li><a href="http://www.facebook.com/groups/204289452946466/">Facebook</a></li>
        <li><a href="https://twitter.com/maritimesysmen">Twitter</a></li>
      </ul>
    </section>
  </nav>
  <div class="wrap colophon">
    <div class="logo">
      <img src="/img/logo-white-512.png" alt="[logo] Logo of Y's Men and Y Service Clubs International">
    </div>
    <div class="cr">
      <p>To Acknowledge the Duty that Accompanies Every Right.</p>
      <p>&copy; 2015<?php if( date("Y") > 2015 ): ?> – <?= date('Y') ?><?php endif; ?> Maritimes Y&#8217;s Men</p>
    </div>
  </div>
</footer>