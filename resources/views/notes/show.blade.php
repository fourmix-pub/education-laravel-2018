@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Title:{{ $note->title }}　作者：{{ $note->user->name }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    いつ：{{ $note->when }}<br>
                    どこで：{{ $note->where }}<br>
                    誰が：{{ $note->who }}<br>
                    何をした：{{ $note->what }}<br>
                    なぜ：{{ $note->why }}<br>
                    どのように：{{ $note->how }}<br>
                </div>

                <div class="card-footer">登録日時：{{ $note->created_at }}</div>
                <hr>

                <div class="container">
                    <div class="row justify-content-Left">
                        <div class="col-md-8">
                        <div class="card">
                          <hr>
                          <h5 class="card-header">コメント</h5>
                          <div class="card-body">
                            <form>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">お名前</label>
                                  <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">コメント</label>
                                  <textarea name="comment" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">送信</button>
                              </form>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            </a>
            <a href="{{ route('notes.list') }}" class="btn btn-outline-info btn-lg btn-block">
                戻る
            </a>
            <br>
            <form action="{{ route('notes.delete', compact('note')) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-outline-danger btn-lg btn-block">
                    削除
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
