<h2>@if ($club->website)
  {!! Html::link($club->website, $club->name) !!}
  @else
  {{ $club->name }}
  @endif</h2>
<p>{{ $club->meetings_times }}</p>
<p>{{ $club->meeting_place_name }}</p>
<p>{{ $club->meeting_place_address }}</p>
<p>{{ $club->meeting_place_city }}, {{ $club->meeting_place_province->code }}</p>
<p>Canada</p>
<p>{{ $club->meeting_place_postal_code }}</p>

<div style="outline:1px dashed red">
  @include('clubs._president')
</div>