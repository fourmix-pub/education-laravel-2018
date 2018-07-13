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

                    @foreach ($movies as $movie)
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>
                                    <a href="{{ route('movies.show', compact('movie')) }}">
                                        <span class="left">{{ $movie->title }}</span></a>
                                        <span class="margin">{{ $movie->user->name }}</span>
                                </h3>
                                <span class="left">{{ $movie->movie_name }}</span>
                                <span class="margin">{{ $movie->created_at }}</span>
                                <hr>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center">
        <div class="col-md-12">
            </a>
            <a href="{{ route('index') }}" class="btn btn-primary">
                戻る
            </a>
        </div>
    </div>
</div>
@endsection
