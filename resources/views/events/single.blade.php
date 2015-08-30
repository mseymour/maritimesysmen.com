@extends('layouts.master')

@section('title', $event->title.' - Events')

@section('content')
@include('events._event', ['event' => $event])
@endsection