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
  @include('partials.layouts.header')
  @yield('hero')
  <main id="content" class="maincontent">
    <section class="wrap">
      @yield('content')
    </section>
  </main>
  @include('partials.layouts.footer')
  @yield('bottom')
</body>
</html>