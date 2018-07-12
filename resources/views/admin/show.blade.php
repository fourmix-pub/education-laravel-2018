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

              <div class="card-footer">登録日時：</div>
          </div>
      </div>
  </div>
       <br>
       <div class="row justify-content-center">
           <div class="col-md-12">

               <a href="index.html" class="btn btn-primary btn-lg btn-block">
                   戻る
               </a>
               <br>
               <form action="{{ route('articles.delete', compact('article')) }}" method="POST">
           </div>
       </div>
   </div>



@endsection