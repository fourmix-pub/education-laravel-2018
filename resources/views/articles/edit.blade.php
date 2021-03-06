@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    記事編集
                </div>

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
                        <form action="{{ route('articles.update', compact('article')) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">タイトル</label>
                                <input type="text" name="title" value="{{ $article->title }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">内容</label>
                                <textarea class="form-control" name="contents">{{ $article->contents }}</textarea>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" name="is_published" value="1"
                                       class="form-check-input" id="exampleCheck1" @if ($article->is_published) checked @endif>
                                <label class="form-check-label" for="exampleCheck1">公開</label>
                            </div>
                            <button type="submit" class="btn btn-primary">編集</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('articles.show', compact('article')) }}" class="btn btn-primary btn-lg btn-block">
                戻る
            </a>
        </div>
    </div>
</div>
@endsection
