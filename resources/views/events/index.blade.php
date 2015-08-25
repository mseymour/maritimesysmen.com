@extends('layouts.master')

@section('title', 'Events')

@section('content')
<ul>
@foreach ($events as $event)
  <li>
    <h1>{!! link_to_route('events', $event->title, ['id' => $event->slug]) !!}</h1>
    <p>{{ $event->start_date }}</p>
    <p>{{ $event->end_date }}</p>
    <p>{{ $event->location_name }}</p>
    <p>{{ $event->location_address }}</p>
    <p>{{ $event->location_city }}</p>
    <p>{{ $event->description }}</p>
    <p>{{ $event->is_main_event }}</p>
    <p>{{ $event->location_province->name }}</p>
    <div style="outline:1px dashed red">
      <ul>
      @foreach ($event->links as $link)
        <li>{!! link_to($link->link, $link->link_title) !!} &mdash; {{ $link->is_main_link }}</li>
      @endforeach
      </ul>
    </div>
  </li>
@endforeach
</ul>
@endsection