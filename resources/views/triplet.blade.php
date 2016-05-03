@extends('layouts.app')

@section('content')

    @include('layouts.admin-nav')

    <div class="container">
        <div class="row">
            <div class="medium-12 columns">
                <div class="callout">
                    <p><strong>Dont create another if there are already 3, layout un-tested</strong></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="medium-12 columns">
                <div class="callout news-create">
                    {!! Form::open(array('action' => 'TripletController@create')) !!}
                    <label name="title">Title:</label>
                    <input type="text" id="title" name="title">

                    <label name="icon">Icon: (If none, default is 'lightbulb-o')</label>
                    <input type="text" id="icon" name="icon">

                    <label name="cont">Content:</label>
                    <textarea id="cont" name="cont"></textarea>

                    {{ Form::submit('Create', ['class' => 'small hollow success button']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="medium-12 columns">
                <div class="callout">
                    <p>Icons: Icons can be selected by using it's name from - <a href="https://fortawesome.github.io/Font-Awesome/icons/">Font Awesome</a></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="medium-12 columns">
                <div class="callout over-h">
                    @foreach($triplets as $triplet)
                        <div class="medium-4 columns">
                            {!! Form::open(array('action' => 'TripletController@update')) !!}
                            <label name="title">Title:</label>
                            <input type="hidden" id="id" name="id" value="{{ $triplet->id }}">
                            <input type="text" id="title" name="title" value="{{ $triplet->title }}">

                            <label name="title">Icon:</label>
                            <input type="text" id="icon" name="icon" value="{{ $triplet->icon }}">

                            <label name="cont">Content:</label>
                            <textarea id="cont" name="cont">{{ $triplet->content }}</textarea>

                            {{ Form::submit('Update', ['class' => 'small hollow success button']) }}
                            {!! Form::close() !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
