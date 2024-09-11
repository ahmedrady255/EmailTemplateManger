@extends('layouts.email')

@section('content')
    <h1>You're Invited to Our Event: {{ $data['event_name'] }}</h1>
    <p>Dear {{ $data['guest_name'] }},</p>
    <p>We are pleased to invite you to our upcoming event. Below are the details:</p>
    <p>Date: {{ $data['event_date'] }}</p>
    <p>Location: {{ $data['event_location'] }}</p>
    <a href="{{ $data['rsvp_link'] }}">RSVP Now</a>
    <p>We hope to see you there!</p>
@endsection
