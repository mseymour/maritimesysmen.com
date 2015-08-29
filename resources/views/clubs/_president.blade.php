<h3>@if ($club->president->email)
  {!! Html::mailto($club->president->email, $club->president->name) !!}
  @else
  {{ $club->president->name }}
  @endif</h3>
<p>{{ $club->president->address }}</p>
@if ($club->president->address2) <p>{{ $club->president->address2 }}</p> @endif
<p>{{ $club->president->city }}, {{ $club->president->province->code }}</p>
<p>{{ $club->president->phone }}</p>