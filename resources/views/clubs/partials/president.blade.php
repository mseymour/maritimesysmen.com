<ul itemprop="member" itemscope itemtype="http://schema.org/Person">
  <h3 itemprop="name">{{ $president->name }}</h3>
  @if ($president->email) <li itemprop="email">{!! Html::mailto($president->email) !!}</li> @endif
@if (Auth::check())
  @if ($president->address || $president->city)
  <li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">{{ $president->address }}</span><br>
    <span itemprop="addressLocality">{{ $president->city }}</span>,
    <span itemprop="addressRegion">{{ $president->province->name }}</span>
  </li>
  @endif
  @if ($president->phone)
  <li itemprop="telephone">{{ $president->phone }}</li>
  @endif
@endif
</ul>