@extends('layouts.master')

@section('title', $club->name.' - Clubs')

@section('content')
<section class="card">
  @include('partials.clubs.club', ['club' => $club])
</section>
@endsection