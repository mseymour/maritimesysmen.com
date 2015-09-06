@extends('layouts.master')

@section('title', 'Clubs')

@section('head')
<script src="https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.js"></script>
<link href="https://api.mapbox.com/mapbox.js/v2.2.2/mapbox.css" rel="stylesheet" />
@endsection

@section('hero')
<section id="clubs-map" style="width:100%;height:500px">
  
</section>
<script>
L.mapbox.accessToken = 'pk.eyJ1IjoibWFya3NleW1vdXIiLCJhIjoiM3NyQlRJayJ9.v4kbFAbqZnHrdFYJtKlPgA';
var map = L.mapbox.map('clubs-map', 'markseymour.l5lefiij');
    //.setView([46.241604, -65.255312], 8);
var clubPlaces = L.layerGroup().addTo(map);

// Use jQuery to make an AJAX request to the current page to load markers data.
$.getJSON(document.URL, function(result, status) {

    if (status !== 'success') return alert('Cannot load AJAX response.');
    var bounds = new L.LatLngBounds();

    // Transform each location result into a marker on the map.
    for (var i = 0; i < result.length; i++) {
      var club = result[i];
      var latlng = L.latLng(club.meeting_place_lat, club.meeting_place_long);
      var marker = L.marker(latlng, {
          icon: L.mapbox.marker.icon({
            'marker-color': '#FF0E24',
            'marker-symbol': 'star',
            'marker-size': 'large'
          })
        })
      .bindPopup(
        '<strong>' + club.name + '</strong>' +
        '<div class="club-address"><span class="name">' +
        club.meeting_place_name +
        '</span><br><span class="street-address">' +
        club.meeting_place_address +
        '</span><br><span class="postal-code">' +
        club.meeting_place_postal_code +
        '</span><br><span class="locality">' +
        club.meeting_place_city + ' ' + club.meeting_place_province.code +
        '</span></div>'
      )
        .addTo(clubPlaces);
      bounds.extend(marker.getLatLng());
    }
    map.fitBounds(bounds);
});

</script>
@endsection

@section('content')
@foreach ($districts as $district)
<h1>{{ $district->name }}</h1>
<ul class="cards">
  @foreach ($district->clubs as $club)
  <li class="card">
    @include('partials.clubs.club', ['club' => $club])
  </li>
  @endforeach
</ul>
@endforeach
@endsection