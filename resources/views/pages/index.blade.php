@extends('layout/base')

@section('landing-jumbotron')
  <div class="jumbotron text-center" style="height: 100vh; margin-bottom: 0">
    <h1>{{$title}}</h1>
    <p>This is the Laravel application from the 'Laravel from Scratch' Youtube series</p>
    <a href="/login" class="btn btn-info">Login</a>
    <a href="/register" class="btn btn-primary">Register</a>
  </div>
@endsection