@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $recipe->title }}</h3>
                    <h5>{{ $recipe->user->name }}</h5>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                        <div class="card-header">
                          <h5>材料</h5>
                        </div>

                    <div class="card-body">
                    {{ $recipe->material }}

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="card-header">
                          <h5>作り方</h5>
                        </div>
                    {{ $recipe->content }}
                </div>

                <div class="card-footer">公開日時：{{ $recipe->created_at }}</div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            </a>

            <a href="{{ route('comments.create', compact('recipe')) }}" class="btn btn-outline-warning btn-lg btn-block">
              コメント
            </a>
            <br>
            <br>
            
            <br>
            <a href="{{ route('all_home') }}" class="btn btn-outline-secondary btn-lg btn-block">
                戻る
            </a>

        </div>
    </div>
</div>
@endsection
