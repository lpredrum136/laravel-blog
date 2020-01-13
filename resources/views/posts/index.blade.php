@extends('layout/base') 

@section('content')
  <h1>Posts</h1>
  @if (count($posts) > 0)  
    @foreach ($posts as $post)
      <hr>
      <h3>
        <a href="/posts/{{ $post->id }}">
          {{ $post->title }}
        </a>
      </h3>
      <div class="row">
          <div class="col-md-3">Image here</div>
          <div class="col-md-9">
              {!! $post->body !!}
              <br />

              <small class="post-date">
                Posted on {{ $post->created_at }} in
                <span class="badge badge-secondary">
                    Category?
                </span>
            </small>
          </div>
      </div>
    @endforeach 
    {{ $posts->links() }}
  @else
    <p>No Posts found</p>
  @endif
@endsection
