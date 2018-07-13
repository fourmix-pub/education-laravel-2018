@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">

                <div class="card">
                    <div class="card-header">下書き</div>
                    <div class="card-body">
                       @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach ($movies as $movie)
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h3>
                                        <a href="{{ route('admin.draft_show', compact('movie')) }}">
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

<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            </a>
            <a href="{{ route('admin.index') }}" class="btn btn-primary">
                戻る
            </a>
          </a>
        </div>
    </div>
</div>


@endsection