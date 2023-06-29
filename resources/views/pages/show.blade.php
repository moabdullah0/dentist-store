<h1>Order Details</h1>

<p><strong>Order ID:</strong> {{ $order->id }}</p>
<p><strong>Name:</strong> {{ $order->name }}</p>
<p><strong>Email:</strong> {{ $order->email }}</p>
<!-- Add other order-related information here -->

<h2>Order Items</h2>

<table>
    <thead>
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <!-- Add other columns as needed -->
    </tr>
    </thead>
    <tbody>
    @foreach ($orderDetails as $orderDetail)
        <tr>
            <td>{{ $orderDetail->product->name }}</td>
            <td>{{ $orderDetail->quantity }}</td>
            <td>{{ $orderDetail->price }}</td>
            <!-- Add other columns as needed -->
        </tr>
    @endforeach
    </tbody>
</table>
