@extends('layouts.app')

@section('content')

    <h1>バナナといったら　な～んだ</h1>

    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('content', 'バナナといったら:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}
        
        

    {!! Form::close() !!}
    {!! link_to_route('messages.show', '何を連想したのかな？') !!} 

@endsection