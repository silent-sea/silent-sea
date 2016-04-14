@extends('layouts.app')

@section('content')

    @include('layouts.admin-nav')

    <div class="container">
        <div class="row">
            {!! Form::open(array('action' => 'NewsController@create')) !!}
                <label name="title">Title:</label>
                <input type="input" id="title" name="title">

                <label name="shortdesc">Short Description:</label>
                <input type="input" id="shortdsc" name="shortdesc">

                <label name="fullcontent">Content:</label>
                <input type="textbox" id="fullcontent" name="fullcontent">

                {{ Form::submit('Post', ['class' => 'small hollow success button']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
