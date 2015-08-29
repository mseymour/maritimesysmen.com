@extends('layouts.master')

@section('title', $club->title.' - Clubs')

@section('content')
  @include('clubs._club')
@endsection