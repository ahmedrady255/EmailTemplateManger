@extends('layouts.email')

@section('content')
    <h1>Order Confirmation #{{ $data['order_id'] }}</h1>
    <p>Thank you for your purchase, {{ $data['customer_name'] }}!</p>
    <p>Order Summary:</p>
    <ul>
        @foreach ($data['items'] as $item)
            <li>{{ $item['name'] }} (x{{ $item['quantity'] }}) - ${{ $item['price'] }}</li>
        @endforeach
    </ul>
    <p>Total: ${{ $data['total'] }}</p>
    <p>We'll notify you when your items are shipped!</p>
@endsection
