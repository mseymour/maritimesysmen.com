@extends('layouts.master')

@section('title', $member->name.', '.$member->title.' - Regional Team')

@section('content')
  @include('team.partials.member', ['member' => $member])
@endsection