@extends('layout/base') 

@section('content')
<body>
    <h1>{{ $title }}</h1>
    <p>This is the Services we provide</p>
    @if (count($services) > 0)
      <ul class="list-group">
          @foreach ($services as $service)
          <li class="list-group-item">{{ $service }}</li>
          @endforeach
      </ul>
    @endif
</body>
@endsection
