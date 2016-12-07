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
            <a href="/authcart"><li>カート</li></a>
            <?php
                $user = Auth::user();
                $cart = new \App\Service\AuthcartService;
                $items = $cart->getItems($user->id);
            ?>
            <span class="item_num">{{count($items)}}</span>
            <a class="logout" href="/logout"><li>ログアウト</li></a>
          @else
            <a href="/sessioncart"><li>カート</li></a>
            <span class="item_num">{{count(session()->get("cart",[]))}}</span>
            <a class="login" href="/login"><li>ログイン</li></a>
            <a class="register" href="/register"><li>会員登録</li></a>
          @endif
        </ul>
      </nav>
    </header>
    @yield('main')
    <footer></footer>
  </body>
</html>
