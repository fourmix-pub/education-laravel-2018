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
        <div class="card">
            <div class="card-header">みんなのノート</div>

            <div class="card-body">
                @foreach ($notes as $note)
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>
                                <a href="{{ route('notes.show', compact('note')) }}">
                                    {{ $note->title }}
                                </a>
                            </h3>
                            <hr>
                            <p>{{ $note->created_at }}　作者：{{ $note->user->name }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
            <div div style="display:table;margin: 0 auto">
            {{ $notes->links() }}
          </div>
        </div>
        <img src="{{ asset('img/me.png') }}" class="rounded float-right" alt="growup">
    </div>

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
                              <a href="{{ route('notes.create') }}" class="btn btn-outline-primary btn-lg btn-block">
                                新規作成
                            </a><br>
                            <a href="{{ route('notes.all') }}" class="btn btn-outline-info btn-lg btn-block">
                              みんなのノート
                            </a><br>
                              <a href="{{ route('notes.list') }}" class="btn btn-outline-success btn-lg btn-block">
                                マイノート
                            </a><br>

                        </div>
                    </div>
                      <img src="{{ asset('img/books.png') }}"  class="rounded float-right" alt="本">
                </div>
            </div>
        </div>
        @endguest
@endsection
