@extends('layouts.master')

@section('title', 'Clubs')

@section('head')
<!-- Mapbox.js - Map -->
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.16.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.16.0/mapbox-gl.css' rel='stylesheet'>
@endsection

@section('hero')
<section id="clubs-map" class="hero-map clubs-map">
  
</section>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibWFya3NleW1vdXIiLCJhIjoiM3NyQlRJayJ9.v4kbFAbqZnHrdFYJtKlPgA';
var map = new mapboxgl.Map({
    container: 'clubs-map', // container id
    style: 'mapbox://styles/mapbox/streets-v8', //stylesheet location
    scrollWheelZoom: false
});
var source = new mapboxgl.GeoJSONSource({
    data: '/api/v1/clubs.geojson'
});
map.on('style.load', function () {
    map.addSource('markers', source);
    map.addLayer({
        "id": "markers",
        "type": "symbol",
        "source": "markers",
        "layout": {
            "icon-image": "{marker-symbol}-24.svg",
            "icon-allow-overlap": true
        }
    });
});
</script>
@endsection

@section('content')
@foreach ($districts as $district)
<h1 class="h-major h-major-around"><span>{!! html_catchwordify($district->name) !!}</span></h1>
<ul class="cards">
  @foreach ($district->clubs as $club)
  <li class="card">
    @include('clubs.partials.club', ['club' => $club])
  </li>
  @endforeach
</ul>
@endforeach
@endsection