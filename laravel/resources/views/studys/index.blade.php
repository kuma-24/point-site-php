<x-study_components.layout>
  <x-slot name="title">
    My BBS
  </x-slot>
  
  <h1>MyBBS</h1>
  <ul>
    @forelse ($posts as $index => $post)
      <li>
        <a href="{{ route('posts.show', $index) }}">
          {{ $post }}
        </a>  
      </li>
    @empty
      <li>No posts!!</li>
    @endforelse
  </ul>
</x-study_components.layout>

<?php
// defineの値は環境によって変えてください。
define('HOSTNAME', 'db');
define('DATABASE', 'laravel_db_dev');
define('USERNAME', 'laravel_phper');
define('PASSWORD', 'laravel_pass');

try {
  /// DB接続を試みる
  $db  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
  $msg = "MySQL への接続確認が取れました。";
} catch (PDOException $e) {
  $isConnect = false;
  $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
}

echo $msg;
?>