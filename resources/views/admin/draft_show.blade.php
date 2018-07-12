@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>タイトル　作者</h3>
                    </div>

                    <div class="card-body">
                      テキスト  テキスト  テキスト  テキスト  テキスト  テキスト  テキスト  テキスト

                       @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ $article->contents }}
                    </div>

                    <div class="card-footer">登録日時：</div>
                </div>
            </div>
        </div>
        <br>
      <div class="row justify-content-center">
            <div class="col-md-12" style="text-align: center;">

                <a href="mypage.html" class="btn btn-primary btn-lg btn-block">
                    戻る
                </a>
                <a href="create.html" class="btn btn-primary3 btn-lg btn-block">
                    編集
                </a>
                <br>
                <form action="{{ route('articles.delete', compact('article')) }}" method="POST">
                    <button type="submit" class="btn btn-danger btn-lg btn-block">
                        削除
                    </button>
                </form>
            </div>
        </div>
    </div>



@endsection
