@extends('layouts.master')

@section('title', 'Clubs')

@section('content')
@foreach ($districts as $district)
<h1>District({{ $district->id }}) — {{ $district->name }}</h1>
<ul>
  @foreach ($district->clubs as $club)
  <li>
    @include('clubs._club', ['club' => $club])
  </li>
  @endforeach
</ul>
@endforeach
@endsection