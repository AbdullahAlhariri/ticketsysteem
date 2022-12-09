@extends('layouts.main')

@section('content')
    <h1>Events</h1>
    @foreach($events as $event )
        {{ $event->display }}
        {{ $event->location }}
        {{ $event->description }}
    @endforeach
@endsection
