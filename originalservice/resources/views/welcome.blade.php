@extends('layouts.app')

@section('content')
    <h1>Create Event</h1>
            
            
        {!! Form::model($events, ['route' => 'events.store']) !!}<br>

        {!! Form::label('month', 'Month:') !!}
        {!! Form::text('month') !!}
        <br>
        {!! Form::label('day', 'Day:') !!}
        {!! Form::text('day') !!}
        <br>
        {!! Form::label('timefrom', 'From:') !!}
        {!! Form::text('timefrom') !!}
        <br>
        {!! Form::label('timeto', 'To:') !!}
        {!! Form::text('timeto') !!}
        <br>
        {!! Form::label('place', 'Place:') !!}
        {!! Form::text('place') !!}
        <br>
        {!! Form::label('theme', 'Theme:') !!}
        {!! Form::text('theme') !!}
        <br>
        {!! Form::label('details', 'Details:') !!}
        {!! Form::text('details') !!}
        <br>
        {!! Form::label('maxpeople', 'Max People:') !!}
        {!! Form::text('maxpeople') !!}
        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
    
            {!! link_to_route('categories.create', '新規Eventの投稿') !!}
@endsection