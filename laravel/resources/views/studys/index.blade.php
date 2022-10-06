<x-study_components.layout>
  <x-slot name="title">
    My BBS
  </x-slot>
  
  <h1>MyBBS</h1>
  <ul>
    @forelse ($posts as $index => $post)
      <li>
        <a href="{{ route('posts.show', $post) }}">
          {{ $post->title }}
        </a>  
      </li>
    @empty
      <li>No posts!!</li>
    @endforelse
  </ul>
</x-study_components.layout>