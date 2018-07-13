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
                        <h5 class="card-header">コメント</h5>
                        @foreach($note->comments as $comment)
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card text-left">
                                <div class="card-header">
                                {{ $comment->user_nm }}
                                </div>
                                <div class="card-body">
                                  <p class="card-text">
                                  {{ $comment->content}}
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach

                    <div class="container">
                    <div class="row justify-content-Left">
                        <div class="col-md-8">
                          <div class="card">
                          <hr>
                          <h5 class="card-header">コメントする</h5>
                          <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (count($errors) > 0)
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-ban"></i> エラー!</h4>
                                            @foreach ($errors->all() as $error)
                                                <span class="glyphicon glyphicon-exclamation-sign"></span> {{ $error }}<br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <form action="{{ route('comment', compact('note')) }}" method="POST">
                              {{ csrf_field() }}
                                <div class="form-group">
                                  <label for="exampleInputEmail1">お名前</label>
                                  <input type="text" class="form-control" name="user_nm">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">コメント</label>
                                  <textarea name="content" class="form-control"></textarea>
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
        </div>
    </div>
</div>
@endsection
