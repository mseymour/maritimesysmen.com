<article id="{{ $club->slug }}" itemscope itemtype="http://schema.org/Organization">
  <header class="card-header">
    <h1>
      <span itemprop="name"><a itemprop="url" href="{{ route('clubs.show', $club->slug) }}">{!! html_catchwordify($club->name) !!}</a></span>
      <small><em class="card-label">chartered</em> {{ $club->chartered }}</small>
    </h1>
  </header>
  <div class="card-wrap">
    @if($club->url)
    <dl class="card-info">
      <dt class="card-label">URL</dt>
      <dd class="card-info-link">{!! Html::link($club->url) !!}</dd>
    </dl>
    @endif
    @if($club->meeting_date || $club->meeting_time)
    <dl class="card-info">
      <dt class="card-label">Meets</dt>
      <dd>{{ $club->meeting_date }} @ {{ $club->meeting_time }}</dd>
    </dl>
    @endif
    @if($club->meeting_place_address || $club->meeting_place_city)
    <dl class="card-info">
      <dt class="card-label">Location</dt>
      <dd>
        <div class="club-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <h2 class="name" itemprop="name">{{ $club->meeting_place_name }}</h2>
          <span class="street-address" itemprop="streetAddress">{{ $club->meeting_place_address }}</span><br>
          <span class="locality" itemprop="addressLocality">{{ $club->meeting_place_city }}, {{ $club->meeting_place_province->code }}</span> <span class="postal-code" itemprop="postalCode">{{ $club->meeting_place_postal_code }}</span>
        </div>
      </dd>
    </dl>
    @endif
    <dl class="card-info">
      <dt class="card-label">President</dt>
      <dd>
        @include('clubs.partials.president', ['president' => $club->president])
      </dd>
    </dl>
  </div>
</article>
