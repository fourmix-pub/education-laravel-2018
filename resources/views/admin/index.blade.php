@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
            <h1>マイページ</h1>
          </div>
      </div>
  </div>

  <div class="container">

      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">記事一覧</div>

                  <div class="card-body">

                      @foreach ($movies as $movie)
                          <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                  <h3>
                                      <a href="{{ route('admin.show', compact('movie')) }}">
                                        {{ $movie->title }}
                                      </a>
                                  </h3>
                                  <hr>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
    </div>

      <div class="container text-center" style="text-align: center;">
            <a href="{{ route('admin.draft') }}" class="btn btn-primary2">
                下書き
            </a>
            <a href="{{ route('admin.create') }}" class="btn btn-primary2">
                新規作成
            </a>
            <a href="{{ route('index') }}" class="btn btn-primary">
                トップに戻る
            </a>
      </div>

@endsection
