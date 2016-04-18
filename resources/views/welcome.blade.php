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
            <h2 class="section__title">SOME TITLE</h2>
            <p class="section__intro">
                Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="box__grid">
            <article class="box"><a href="#" class="box__content"><i class="fa fa-lightbulb-o fa-3x"></i>
                    <h3 class="box__title">Creative Ideas</h3>
                    <p>Duis neque leo cursus ac libero ac imperdiet bibendum nisl mauris neque diam vulputate nem.</p><span class="box__more">Read more</span></a></article>
            <article class="box"><a href="#" class="box__content"><i class="fa fa-lightbulb-o fa-3x"></i>
                    <h3 class="box__title">Creative Ideas</h3>
                    <p>Duis neque leo cursus ac libero ac imperdiet bibendum nisl mauris neque diam vulputate nem.</p><span class="box__more">Read more</span></a>
            </article>
            <article class="box"><a href="#" class="box__content"><i class="fa fa-lightbulb-o fa-3x"></i>
                    <h3 class="box__title">Creative Ideas</h3>
                    <p>Duis neque leo cursus ac libero ac imperdiet bibendum nisl mauris neque diam vulputate nem.</p><span class="box__more">Read more</span></a></article>
        </div>
    </div>

    @include('layouts.footer')

@endsection

