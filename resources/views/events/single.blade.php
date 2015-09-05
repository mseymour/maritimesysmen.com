@extends('layouts.master')

@section('title', $event->title.' - Events')

@section('content')
@include('partials.events.event', ['event' => $event])
@endsection