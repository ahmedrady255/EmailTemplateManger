@extends('layouts.email')

@section('content')
    <h1>Your Subscription is About to Expire</h1>
    <p>Dear {{ $data['subscriber_name'] }},</p>
    <p>Your subscription will expire on {{ $data['expiry_date'] }}. Please renew to continue enjoying our services:</p>
    <a href="{{ $data['renewal_link'] }}">Renew Subscription</a>
    <p>Thank you for being a valued customer!</p>
@endsection
