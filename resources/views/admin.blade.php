@extends('layouts.app')

@section('content')

    @include('layouts.admin-nav')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Hero's</div>

                    <div class="panel-body">
                        @if(Session::has('success'))
                            <div class="alert-box success">
                                <h2>{{ Session::get('success') }}</h2>
                            </div>
                        @endif

                        {!! Form::open(array('url' => 'admin/create/owl')) !!}
                            {{ Form::label('heroname', 'Hero Name', null, ['class' => 'btn btn-large btn-primary']) }}
                            {{ Form::input('heroname', 'heroname', null, ['class' => 'btn btn-large btn-primary']) }}
                            {{ Form::file('image', ['class' => 'btn btn-large btn-primary']) }}
                            {{ Form::submit('Submit', ['class' => 'btn btn-large btn-primary']) }}
                        {!! Form::close() !!}

                        @if(Session::has('error'))
                            <p class="errors">{!! Session::get('error') !!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
