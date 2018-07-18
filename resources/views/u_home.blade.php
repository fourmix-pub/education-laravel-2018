@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MY　ページ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('recipes.create') }}" class="btn btn-outline-warning btn-lg btn-block">
                        レシピ作成
                    </a>
                    <a href="{{ route('recipes.index') }}" class="btn btn-outline-success btn-lg btn-block">
                        レシピ一覧
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
