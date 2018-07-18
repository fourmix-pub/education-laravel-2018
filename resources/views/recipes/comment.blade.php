@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
        コメント投稿
        </div>
        <form action="{{ route('comments.store', compact('recipe')) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">ユーザネーム</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">コメント</label>
                <textarea class="form-control" name="content">{{ old('content') }}</textarea>
            </div>

            <button type="submit" class="btn btn-outline-warning">送信</button>
        </form>
          </div>
        </div>
      </div>
    </div>
    <br>

    <div class="row justify-content-center">
      <div class="col-md-12">
        <a href="{{ route('all_home') }}" class="btn btn-outline-secondary btn-lg btn-block">
          戻る
        </a>
      </div>
    </div>
  </div>
  @endsection
