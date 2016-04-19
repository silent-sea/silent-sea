@extends('layouts.app')

@section('content')

    @include('layouts.nav')

    @include('layouts.welcomehero')

    <div class="row section">
        <div class="small-6 columns">
            <h2 class="section__title">SOME TITLE</h2>
            <p class="section__intro">
                Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor.
            </p>
        </div>

        <div class="small-6 columns">
            <h2 class="section__title">{{ $latestnews->title }}</h2>
            <p class="section__intro">
                {{ $latestnews->shortdesc }}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="box__grid">
            @foreach($triplets as $triplet)
                <article class="box"><a href="#" class="box__content"><i class="bulb fa fa-{{ $triplet->icon }} fa-3x"></i>
                        <h3 class="box__title">{{ $triplet->title }}</h3>
                        <p>{{ $triplet->content }}</p><span class="box__more">Read more</span></a>
                </article>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')

@endsection

