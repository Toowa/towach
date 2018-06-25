<!--@extends('layouts.app')-->

@section('content')
    <p>何を連想したのかな？</p>
    
@foreach ($message as $m)
    <p>{{ $m->content }}</p>
@endforeach
   

@endsection