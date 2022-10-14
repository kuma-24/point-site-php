<x-user_layouts.app>
  <x-slot name="title">
    ホーム
  </x-slot>

  <x-slot name="content">
    <x-slot name="page_header">
      <span class="page-title">point-site</span>

      <div class="page-nav">
        @if (Route::has('login'))
          @auth
            <a href="{{ route('users.show') }}">マイページ</a>
          @else
            <a href="{{ route('login') }}">ログイン</a>
            <a href="{{ route('register') }}">新規登録</a>
          @endauth
        @endif
      </div>
    </x-slot>

    <p>content</p>
  </x-slot>
</x-user_layouts.app>