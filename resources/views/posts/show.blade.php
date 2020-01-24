@extends('layout/base')

@section('content')
  <a href="/posts" class="btn btn-info">Back</a>
  <h1>{{ $post->title }}</h1>
  <img src="/storage/cover_image/{{$post->cover_image}}" alt="" style="width: 100%">
<small>Written on {{ $post->created_at }} by {{$post->user->name}}</small>
  <div>
    {!! $post->body !!}
  </div>
  <hr>
  @if (!Auth::guest())
    @if (Auth::user()->id == $post->user_id)
      <div class="row">
        <div class="col">
          <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
        </div>
        <div class="col">
          {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger float-right']) }}
          {!! Form::close() !!}
        </div>
      </div>
    @endif
  @endif
  
@endsection