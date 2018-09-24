@extends('layouts.imondmain')

@section('content')
<div class="row">


      <div class="sub-title">
        <h2>Modern Edusystem</h2>
          <a href="/"><i class="icon-envelope"></i></a>
       </div>


      <div class="col-md-12 content-page">
        @if($topicals->count()==0)
          <div class="post-info">
            <h1>No Topicals</h1>
          </div>
        @endif

          <!-- Blog Post Start -->
          @foreach($topicals as $topical)
          <div class="col-md-12 blog-post">
              <div class="post-title">
                <a href="/topical-quiz/{{ $topical->id }}"><h1>{{ $topical->title }}</h1></a>
              </div>
              <div class="post-info">
                <span>{{$topical->created_at->diffForHumans()}}/ by <a href="#" target="_blank">{{ $topical->author }}</a></span>
              </div>
              <p>{!! str_limit($topical->content, $limit = 350, $end = "...") !!}</p>
              <a href="/topical-quiz/{{ $topical->id }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
          </div>
          @endforeach
          <!-- Blog Post End -->

          <div class="col-md-12 text-center">
           <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
           <div id="post-end-message"></div>
          </div>
       </div>
   </div>
@endsection
