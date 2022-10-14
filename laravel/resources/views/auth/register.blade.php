<x-user_layouts.app>
  <x-slot name="title">
    新規登録
  </x-slot>

  <x-slot name="content">
    <x-slot name="page_header">
      <span class="page-title">新規登録</span>
    </x-slot>

    <form method="post" action="{{ route('register') }}">
      @csrf 

      <dl>
        <dt>名前</dt>
        <dd><input type="text" name="name" value="{{ old('name') }}"></dd>
        @error('name')
          <dd>{{ $message }}</dd>
        @enderror

        <dt>メールアドレス</dt>
        <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
        @error('email')
          <dd>{{ $message }}</dd>
        @enderror

        <dt>パスワード</dt>
        <dd><input type="password" name="password"></dd>
        @error('password')
          <dd>{{ $message }}</dd>
        @enderror

        <dt>パスワード（確認用）</dt>
        <dd><input type="password" name="password_confirmation" placeholder="もう一度入力"></dd>
        @error('password_confirmation')
          <dd>{{ $message }}</dd>
        @enderror
      </dl>

      <button type="submit">登録する</button>
      <a href="/">キャンセル</a>
    </form>
  </x-slot>
</x-user_layouts.app>