@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Title:{{ $note->title }}　作者：{{ $note->user->name }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    いつ：{{ $note->when }}<br>
                    どこで：{{ $note->where }}<br>
                    誰が：{{ $note->who }}<br>
                    何をした：{{ $note->what }}<br>
                    なぜ：{{ $note->why }}<br>
                    どのように：{{ $note->how }}<br>
                </div>

                <div class="card-footer">登録日時：{{ $note->created_at }}　{{ $note->status() }}</div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('notes.edit', compact('note')) }}" class="btn btn-outline-secondary btn-lg btn-block">
                編集
            </a>

            </a>
            <a href="{{ route('notes.list') }}" class="btn btn-outline-info btn-lg btn-block">
                戻る
            </a>
            <br>
            <form action="{{ route('notes.delete', compact('note')) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-outline-danger btn-lg btn-block">
                    削除
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
