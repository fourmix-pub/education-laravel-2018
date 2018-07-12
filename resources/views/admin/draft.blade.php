@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
            <h1>下書き</h1>

              <div class="card">
                  <div class="card-body">
                     @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                          <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                  <h3>
                                      <a href="draft_show.html">
                                        タイトル
                                  </h3>
                                  <hr>
                              </div>
                          </div>
                  </div>
              </div>

          <div class="row">
              <div class="col-md-12">
                  </a>
                  <a href="{{ route('admin.index') }}" class="btn btn-primary btn-lg btn-block">
                      戻る
                  </a>
                </a>
              </div>
          </div>
        </div>
    </div>
</div>


@endsection
