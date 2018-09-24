@extends('admin.dashboard')

@section ('content')
<div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Google Doc</h3>
  </div>
  <div class="panel-body">
    <form method="POST" action="/topical-quiz/create">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Doc Title</label>
        <input type="text" name="title" class="form-control" placeholder="Document Title" value="{{old('title')}}">
      </div>
      <div class="form-group">
        <label>Doc Subject</label>
        <input type="text" name="subject" class="form-control" placeholder="Document Subject" value="{{old('subject')}}">
      </div>
      <div class="form-group">
        <label>Doc Class</label>
        <input type="text" name="class" class="form-control" placeholder="Document Class" value="{{old('class')}}">
      </div>
      <div class="form-group">
        <label class="control-label">Document</label>
        <textarea id="message" name="content" rows="13" placeholder="{{Auth::user()->name}}, your content goes here, at the bottom right of this canvas, expand"></textarea>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="published" checked> Published
        </label>
      </div>
      <input type="submit" class="btn btn-default" value="Submit">
    </form>
  </div>
</div>
@endsection
