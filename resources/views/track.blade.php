@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        トラック予約フォーム
    </div>
    <form class="card-body" action="{{ route('track') }}" method="POST">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        <select class="form-select" name="track_type" aria-label="Default select example">
            <option selected>トラックの種類を選択</option>
            <option value="1">3tトラック</option>
            <option value="2">4tトラック（ユニック付）</option>
            <option value="3">5tトラック</option>
        </select>
        <div class="form-group">
            <label for="date" class="col-form-label">開始日時を入力</label>
            <input type="datetime-local" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="date" class="col-form-label">終了日時を入力</label>
            <input type="datetime-local" class="form-control" id="date" name="date">
        </div>
        <button type="submit" class="btn btn-primary">予約</button>
    </form>
</div>
<!-- コメントアウト -->
@endsection
