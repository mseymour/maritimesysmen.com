<h1>{!! link_to_route('events', $event->title, ['id' => $event->slug]) !!}</h1>
<p>{{ $event->start_date }}</p>
<p>{{ $event->end_date }}</p>
<p>{{ $event->location_name }}</p>
<p>{{ $event->location_address }}</p>
<p>{{ $event->location_city }}</p>
<p>{{ $event->description }}</p>
<p>{{ $event->location_province->name }}</p>
<ul>
@foreach ($event->links->sortByDesc('is_main_link') as $link)
  <li @if ($link->is_main_link) style="font-size:125%" @endif>{!! link_to($link->link, $link->link_title) !!}</li>
@endforeach
</ul>