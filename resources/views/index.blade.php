@extends('layouts.app')

@section('content')

      <div class="jumbotron text-center">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
              </div>
          </div>
        </div>
      </div>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                <h1>新着</h1>
              </div>
          </div>
      </div>

      <div class="container">
      @foreach ($movies as $movie)
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h3>
                      <a href="{{ route('movies.show', compact('movie')) }}">
                          <span style="color:#B18904">{{ $movie->title }}</span></a>
                          <span style="color:#DDDDDD; font-size:20px">{{ $movie->user->name }}</span>
                  </h3>
                  <span style="color:#DDDDDD; font-size:20px">{{ $movie->movie_name }}</span>
                  <span style="color:#101010">{{ $movie->created_at }}</span>
                  <hr>
              </div>
          </div>
      @endforeach
      </div>

                <br>
                <div class="text-center">
                <a href="{{ route('movies.view') }}" class="btn btn-primary2">
                    もっとみる
                </a>
                </div>

                <br>
        </div>

@endsection
