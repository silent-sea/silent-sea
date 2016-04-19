@extends('layouts.app')

@section('content')

    @include('layouts.nav')

    <div class="container">
        <div class="row">
            <h1>{{ $article->title }}</h1>
            <h3>{{ $article->shortdesc }}</h3>
            <p>{{ $article->content }}</p>
            {{  nl2br(htmlentities($article->content, ENT_QUOTES, 'UTF-8')) }}
        </div>
    </div>
@endsection
