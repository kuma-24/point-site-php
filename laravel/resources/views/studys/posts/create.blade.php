<x-study_components.layout>
  <x-slot name="title">
    Add New Post - MY BBS
  </x-slot>

  <div class="back-link">
    &laquo;<a href="{{ route('posts.index') }}">Back</a>
  </div>

  <h1>Add New Post</h1>

  <form method="post" action="{{ route('posts.store') }}">
    @csrf

    <div class="form-group">
      <label>
        Title
        <input type="text" name="title" value="{{ old('title') }}">
      </label>
      @error('title')
        <div class="error">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label>
        Body
        <textarea name="body">{{ old('body') }}</textarea>
        @error('body')
          <div class="error">{{ $message }}</div>
        @enderror
      </label>
    </div>

    <div class="form-button">
      <button>add</button>
    </div>
  </form>
</x-study_components.layout>