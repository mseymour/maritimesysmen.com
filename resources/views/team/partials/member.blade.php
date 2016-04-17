<article id="{{ $member->slug }}" itemscope itemtype="http://schema.org/Person">
  <header class="card-header">
    <h1>
      <span itemprop="title"><a itemprop="url" href="{{ route('regional-team.show', $member->slug) }}">{!! $member->title !!}</a></span>
      <small><span itemprop="name">{{ $member->name }}</span></small>
    </h1>
  </header>
  <div class="card-wrap">
    @if(Auth::check() && ($member->address || $member->city))
    <dl class="card-info">
      <dt class="card-label">Location</dt>
      <dd>
        <div class="club-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <!-- <h2 class="name" itemprop="name">{{ $member->name }}</h2> -->
          <span class="street-address" itemprop="streetAddress">
            {{ $member->address }}
            @if ($member->address2)
            <br>{{ $member->address2 }}
            @endif
          </span><br>
          <span class="locality" itemprop="addressLocality">{{ $member->city }}, {{ $member->province->code }}</span> <span class="postal-code" itemprop="postalCode">{{ $member->postal_code }}</span>
        </div>
      </dd>
    </dl>
    @endif
    @if ($member->email)
    <dl class="card-info">
      <dt class="card-label">Email</dt>
      <dd>{!! Html::mailto($member->email) !!}</dd>
    </dl>
    @endif
    @if ($member->phone)
    <dl class="card-info">
      <dt class="card-label">Phone</dt>
      <dd>{{ $member->phone }}</dd>
    </dl>
    @endif
    @if ($member->fax)
    <dl class="card-info">
      <dt class="card-label">Fax</dt>
      <dd>{{ $member->fax }}</dd>
    </dl>
    @endif
  </div>
</article>
