@extends('layouts.email')

@section('content')
    <h1>Password Reset Request</h1>
    <p>Hi {{ $data['user_name'] }},</p>
    <p>We received a request to reset your password. Click the button below to reset it:</p>
    <a href="{{ $data['reset_link'] }}">Reset Password</a>
    <p>If you didn't request this, please ignore this email.</p>
@endsection
