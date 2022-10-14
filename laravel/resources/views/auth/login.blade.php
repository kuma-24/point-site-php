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
        <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
        @error('email')
          <dd>{{ $message }}</dd>
        @enderror

        <dt>パスワード</dt>
        <dd><input type="password" name="password"></dd>
        @error('password')
          <dd>{{ $message }}</dd>
        @enderror
      </dl>

      <button type="submit">ログイン</button>
      <a href="/">キャンセル</a>
    </form>
  </x-slot>
</x-user_layouts.app>


{{-- <h1>ログイン</h1>
<form action="{{ route('login') }}" method="post">
    @csrf 
    <dl class="form-list">
        <dt>メールアドレス</dt>
        <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
        <dt>パスワード</dt>
        <dd><input type="password" name="password"></dd>
    </dl>
    <button type="submit">ログイン</button>
    <a href="/">キャンセル</a>
</form> --}}