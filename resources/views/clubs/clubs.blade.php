@extends('layouts.master')

@section('title', 'Clubs')

@section('head')
<!-- Mapbox.js - Map -->
<script src="https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.js"></script>
<link href="https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.css" rel="stylesheet" />
@endsection

@section('hero')
<section id="clubs-map" style="width:100%;height:500px">
  
</section>
<script>
L.mapbox.accessToken = 'pk.eyJ1IjoibWFya3NleW1vdXIiLCJhIjoiM3NyQlRJayJ9.v4kbFAbqZnHrdFYJtKlPgA';
var map = L.mapbox.map('clubs-map', 'markseymour.ndif9c29');
map.scrollWheelZoom.disable();
var featureLayer = L.mapbox.featureLayer('markseymour.ndif9c29')
    .loadURL('/api/clubs')
.addTo(map).on('ready', function(e) {
    map.fitBounds(featureLayer.getBounds());
});
</script>
@endsection

@section('content')
@foreach ($districts as $district)
<h1 class="h-major h-major-around"><span>{!! html_catchwordify($district->name) !!}</span></h1>
<ul class="cards">
  @foreach ($district->clubs as $club)
  <li class="card">
    @include('partials.clubs.club', ['club' => $club])
  </li>
  @endforeach
</ul>
@endforeach
@endsection