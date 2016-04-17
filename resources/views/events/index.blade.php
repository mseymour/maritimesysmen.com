@extends('layouts.master')

@section('title', 'Events')

@section('content')
<ul class="cards">
@foreach ($events as $event)
  <li class="card">
    @include('events.partials.event', ['event' => $event])
  </li>
@endforeach
</ul>
@endsection