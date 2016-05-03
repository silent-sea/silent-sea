@extends('layouts.app')

@section('content')

    @include('layouts.admin-nav')

    <div class="container">
        <div class="row">
            <div class="medium-12 columns">
                <div class="callout">
                    <h5>Hero Images</h5>
                    <p>These images are the large first point of view images on the homepage. To look perfect, they need to be 1200 x 400px</p>

                    @if(Session::has('success'))
                        <div class="alert-box success">
                            <h2>{{ Session::get('success') }}</h2>
                        </div>
                    @endif

                    {!! Form::open(array('action' => 'AdminController@createOwl', 'files' => true)) !!}
                    <div class="row">
                        <div class="medium-9 columns">
                            {{ Form::label('name', 'Hero Name:') }}
                            <input type="text" name="name" placeholder="Name of your Hero">
                        </div>

                        <div class="medium-3 columns">
                            <label for="heroUpload" class="hollow button btnmrg">Select File</label>
                            <input type="file" name="image" id="heroUpload" class="show-for-sr">
                            {{ Form::submit('Upload Hero', ['class' => 'hollow success button btnmrg']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="medium-12 columns">
                <table width="100%">
                    <thead>
                    <tr>
                        <th>PREVIEW</th>
                        <th>ID</th>
                        <td>NAME</td>
                        <th>URL</th>
                        <th>ACTIVE</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($owl as $owls)
                            <tr>
                                <td><img src="upload/hero/{{ $owls->url }}" width="250"></td>
                                <td>{{ $owls->id }}</td>
                                <td>{{ $owls->name }}</td>
                                <td>/upload/hero/{{ $owls->url }}</td>
                                <td>{{ $owls->active }}</td>
                                <td>
                                    <span class="left mrg-right">
                                    {!! Form::open(array('action' => 'AdminController@activeOwl')) !!}
                                        <input type="hidden" id="owlsid" name="owlsid" value="{!! $owls->id !!}">
                                        {{ Form::submit('Toggle', ['class' => 'small hollow success button']) }}
                                    {!! Form::close() !!}
                                    </span>
                                    <span class="left">
                                    {!! Form::open(array('action' => 'AdminController@deleteOwl')) !!}
                                        <input type="hidden" id="owlsid" name="owlsid" value="{!! $owls->id !!}">
                                        {{ Form::submit('Delete', ['class' => 'small hollow alert button']) }}
                                    {!! Form::close() !!}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
