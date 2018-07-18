@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">MY ページ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($recipes as $recipe)
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>
                                    <a href="{{ route('recipes.show', compact('recipe')) }}">
                                        {{ $recipe->title }}
                                    </a>
                                </h3>
                                <hr>
                                <p>{{ $recipe->created_at }} {{ $recipe->status() }}</p>
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
        </div>
    </div>
</div>
@endsection
