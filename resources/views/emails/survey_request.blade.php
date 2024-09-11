@extends('layouts.email')

@section('content')
    <h1>We Value Your Feedback!</h1>
    <p>Hi {{ $data['customer_name'] }},</p>
    <p>We'd love to hear your thoughts on your recent experience with us. Please take a few minutes to fill out this survey:</p>
    <a href="{{ $data['survey_link'] }}">Take the Survey</a>
    <p>Your feedback helps us improve!</p>
@endsection
