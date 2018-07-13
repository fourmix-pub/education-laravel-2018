@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">メニュー</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('articles.create') }}" class="btn btn-primary">
                        記事作成
                    </a>
                    <a href="{{ route('articles.index') }}" class="btn btn-warning">
                        記事一覧
                    </a>
                    <a href="#" class="btn btn-info">
                        下書き
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
