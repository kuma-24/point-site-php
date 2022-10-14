<!DOCTYPE html>
<html lang="ja">
  {{ $slot }}

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ url('css/style.css') }}>
    @if (Request::is('users/show'))
    @endif
    <title>{{ $title }}</title>
  </head>

  <body>
    <header class="header">
      {{ $page_header }}
    </header>

    <main>
      {{ $content }}
    </main>

    {{-- <footer>
      <p>point-site-php</p>
    </footer> --}}
  </body>
</html>

{{-- @if (Route::has('login') && !Request::is('login') && !Request::is('register'))
  @auth
    @if (Request::is('users/show'))
      <a href="">設定</a>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="btn">ログアウト</button>
      </form>
    @else
      <a href="{{ route('users.show') }}">マイページ</a>
    @endif
  @else
    <a href="{{ route('login') }}">ログイン</a>
    <a href="{{ route('register') }}">新規登録</a>
  @endauth
@endif --}}