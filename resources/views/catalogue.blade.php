@extends('layouts.app')

@section('content')

    @include('layouts.admin-nav')
<div class="container">

    <div class="row">
        <div class="medium-12 colums">
            <div class="panel callout panel-blue radius">
                Create a new Group:
            </div>
        </div>
    </div>

    {!! Form::open(array('action' => 'ItemGroupController@create', 'files' => true)) !!}
    <div class="row">
        <div class="medium-2 columns">
            <label for="name">Group Name:</label>
            <input type="text" id="name" name="name">
        </div>

        <div class="medium-2 columns">
            <label for="shortdesc">Short Description:</label>
            <input type="text" id="shortdesc" name="shortdesc">
        </div>

        <div class="medium-2 columns">
            <label for="desc">Full Description:</label>
            <input type="text" id="desc" name="desc">
        </div>

        <div class="medium-4 columns">
            <label for="groupUpload" class="hollow button btnmrg">Select File</label>
            <input type="file" name="image" id="groupUpload" class="show-for-sr">

            <input type="submit" value="Create Group" class="hollow button btnmrg success">
        </div>
    </div>
    {!! Form::close() !!}

    @foreach($groups as $group)
        <div class="row">
            <div class="medium-12 colums">
                <div class="panel callout radius">
                    <div class="left">
                        <img src="/upload/groupimages/{{ $group->image }}" width="50" style="margin-right: 20px;">
                    </div>
                    {{ $group->name }}
                    <div class="right">
                        Delete
                    </div>
                </div>
            </div>
        </div>

        {!! Form::open(array('action' => 'ItemsController@create', 'files' => true)) !!}
        <div class="row">
            <input type="hidden" id="id" name="id" value="{{ $group->id }}">

            <div class="medium-2 columns">
                <label for="name" class="left inline">Item Name:</label>
                <input type="text" id="name" name="name">
            </div>

            <div class="medium-2 columns">
                <label for="shortdesc">Short Description:</label>
                <input type="text" id="shortdesc" name="shortdesc">
            </div>

            <div class="medium-2 columns">
                <label for="desc">Full Description:</label>
                <input type="text" id="desc" name="desc">
            </div>

            <div class="medium-2 columns">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price">
            </div>

            <div class="medium-4 columns">
                <label for="{{ $group->id }}Upload" class="hollow button btnmrg">Select File</label>
                <input type="file" name="{{ $group->id }}image" id="{{ $group->id }}Upload" class="show-for-sr">

                <input type="submit" value="Create Item" class="hollow button success btnmrg">
            </div>
        </div>
        {!! Form::close() !!}

        <div class="row">
            <div class="medium-12 columns">
                <table width="100%">
                    <thead>
                        <tr>
                            <th width="150">Image</th>
                            <th width="200">Name</th>
                            <th width="200">Short Desc</th>
                            <th width="150">Full Description</th>
                            <th width="150">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item )
                            @if($item->group_id === $group->id)
                            <tr>
                                <td><img src="/upload/itemimages/{{ $item->image }}" width="100"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->shortdesc }}</td>
                                <td>{{ $item->desc }}</td>
                                <td>{{ $item->price }}</td>
                            </tr>
                            @else
                                No items.
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
@endsection
