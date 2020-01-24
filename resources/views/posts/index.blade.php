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
          <div class="col-md-4 col-sm-4">
            <img src="/storage/cover_image/{{$post->cover_image}}" alt="" style="width: 100%">
          </div>
          <div class="col-md-8 col-sm-8">
              {!! $post->body !!}
              <br />

              <small class="post-date">
                Posted on {{ $post->created_at }} in
                <span class="badge badge-secondary">
                    Category?
                </span>
                by {{ $post->user->name }}
            </small>
          </div>
      </div>
    @endforeach 
    {{ $posts->links() }}
  @else
    <p>No Posts found</p>
  @endif
@endsection
