@extends('layouts.email')

@section('content')
    <h1>Activate Your {{ config('app.name') }} Account</h1>
    <p>Hello {{ $data['user_name'] }},</p>
    <p>Click the button below to activate your account and start using our services:</p>
    <a href="{{ $data['activation_link'] }}">Activate Account</a>
    <p>If you did not sign up for an account, please disregard this email.</p>
@endsection
