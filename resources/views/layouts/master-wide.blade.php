<!doctype html>
<html lang="en-CA">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@if (content_for('title')) @yield('title') - Y&rsquo;s Men Maritimes Region @else Y&rsquo;s Men Maritimes Region, Canada and Caribbean Area @endif</title>
  <link href="/css/style.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="/js/app.js"></script>
  @yield('head')
</head>
<body>
  @include('layouts.master._header')
  @yield('hero')
  <main id="content" class="maincontent">
    @yield('content')
  </main>
  @include('layouts.master._footer')
  @yield('bottom')
</body>
</html>