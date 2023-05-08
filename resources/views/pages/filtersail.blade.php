@extends('admin.index')
    @section('content')
</div>

<div class="mt-96">
<form action="{{ route('orders.sailesfilter') }}" method="GET">
    <div class="form-group row">
        <label for="month" class="col-md-4 col-form-label text-md-right">{{ __('Month') }}</label>

        <div class="col-md-6">
            <select id="month" class="form-control @error('month') is-invalid @enderror" name="month" required>
                <option value="">-- Select Month --</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>

            @error('month')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

        <div class="col-md-6">
            <select id="year" class="form-control @error('year') is-invalid @enderror" name="year" required>
                @for ($i = date('Y'); $i >= 2010; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>

            @error('year')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Filter</button>
</form>
<div class="mt-5 ">
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
</div>
</div>
@endsection
