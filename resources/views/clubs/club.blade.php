@extends('layouts.master')

@section('title', $club->title.' - Clubs')

@section('content')
  @include('partials.clubs.club', ['club' => $club])
@endsection