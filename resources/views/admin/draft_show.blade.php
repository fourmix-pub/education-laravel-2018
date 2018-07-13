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
       <div class="row text-center">
           <div class="col-md-12">
               <a href="{{ route('admin.index') }}" class="btn btn-primary">
                   戻る
               </a>
               <a href="{{ route('admin.edit', compact('movie')) }}" class="btn btn-primary">
                   編集
               </a>
               <br>
               <form action="{{ route('admin.delete', compact('movie')) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">
                        削除
                    </button>
                </form>

           </div>
       </div>
   </div>



@endsection
