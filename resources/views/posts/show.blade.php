@extends('layout/base')

@section('content')
  <a href="/posts" class="btn btn-info">Back</a>
  <h1>{{ $post->title }}</h1>
  <small>Written on {{ $post->created_at }}</small>
  <div>
    {!! $post->body !!}
  </div>
  <hr>
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
@endsection