@extends('admin.index')
@section('content')


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
        </tr>
        </thead>
        <tbody>
        <tr class="">
            @foreach($orders as $order)
            <th scope="row">{{$order->name}}</th>
            <td>{{$order->email}}</td>
            <td>{{$order->phone}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->product_name}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->total_price}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection
