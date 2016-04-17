<!doctype html>
<html lang="en-CA">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@if (content_for('title')) @yield('title') - Y&rsquo;s Men Maritimes Region @else Y&rsquo;s Men Maritimes Region, Canada and Caribbean Area @endif</title>
  <link href="/css/style.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="/js/app.js"></script>
  @if ( Config::get('app.debug') )
    <script type="text/javascript">
      document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
    </script> 
  @endif
  @yield('head')
</head>
<body>
  @include('layouts.partials.header')
  @yield('hero')
  <main id="content" class="main-content">
    @yield('content')
  </main>
  @include('layouts.partials.footer')
  @yield('bottom')
</body>
</html>