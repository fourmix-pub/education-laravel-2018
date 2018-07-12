@extends('layouts.app')
@section('content')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
              @guest
                <h1 class="display-2">「話のタネ」を育てよう。</h1>

                <h2>
                    「創作ノート」は、思いついたストーリーの「5W1H」を記録することで<br>
                    「話のタネ」が「物語」になるのを応援するサイトです。
                  </h2>
                <br>
                <br>
            </div>
        </div>

        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-block ">ログイン</a>
        <br>
        <a href="{{ route('register') }}" class="btn btn-outline-info btn-block">新規登録</a>
        <img src="img/me.png" class="rounded float-right" alt="growup">
          @else
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
                              <a href="{{ route('articles.create') }}" class="btn btn-outline-primary btn-lg btn-block">
                                新規作成
                            </a><br>
                              <a href="{{ route('articles.list') }}" class="btn btn-outline-success btn-lg btn-block">
                                ノート一覧
                            </a><br>
                        </div>
                    </div>
                      <img src="img/books.png"  class="rounded float-right" alt="本">
                </div>
            </div>
        </div>
        @endguest
@endsection
