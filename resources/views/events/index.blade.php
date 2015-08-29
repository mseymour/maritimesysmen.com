@extends('layouts.master')

@section('title', 'Events')

@section('content')
<ul>
@foreach ($events as $event)
  <li>
    @include('partials.event')
  </li>
@endforeach
</ul>
@endsection