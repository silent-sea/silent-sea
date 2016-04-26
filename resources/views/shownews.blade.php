@extends('layouts.app')

@section('content')

    @include('layouts.nav')

    <div class="container">
        <div class="row">
            <div class="medium-12 columns">
                <h1>{{ $article->title }}</h1>
            </div>

            <div class="medium-12 columns">
                <h3>{{ $article->shortdesc }}</h3>
            </div>

            <div class="medium-12 columns">
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
