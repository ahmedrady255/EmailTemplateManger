@extends('layouts.email')

@section('content')
    <h1>Welcome to {{ config('app.name') }}, {{ $data['user_name'] }}!</h1>
    <p>We're excited to have you on board. Explore our services and get the most out of your experience.</p>
    <p><a href="{{ $data['dashboard_link'] }}">Go to your dashboard</a></p>
    <p>Feel free to contact us anytime at support@example.com.</p>
@endsection
