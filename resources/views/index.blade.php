@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <a href="mypage.html" style="color:#ddd; font-size:20px;">マイページ</a>
      </div>
    </div>
      <div class="jumbotron text-center">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12">
                  <form action="{{ route('movies.view') }}" method="POST" class="form-inline" style="margin-top:150px;">
                    {{ csrf_field() }}
                    <div class="form-group mx-sm-3 mb-2">
                      <input type="password" class="form-control" id="inputPassword2" placeholder="映画名">
                    </div>
                    <input type="submit" class="btn btn-primary mb-2" value="検索">
                  </form>
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
                <a href="#">タイトル　映画名</a>
              </div>
            </div>
            <br>

                <br>
                <div class="text-center">
                <a href="index.html" class="btn btn-primary2 btn-lg btn-block">
                    もっとみる
                </a>
                </div>

                <br>
        </div>

@endsection
