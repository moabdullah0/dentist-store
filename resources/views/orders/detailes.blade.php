@extends('admin.index')
@section('content')

    <div class="container">
        <h1>Orders for Today</h1>

        @if ($orders->isEmpty())
            <p>No orders found for today.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Total Price</th>
                    <th>Product After Discount Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>{{ $order->price_after_discount }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @endif
    </div>
    <div class="container" dir="rtl">
        <h1>Order Details</h1>
        @if ($orders)
            @foreach ($orders as $order)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Order ID: {{ $order['id'] }}</h5>
                        <p class="card-text">Total Price: {{ $order['total_price'] }}</p>
                        <p class="card-text">Status: {{ $order['status'] }}</p>
                        <p class="card-text">Order Date: {{ $order['created_at'] }}</p>

                        <h5>Order Items:</h5>
                        @foreach ($order->orderItems as $item)
                            <div class="mb-2">
                                <p class="font-weight-bold">اسم المنتج : {{ $item['product_name'] }}</p>
                                <p>العدد : {{ $item['numofpeace'] }}</p>
                                <p>------------------------------------</p>
                                {{-- Display other order item details --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @else
            <p>No orders found.</p>
        @endif
    </div>

@endsection
