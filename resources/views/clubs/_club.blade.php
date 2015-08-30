<div itemscope itemtype="http://schema.org/Organization" style="border:3px solid black">
  <h2><a itemprop="url" href="{{ $club->website }}"><span itemprop="name">{{ $club->name }}</span></a></h2>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <span itemprop="name">{{ $club->meeting_place_name }}</span>
      <span itemprop="streetAddress">{{ $club->meeting_place_address }}</span>
      <span itemprop="postalCode">{{ $club->meeting_place_postal_code }}</span>
      <span itemprop="addressLocality">{{ $club->meeting_place_city }} {{ $club->meeting_place_province->code }}</span>
  </div>
  @include('clubs._president', ['president' => $club->president])
</div>