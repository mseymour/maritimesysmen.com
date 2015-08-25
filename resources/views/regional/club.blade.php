@extends('layouts.master')

@section('title', $club->title.' - Clubs')

@section('content')
<h2>@if ($club->website)
  {!! link_to($club->website, $club->name) !!}
  @else
  {{ $club->name }}
  @endif</h2>
<p>{{ $club->meetings_times }}</p>
<p>{{ $club->meeting_place_name }}</p>
<p>{{ $club->meeting_place_address }}</p>
<p>{{ $club->meeting_place_city }}, {{ $club->meeting_place_province->code }}</p>
<p>Canada</p>
<p>{{ $club->meeting_place_postal_code }}</p>

<div style="outline:1px dashed red">
  <h3>@if ($club->president->email)
    {!! Html::mailto($club->president->email, $club->president->name) !!}
    @else
    {{ $club->president->name }}
    @endif</h3>
  <p>{{ $club->president->address }}</p>
  @if ($club->president->address2) <p>{{ $club->president->address2 }}</p> @endif
  <p>{{ $club->president->city }}, {{ $club->president->province->code }}</p>
  <p>{{ $club->president->phone }}</p>
</div>
@endsection