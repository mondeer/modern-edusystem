@extends('admin.dashboard')

@section ('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Edit Page</h3>
  </div>
  <div class="panel-body">
    <form method="POST" action="/newblog">
      <div class="form-group">
        <label>Blog Title</label>
        <input type="text" name="title" class="form-control" placeholder="Page Title" value="Title">
      </div>
      <div class="form-group">
        <label>Blog Body</label>
        <textarea name="content" class="form-control" placeholder="Page Body"></textarea>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" checked> Published
        </label>
      </div>
      <input type="submit" class="btn btn-default" value="Submit">
    </form>
  </div>
</div>
@endsection
