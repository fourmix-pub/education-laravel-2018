@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $recipe->title }}</h3>
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

                <div class="card-footer">登録日時：{{ $recipe->created_at }}　{{ $recipe->status() }}</div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    @foreach ($comments as $comment)
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5>ユーザネーム：{{ $comment->name }}</h5>
          </div>

          <div class="card-header">コメント</div>
          <div class="card-body">
            {{ $comment->content }}
          </div>

          <div class="card-footer">コメント日時：{{ $comment->created_at }}</div>
        </div>
      </div>
    </div>
    @endforeach
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('recipes.edit', compact('recipe')) }}" class="btn btn-outline-warning btn-lg btn-block">
                編集
            </a>

            </a>
            <a href="{{ route('recipes.index') }}" class="btn btn-outline-secondary btn-lg btn-block">
                戻る
            </a>
            <br>
            <form action="{{ route('recipes.delete', compact('recipe')) }}" method="POST">
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
