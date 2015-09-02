@extends('layouts.master-wide')

@section('title', 'Homepage')

@section('content')
<section class="intro hero" style="text-align: center; background-image: url('img/homebg.jpg'); background-size: cover; background-position: center 15%;">
  <div class="wrap" style="margin-top: 100px; margin-bottom: 100px;">
    <img src="img/hero-welcome.svg" alt="We are the Maritimes Y&rsquo;s Men &mdash; Situated in the Atlantic Canadian provinces of New Brunswick, Nova Scotia, and Prince Edward Island, we serve our local YMCAs and volunteer in our communities.">
    <a aria-label="Learn More!" class="cta" href="about" role="button">Learn More!</a>
  </div>
</section>
@foreach ($events_major as $event)
<section class="convention">
  <div class="wrap">
    <h1 class="convention-headline">
      <span class="name">{{ $event->title }}</span>
      <span class="location"><span class="catchword">in</span> <span class="city">{{ $event->location_name }}, {{ $event->location_province->name }}</span></span>
      <time class="time" datetime="2015-05-15">{!! date_range_to_str($event->start_date, $event->end_date) !!}</time>
    </h1>
    <p>00 weeks, 00 days away</p>
    @if ($event->registration_url) <a aria-label="Register Now" class="cta" href="{{ $event->registration_url }}" role="button">Register Now</a> @endif
    <a aria-label="Learn More" class="cta" href="{{ route('events', $event->slug) }}" role="button">Learn More</a>
    
  </div>
</section>
@endforeach
@endsection