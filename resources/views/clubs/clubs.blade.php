@extends('layouts.master')

@section('title', 'Clubs')

@section('content')
@foreach ($districts as $district)
<h1>District({{ $district->id }}) — {{ $district->name }}</h1>
<ul class="cards">
  @foreach ($district->clubs as $club)
  <li class="card">
    @include('clubs._club', ['club' => $club])
  </li>
  @endforeach
</ul>
@endforeach
@endsection