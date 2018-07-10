@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Title:{{ $article->title }}　作者：{{ $article->user->name }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ $article->contents }}
                </div>

                <div class="card-footer">登録日時：{{ $article->created_at }}　{{ $article->status() }}</div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('articles.edit', compact('article')) }}" class="btn btn-warning btn-lg btn-block">
                編集
            </a>

            </a>
            <a href="{{ route('articles.index') }}" class="btn btn-primary btn-lg btn-block">
                戻る
            </a>
            <br>
            <form action="{{ route('articles.delete', compact('article')) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger btn-lg btn-block">
                    削除
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
