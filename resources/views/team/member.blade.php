@extends('layouts.master')

@section('title', $member->name.', '.$member->title.' - Regional Team')

@section('content')
  @include('partials.team.member', ['member' => $member])
@endsection