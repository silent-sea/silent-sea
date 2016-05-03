@extends('layouts.app')

@section('content')

    @include('layouts.admin-nav')

    <div class="container">
        <div class="row">
            <div class="medium-12 columns">
                <div class="callout news-create">
                    {!! Form::open(array('action' => 'NewsController@create')) !!}
                    <div class="row">
                        <div class="medium-4 columns">
                            <label name="title">Title:</label>
                            <input width="100%" type="text" id="title" name="title" placeholder="Enter title">
                        </div>
                        <div class="medium-8 columns">
                            <label name="shortdesc">Short Description:</label>
                            <input width="100%" type="text" id="shortdsc" name="shortdesc" placeholder="Enter short description">
                        </div>
                    </div>

                    <div class="row">
                        <div class="medium-12 columns">
                            <label name="fullcontent">Content:</label>
                            <textarea id="fullcontent" name="fullcontent" placeholder="Add news content"></textarea>
                        </div>
                        <div class="medium-12 columns">
                        {{ Form::submit('Post', ['class' => 'small hollow success button']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        @foreach($news as $new)
            <div class="row">
                <div class="medium-12 columns">
                    <div class="callout news-item">
                        <h5>{{ strtoupper($new->title) }}</h5>
                        <span class="news-shortdesc">{{ $new->shortdesc }}</span>
                        <div class="right">
                            Delete
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
