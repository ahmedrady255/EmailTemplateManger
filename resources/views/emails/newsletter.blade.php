@extends('layouts.email')

@section('content')
    <h1>Latest News from {{ config('app.name') }}</h1>
    <p>Hello {{ $data['subscriber_name'] }},</p>
    <p>Here's what's new this month:</p>
    <ul>
        @foreach ($data['news'] as $news)
            <li><a href="{{ $news['link'] }}">{{ $news['title'] }}</a> - {{ $news['summary'] }}</li>
        @endforeach
    </ul>
    <p>Thank you for subscribing!</p>
@endsection
