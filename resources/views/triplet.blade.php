@extends('layouts.app')

@section('content')

    @include('layouts.admin-nav')

    <div class="container">
        <div class="row">
            {!! Form::open(array('action' => 'TripletController@create')) !!}
            <label name="title">Title:</label>
            <input type="input" id="title" name="title">

            <label name="icon">Icon: (If none, default is 'lightbulb-o')</label>
            <input type="icon" id="icon" name="icon">

            <label name="cont">Content:</label>
            <textarea id="cont" name="cont"></textarea>

            {{ Form::submit('Create', ['class' => 'small hollow success button']) }}
            {!! Form::close() !!}
        </div>

        <div class="row">
            <p>Icons: Icons can be selected by using it's name from - <a href="https://fortawesome.github.io/Font-Awesome/icons/">Font Awesome</a></p>
        </div>
        <div class="row">
            @foreach($triplets as $triplet)
                {!! Form::open(array('action' => 'TripletController@update')) !!}
                <label name="title">Title:</label>
                <input type="hidden" id="id" name="id" value="{{ $triplet->id }}">
                <input type="input" id="title" name="title" value="{{ $triplet->title }}">

                <label name="title">Icon:</label>
                <input type="input" id="icon" name="icon" value="{{ $triplet->icon }}">

                <label name="cont">Content:</label>
                <textarea id="cont" name="cont">{{ $triplet->content }}</textarea>

                {{ Form::submit('Update', ['class' => 'small hollow success button']) }}
                {!! Form::close() !!}
            @endforeach
        </div>
    </div>
@endsection
