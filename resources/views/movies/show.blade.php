@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h3>{{ $movie->title }}
                        <span class="margin">{{ $movie->movie_name }}</span>
                      </h3>
                  </div>

                  <div class="card-body">
                    {{ $movie->contents }}
                  </div>

                  <div class="card-footer">
                    <span class="left">{{ $movie->created_at }}</span>
                  </div>
              </div>
          </div>
      </div>
    </div>
      <br>

      <div class="container">
        @foreach ($movie->comments as $comment)
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          <div class="text">{{ $comment->contents }}</div>
                          <div class="name">{{ $comment->user->name }}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-12">

              <form class="back_white" action="{{ route('comment.store', compact('movie')) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">コメント</label>
                    <input type="text"  name="contents" class="form-control" value="{{ old('contents') }}" id="exampleInputEmail1">
                </div>
                <button type="submit" class="btn btn-primary">投稿</button>
            </form>
            </div>
        </div>
    </div>

    <div class="container text-center">
      <div class="row justify-content-center">
          <div class="col-md-12">

              <a href="{{ route('movies.view') }}" class="btn btn-primary">
                  戻る
              </a>
          </div>
      </div>
    </div>
@endsection
