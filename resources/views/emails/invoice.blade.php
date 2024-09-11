@extends('layouts.email')

@section('content')
    <h1>Invoice for Your Recent Purchase</h1>
    <p>Dear {{ $data['customer_name'] }},</p>
    <p>Here is your invoice for Order #{{ $data['order_id'] }}:</p>
    <table>
        <thead>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data['items'] as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>${{ $item['price'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>${{ $item['price'] * $item['quantity'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p>Total: ${{ $data['total'] }}</p>
@endsection
