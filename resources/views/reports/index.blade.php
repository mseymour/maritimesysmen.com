@extends('layouts.master')

@section('title', 'Create a New Report')

@section('content')
<h1 class="h-major h-major-around"><span><small>Submit a new</small> Report</span></h1>

<ul>
    @foreach($report_forms as $report_form)
        <li><a href="{{ route('reports.create', ['reports' => $report_form->slug]) }}">{{ $report_form->title }}</a></li>
    @endforeach
</ul>

@endsection