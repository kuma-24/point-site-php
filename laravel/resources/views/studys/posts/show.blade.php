<x-study_components.layout>
  <x-slot name="title">
    {{ $post }} - MY BBS
  </x-slot>

  <div class="back-link">
    &laquo;<a href="{{ route('posts.index') }}">Back</a>
  </div>
  <h1>{{ $post }}</h1>
</x-study_components.layout>