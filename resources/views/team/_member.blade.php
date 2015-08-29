<h2>@if ($member->email)
  {!! Html::mailto($member->email, $member->name . ' — ' . $member->title) !!}
  @else
  {{ $member->name }} &mdash; {{ $member->title }}
  @endif</h2>
<p>{{ $member->address }}</p>
@if ($member->address2) <p>{{ $member->address2 }}</p> @endif
<p>{{ $member->city }}, {{ $member->province->code }}</p>
<p>{{ $member->phone }}</p>
<p>{{ $member->fax }}</p>