@extends('layouts.master')

@section('title', $event->title.' - Events')

@section('head')
<!-- Mapbox.js - Map -->
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.16.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.16.0/mapbox-gl.css' rel='stylesheet'>
@endsection

@section('hero')
<section id="event-map" class="hero-map">
  
</section>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibWFya3NleW1vdXIiLCJhIjoiM3NyQlRJayJ9.v4kbFAbqZnHrdFYJtKlPgA';
var map = new mapboxgl.Map({
    container: 'event-map', // container id
    style: 'mapbox://styles/mapbox/streets-v8', //stylesheet location
    scrollWheelZoom: false
});
var source = new mapboxgl.GeoJSONSource({
    data: '/api/v1/event/{{ $event->slug }}.geojson'
});
map.on('style.load', function () {
    map.addSource('markers', source);
    map.addLayer({
        "id": "markers",
        "type": "symbol",
        "source": "markers",
        "layout": {
            "icon-image": "{marker-symbol}-15"
        }
    });
});
</script>
@endsection

@section('content')
@include('events.partials.event', ['event' => $event])
@endsection