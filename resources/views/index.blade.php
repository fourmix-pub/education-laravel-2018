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
          <div class="row justify-content-center">
              <div class="col-md-12 article">
                <a href="#">タイトル</a>
              </div>
            </div>
            <br>

                <br>
                <div class="text-center">
                <a href="{{ route('movies.view') }}" class="btn btn-primary2">
                    もっとみる
                </a>
                </div>

                <br>
        </div>

@endsection
