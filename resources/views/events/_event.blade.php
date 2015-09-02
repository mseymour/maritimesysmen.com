<div itemscope itemtype="http://schema.org/Event">
  <h1><a itemprop="url" href="{{ route('events', $event->slug) }}"><span itemprop="name">{{ $event->title }}</span></a></h1>
  <meta itemprop="startDate" content="{{ $event->start_date }}">
  <meta itemprop="endDate" content="{{ $event->end_date }}">

  <div itemprop="description">{{ $event->description }}</div>

  <div itemprop="location" itemscope itemtype="http://schema.org/Place">
    <div class="name">{{ $event->location_name }}</div>
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <span itemprop="streetAddress">{{ $event->location_address }}</span>
      <span itemprop="addressLocality">{{ $event->location_city }}</span>,
      <span itemprop="addressRegion">{{ $event->location_province->name }}</span>
    </div>
  </div>
  <ul>
  @foreach ($event->links as $link)
    <li>{!! link_to($link->url, $link->title) !!}</li>
  @endforeach
  </ul>
</div>