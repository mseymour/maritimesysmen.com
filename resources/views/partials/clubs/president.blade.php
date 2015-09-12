<div itemprop="member" itemscope itemtype="http://schema.org/Person">
  <h3 itemprop="name">{{ $president->name }}</h3>
  <p itemprop="email">{!! Html::mailto($president->email) !!}</p>
  {{-- <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">{{ $president->address }}</span>
    <span itemprop="addressLocality">{{ $president->city }}</span>,
    <span itemprop="addressRegion">{{ $president->province->name }}</span>
  </div>
  <p itemprop="telephone">{{ $president->phone }}</p> --}}

</div>