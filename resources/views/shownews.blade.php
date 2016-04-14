@extends('layouts.app')

@section('content')

    @include('layouts.admin-nav')

    <div class="container">
        <div class="row">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->content }}</p>
        </div>
    </div>
@endsection
