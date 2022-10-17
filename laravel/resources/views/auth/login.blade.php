<x-user_layouts.app>
  <x-slot name="title">
    ログイン
  </x-slot>

  <x-slot name="content">
    <x-slot name="page_header">
      <span class="page-title">ログイン</span>
    </x-slot>

    <form method="post" action="{{ route('login') }}">
      @csrf

      <dl>
        <dt>メールアドレス</dt>
        <dd>
          <input type="email" name="email" value="{{ old('email') }}">
        </dd>

        <dt>パスワード</dt>
        <dd>
          <input type="password" name="password">
        </dd>
      </dl>

      @error('email')
        <span>{{ $message }}</span>
      @enderror

      <button type="submit">ログイン</button>
      <a href="/">キャンセル</a>
    </form>
  </x-slot>
</x-user_layouts.app>