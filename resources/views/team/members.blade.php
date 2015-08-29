@extends('layouts.master')

@section('title', 'Regional Team')

@section('content')
<ul>
@foreach ($team as $member)
  <li>
    @include('team._member')
  </li>
@endforeach
</ul>
@endsection