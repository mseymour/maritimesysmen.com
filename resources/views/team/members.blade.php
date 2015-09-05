@extends('layouts.master')

@section('title', 'Regional Team')

@section('content')
<ul>
@foreach ($team as $member)
  <li>
    @include('partials.team.member', ['member' => $member])
  </li>
@endforeach
</ul>
@endsection