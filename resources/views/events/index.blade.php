@extends('layouts.master')

@section('title', 'Events')

@section('content')
<ul>
@foreach ($events as $event)
  <li>
    @include('events._event')
  </li>
@endforeach
</ul>
@endsection