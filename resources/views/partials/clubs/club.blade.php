<div itemscope itemtype="http://schema.org/Organization">
  <h2 class="card-heading name">
    <img src="http://api.tiles.mapbox.com/v4/mapbox.streets/pin-l-star+d73027(-64.208244,45.831427)/-64.208244,45.833927,13/96x96.png?access_token=pk.eyJ1IjoibWFya3NleW1vdXIiLCJhIjoiM3NyQlRJayJ9.v4kbFAbqZnHrdFYJtKlPgA" alt="" class="card-heading-icon">
    <span itemprop="name">
      <a itemprop="url" href="{{ $club->url }}">{{ $club->name }}</a>
    </span>
  </h2>
  <div class="card-wrap">
    <p>{{ $club->chartered }}</p>
    <p>{{ $club->meeting_date }} @ {{ $club->meeting_time }}</p>
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span itemprop="name">{{ $club->meeting_place_name }}</span>
        <span itemprop="streetAddress">{{ $club->meeting_place_address }}</span>
        <span itemprop="postalCode">{{ $club->meeting_place_postal_code }}</span>
        <span itemprop="addressLocality">{{ $club->meeting_place_city }} {{ $club->meeting_place_province->code }}</span>
    </div>
    @include('partials.clubs.president', ['president' => $club->president])
  </div>
</div>