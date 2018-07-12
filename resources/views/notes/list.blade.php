@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ノート一覧</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($notes as $note)
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>
                                    <a href="{{ route('notes.show', compact('note')) }}">
                                        {{ $note->title }}
                                    </a>
                                </h3>
                                <hr>
                                <p>{{ $note->created_at }}　{{ $note->status() }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            </a>
            <a href="{{ route('home') }}" class="btn btn-outline-primary btn-lg btn-block">
                戻る
            </a>
        </div>
    </div>
</div>
@endsection
