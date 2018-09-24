@extends('admin.dashboard')

@section ('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">WriteUp</h3>
  </div>
  <div class="panel-body">
    <form method="POST" action="/newblog">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Quiz Title</label>
        <input type="text" name="title" class="form-control" placeholder="Page Title" value="Title">
      </div>
      <div class="form-group">
        <label class="control-label">Question</label>
        <textarea id="message" rows="13" placeholder="{{Auth::user()->name}}, your content goes here, at the bottom right of this canvas, expand" name="content"></textarea>
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
