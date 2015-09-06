<div id="{{ $club->slug }}" itemscope itemtype="http://schema.org/Organization">
  <h2 class="card-heading name">
    <img src="http://api.tiles.mapbox.com/v4/mapbox.streets/pin-l-star+FF0E24({{ $club->meeting_place_long }},{{ $club->meeting_place_lat }})/{{ $club->meeting_place_long }},{{ $club->meeting_place_lat }},14/96x96.png?access_token=pk.eyJ1IjoibWFya3NleW1vdXIiLCJhIjoiM3NyQlRJayJ9.v4kbFAbqZnHrdFYJtKlPgA" alt="" class="card-heading-icon">
    <span itemprop="name">
      <a itemprop="url" href="{{ $club->url }}">{{ $club->name }}</a>
    </span>
  </h2>
  <div class="card-wrap">
    <p>{{ $club->chartered }}</p>
    <p>{{ $club->meeting_date }} @ {{ $club->meeting_time }}</p>
    <div class="club-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span class="name" itemprop="name">{{ $club->meeting_place_name }}</span>
        <span class="street-address" itemprop="streetAddress">{{ $club->meeting_place_address }}</span>
        <span class="postal-code" itemprop="postalCode">{{ $club->meeting_place_postal_code }}</span>
        <span class="locality" itemprop="addressLocality">{{ $club->meeting_place_city }} {{ $club->meeting_place_province->code }}</span>
    </div>
    @include('partials.clubs.president', ['president' => $club->president])
  </div>
</div>
