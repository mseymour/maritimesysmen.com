@extends('layouts.master')

@section('title', 'Regional Team')

@section('content')
<h1 class="h-major h-major-around"><span>Maritimes Y&rsquo;s Men Regional Team <small>{{ $years['current_year'] }}&ndash;{{ $years['next_year'] }}</small></span></h1>

<ul class="cards">
@foreach ($team as $member)
  <li class="card">
    @include('partials.team.member', ['member' => $member])
  </li>
@endforeach
</ul>
@endsection