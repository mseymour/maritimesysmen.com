@extends('layouts.master')

@section('title', $event->title.' - Events')

@section('content')
<h1>{{ $event->title }}</h1>
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
@endsection