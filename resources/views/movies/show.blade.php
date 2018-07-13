@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h3>{{ $movie->title }}</h3>
                  </div>

                  <div class="card-body">
                    {{ $movie->contents }}

                     @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                  </div>

                  <div class="card-footer">
                    <span class="left"></span>
                    <span class="rignt">{{ $movie->title }}</span>
                  </div>
              </div>
          </div>
      </div>
    </div>
      <br>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-12">

              <form　action="{{ route('comment.store', compact('movie')) }}" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">コメント</label>
                    <input type="text"  name="contents" class="form-control" id="exampleInputEmail1">
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
