@extends('layouts.email')

@section('content')
    <h1>Your Order #{{ $data['order_id'] }} is on the Way!</h1>
    <p>Hi {{ $data['customer_name'] }},</p>
    <p>Your order has been shipped and is on its way to you!</p>
    <p>Tracking Number: {{ $data['tracking_number'] }}</p>
    <p>Estimated Delivery: {{ $data['delivery_date'] }}</p>
    <p>Thank you for shopping with us.</p>
@endsection
