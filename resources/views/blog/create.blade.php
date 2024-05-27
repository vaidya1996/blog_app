<x-layout>
  <div>
    <div class="container">
      <h2>Create Blog</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" name="title" id="title" placeholder="Enter title...">
        </div>
        <div class="form-group">
          <label for="desc">Description:</label>
          <textarea name="desc" id="desc" placeholder="Enter description..."></textarea>
        </div>
        <button type="submit" class="form-btn">Create Blog</button>
      </form>
      <br>
      <a href="#" class="active-link view-link">Back</a>
    </div>
  </div>
</x-layout>