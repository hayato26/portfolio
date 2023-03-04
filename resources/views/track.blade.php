@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">トラック予約フォーム</div>
    <form class="card-body" action="{{ route('track') }}" method="POST">
      @csrf
        <input type="text" class="form-control" placeholder="予約者氏名" aria-label="Username" name="name" aria-describedby="basic-addon1">
          <select class="form-select" name="track_type" aria-label="Default select example">
            <option selected>トラック種別を選択</option>
            <option value="1">3tトラック</option>
            <option value="2">4tトラック</option>
            <option value="3">5tトラック</option>
          </select>
          <div class="form-group">
            <label for="date" class="col-form-label">使用開始日時</label>
            <input type="datetime-local" class="form-control" name="start">
          </div>
          <div class="form-group">
            <label for="date" class="col-form-label">使用終了日時</label>
            <input type="datetime-local" class="form-control" name="finish">
          </div>
      <button type="submit" class="btn btn-primary">予約する</button>
    </form>
</div>
@endsection
