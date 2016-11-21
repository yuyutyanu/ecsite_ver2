<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/reset.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/template.css" media="screen" title="no title" charset="utf-8">
    <script src="/js/jquery.min.js" charset="utf-8"></script>
    <script src="/js/vue.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/@yield('css').css" media="screen" title="no title" charset="utf-8">
  </head>
  <body style="background-color:#fffff0">
    <header>
      <nav>
        <ul>
          <a href="/"><li>TOP</li></a>
          @if (Auth::check())
            <a href="/authcart"><li>CART</li></a>
          @else
            <a href="/sessioncart"><li>CART</li></a>
          @endif
        </ul>
      </nav>
    </header>
    @yield('main')
    <footer></footer>
  </body>
</html>
