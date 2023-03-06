@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    @foreach($tracks as $track)
    <p class="card-text d-block">{{ $track['name'] }}{{ $track['start'] }}{{ $track['finish'] }}<a href="#" class="btn btn-primary">Go somewhere</a></p>
    @endforeach
  </div>
</div>
@endsection
