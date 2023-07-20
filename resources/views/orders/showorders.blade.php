@can('قسم الطلبات')
@extends('admin.index')
@section('content')

    <form action="{{ url('admin/show-order') }}" method="GET">
        <div class="form-group">
            <label for="day">Day:</label>
            <input type="number" class="form-control" name="day" id="day" min="1" max="31" value="{{ now()->day }}">
        </div>
        <div class="form-group">
            <label for="month">Month:</label>
            <input type="number" class="form-control" name="month" id="month" min="1" max="12" value="{{ now()->month }}">
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" class="form-control" name="year" id="year" value="{{ now()->year }}">
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    <!-- table header -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col" class="text-light bg-dark">الاسم</th>
            <th scope="col" class="text-light bg-dark">الايميل</th>
            <th scope="col" class="text-light bg-dark">الهاتف</th>
            <th scope="col" class="text-light bg-dark">العنوان</th>
            <th scope="col" class="text-light bg-dark">اسم المنتج</th>
            <th scope="col" class="text-light bg-dark">العدد</th>
            <th scope="col" class="text-light bg-dark">السعر الاجمالي للطلب</th>
            <th scope="col" class="text-light bg-dark">View</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ordersByUser as $userId => $userOrders)
            @foreach($userOrders as $order)
                <tr>
                    <th scope="row">{{$order->user->name}}</th>
                    <td>{{$order->user->email}}</td>
                    <td>{{$order->user->phone}}</td>
                    <td>{{$order->user->address}}</td>
                    <td>{{$order->product_name}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->total_price}}</td>
                    <td><a href="{{url('admin/orders/'.$order->user_id)}}" class="btn btn-primary">Show</a></td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>

@endsection
@endcan
