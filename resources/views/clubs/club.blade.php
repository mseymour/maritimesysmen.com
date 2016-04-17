@extends('layouts.master')

@section('title', $club->name.' - Clubs')

@section('content')
<section class="card">
  @include('clubs.partials.club', ['club' => $club])
</section>
@endsection