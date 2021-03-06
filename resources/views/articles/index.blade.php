@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">記事一覧</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($articles as $article)
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>
                                    <a href="{{ route('articles.show', compact('article')) }}">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                                <hr>
                                <p>{{ $article->created_at }}　{{ $article->status() }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            </a>
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg btn-block">
                戻る
            </a>
        </div>
    </div>
</div>
@endsection
