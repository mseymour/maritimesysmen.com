<article id="{{ $club->slug }}" itemscope itemtype="http://schema.org/Organization">
  <header class="card-heading">
    <h1><span itemprop="name"><a itemprop="url" href="{{ route('clubs.show', $club->slug) }}">{!! html_catchwordify($club->name) !!}</a></span></h1>
    <em class="card-label">chartered</em> {{ $club->chartered }}
  </header>
  @if($club->url) {!! Html::link($club->url) !!} @endif
  <!--
  <div class="card-wrap">
     {{ $club->meeting_date }} @ {{ $club->meeting_time }}
    <div class="club-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span class="name" itemprop="name">{{ $club->meeting_place_name }}</span>
        <span class="street-address" itemprop="streetAddress">{{ $club->meeting_place_address }}</span>
        <span class="postal-code" itemprop="postalCode">{{ $club->meeting_place_postal_code }}</span>
        <span class="locality" itemprop="addressLocality">{{ $club->meeting_place_city }} {{ $club->meeting_place_province->code }}</span>
    </div>
    @include('partials.clubs.president', ['president' => $club->president])
  </div>-->
</article>
