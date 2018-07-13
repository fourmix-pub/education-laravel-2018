@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">みんなのノート</div>

                <div class="card-body">
                    @foreach ($notes as $note)
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>
                                    <a href="{{ route('notes.show', compact('note')) }}">
                                        {{ $note->title }}
                                    </a>
                                </h3>
                                <hr>
                                <p>{{ $note->created_at }}　作者：{{ $note->user->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div div style="display:table;margin: 0 auto">
                  {{ $notes->links() }}
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
