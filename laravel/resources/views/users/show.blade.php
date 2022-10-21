<x-user_layouts.app>
  <x-slot name="title">
    マイページ
  </x-slot>

  <x-slot name="content">
    <x-slot name="page_header">
      <span class="page-title">マイページ</span>

      <div class="page-nav">
        <a href="">設定</a>
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button class="btn">ログアウト</button>
        </form>
        <form action="{{ route('users.destroy') }}" method="post">
          @method('DELETE')
          @csrf
          <button class="btn">退会</button>
        </form>
      </div>
    </x-slot>
  </x-slot>
</x-user_layouts.app>

{{-- <h1>マイページ</h1>
<p>ようこそ、{{ Auth::user()->name }}さん</p>
<p>ID：{{ Auth::user()->id }}</p>

 --}}

  {{-- <a href="{{ route('users.index') }}">&laquo;Back</a>
    <a href="">設定</a>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="btn">ログアウト</button>
      </form> --}}