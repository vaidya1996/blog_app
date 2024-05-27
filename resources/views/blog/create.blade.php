<x-layout>
  <div>
    <div class="container">
      <!-- Handling errors -->
      <!-- @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif -->

      <h2>Create Blog</h2>
      <form action="{{route('blog.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Enter title...">
          @error("title")
      <span>{{ $message }}</span>
    @enderror
        </div>
        <div class="form-group">
          <label for="desc">Description:</label>
          <textarea name="desc" id="desc" placeholder="Enter description...">{{ old('desc') }}</textarea>
          @error("desc")
      <span>{{ $message }}</span>
    @enderror
        </div>
        <button type="submit" class="form-btn">Create Blog</button>
      </form>
      <br>
      <a href="{{route('blog.index')}}" class="active-link view-link">Back</a>
    </div>
  </div>
</x-layout>